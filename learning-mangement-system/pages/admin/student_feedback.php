<?php
include_once "../../inc/db_connect.php";

session_start();

$sql = "SELECT * FROM users";
$users = mysqli_query($conn, $sql);


$user_type_filter = isset($_POST['user_type']) ? $_POST['user_type'] : '';

$sql = "SELECT * FROM users";
if (!empty($user_type_filter)) {
    $sql .= " WHERE user_type = '" . mysqli_real_escape_string($conn, $user_type_filter) . "'";
}
$users = mysqli_query($conn, $sql);

if (isset($_POST["id"])) {
    $id = $_POST["id"];

    if (isset($_POST["userType"])) {
        $userType = $_POST["userType"];
        $sql = "UPDATE users SET user_type = '$userType' WHERE id=$id";
    } else {
        $sql = "DELETE FROM users WHERE id=$id";
    }

    $conn->query($sql);
    exit();
}


?>

<?php
// Fetch Feedback Data from the database
$query = "SELECT f_id, f_name AS `Student Name`, f_email AS `Email`, comment AS `Message`, create_date AS `Date`, status FROM feedback";
$result = $conn->query($query);

// Check for SQL errors
if (!$result) {
    die("Query failed: " . $conn->error); // Debugging error message
}

// Handle Publish Action
if (isset($_POST['publish']) && isset($_POST['f_id'])) {
    $feedback_id = intval($_POST['f_id']); // Get feedback ID
    $updateQuery = "UPDATE feedback SET status = 1 WHERE f_id = $feedback_id"; // Update status to 1 (Published)

    if ($conn->query($updateQuery)) {
        // Redirect to the same page after successful update
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    } else {
        $error_message = "Error publishing feedback: " . $conn->error; // Set error message
    }
}

// Handle Delete Action
if (isset($_POST['delete']) && isset($_POST['f_id'])) {
    $feedback_id = intval($_POST['f_id']); // Get feedback ID
    $deleteQuery = "DELETE FROM feedback WHERE f_id = $feedback_id"; // Delete the feedback

    if ($conn->query($deleteQuery)) {
        // Redirect to the same page after successful deletion
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    } else {
        $error_message = "Error deleting feedback: " . $conn->error; // Set error message
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Static Navigation - SB Admin</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html">ADIMIN PANEL</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="#!">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="index.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">Interface</div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Layouts
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="#">Manage Users</a>
                                <a class="nav-link" href="subject.php">Manage Subject</a>
                                <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Pages
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                    Authentication
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="login.html">Login</a>
                                        <a class="nav-link" href="register.html">Register</a>
                                        <a class="nav-link" href="password.html">Forgot Password</a>
                                    </nav>
                                </div>
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                    Error
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="401.html">401 Page</a>
                                        <a class="nav-link" href="404.html">404 Page</a>
                                        <a class="nav-link" href="500.html">500 Page</a>
                                    </nav>
                                </div>
                            </nav>
                        </div>
                        <div class="sb-sidenav-menu-heading">Addons</div>
                        <a class="nav-link" href="charts.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Charts
                        </a>
                        <a class="nav-link" href="tables.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Tables
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    SLTB Mawanelle Depot
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">

            <main>
                <div class="container mt-5">
                    <!-- Filter Form -->
                    <form method="POST" action="" class="mb-4">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="filterStatus" class="form-label">Filter by Status:</label>
                                <select name="filter_status" id="filterStatus" class="form-select">
                                    <option value="">All</option>
                                    <option value="1" <?php echo isset($_POST['filter_status']) && $_POST['filter_status'] == '1' ? 'selected' : ''; ?>>Published</option>
                                    <option value="0" <?php echo isset($_POST['filter_status']) && $_POST['filter_status'] == '0' ? 'selected' : ''; ?>>Unpublished</option>
                                </select>
                            </div>
                            <div class="col-md-6 d-flex align-items-end">
                                <button type="submit" class="btn btn-primary">Apply Filter</button>
                            </div>
                        </div>
                    </form>

                    <?php
                    // Determine the filter value
                    $filter_status = isset($_POST['filter_status']) ? intval($_POST['filter_status']) : null;

                    // Modify query based on the filter
                    $query = "SELECT f_id, f_name AS `Student Name`, f_email AS `Email`, comment AS `Message`, create_date AS `Date`, status FROM feedback";
                    if ($filter_status !== null && $filter_status !== '') {
                        $query .= " WHERE status = $filter_status";
                    }

                    $result = $conn->query($query);

                    // Display error message if query fails
                    if (!$result) {
                        die("Query failed: " . $conn->error);
                    }

                    if ($result->num_rows > 0) {
                    ?>
                        <table class="table table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>Student Name</th>
                                    <th>Email</th>
                                    <th>Message</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // Loop through each feedback
                                while ($row = $result->fetch_assoc()) {
                                ?>
                                    <tr>
                                        <td><?php echo htmlspecialchars($row['Student Name']); ?></td>
                                        <td><?php echo htmlspecialchars($row['Email']); ?></td>
                                        <td><?php echo htmlspecialchars($row['Message']); ?></td>
                                        <td><?php echo htmlspecialchars($row['Date']); ?></td>
                                        <td>
                                            <form method="POST" action="">
                                                <input type="hidden" name="f_id" value="<?php echo $row['f_id']; ?>">
                                                <!-- Publish Button -->
                                                <button
                                                    type="submit"
                                                    name="publish"
                                                    class="btn btn-success <?php echo $row['status'] == 1 ? 'disabled' : ''; ?> "
                                                    <?php echo $row['status'] == 1 ? 'disabled' : ''; ?>>
                                                    Publish
                                                </button>
                                                <!-- Delete Button -->
                                                <button
                                                    type="submit"
                                                    name="delete"
                                                    class="btn btn-danger">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    <?php
                    } else {
                        echo "<p class='text-center'>No feedback found for the selected filter.</p>";
                    }
                    ?>
                </div>
            </main>



            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Bus Managment System easy 2024</div>

                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>


</body>

</html>