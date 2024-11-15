<?php
include_once "../../inc/db_connect.php";

$sql = "SELECT * FROM subject";
$subjects = mysqli_query($conn, $sql);

if (isset($_POST["id"])) {
    $id = $_POST["id"];

    $sql = "DELETE FROM subject WHERE subject_id=$id";
    $conn->query($sql);
}

?>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $subject_code = trim($_POST['subject_code']);
    $subject_name = trim($_POST['subject_name']);

    if (empty($subject_code) || empty($subject_name)) {
        header('location:./subject.php?massage=Subject code and subject name are required.!');
    } else {

        $stmt = $conn->prepare("INSERT INTO subject (subject_code, subject_name) VALUES (?, ?)");
        $stmt->bind_param("ss", $subject_code, $subject_name);

        if ($stmt->execute()) {
            header('location:./subject.php?massage=Subject added successfully!');
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    }
}

?>
<a href="./subject.php"></a>

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
                                <a class="nav-link" href="users.php">Manage Users</a>
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
                <div class="container-fluid px-3 d-flex justify-content-between flex-wrap">
                    <div class="border boder-5 boder-red col-7 ">
                        <h1 class="mt-4">Subject Details</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Subject Details</li>
                        </ol>
                        <table class="table align-middle mb-0 bg-white ">
                            <thead class="bg-light">
                                <tr>
                                    <th>Name</th>
                                    <th>Title</th>
                                    <th>Actions</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($subjects as $subject) {
                                ?>

                                    <tr>
                                        <td><?php echo $subject['subject_code'] ?></td>

                                        <td><?php echo $subject['subject_name'] ?></td>
                                        <td>
                                            <button type="button" class="btn btn-link btn-sm btn-rounded">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button type="button" class="btn btn-link btn-sm btn-rounded">
                                                <i class="fas fa-trash-alt" onclick="deleteUser(<?php echo $subject['subject_id'] ?>,event)"></i>
                                            </button>
                                        </td>
                                    </tr>
                                <?php } ?>


                            </tbody>
                        </table>
                        <div style="height: 100vh"></div>

                        <div class="card mb-4">
                            <div class="card-body">When scrolling, the navigation stays at the top of the page. This is the end of the static navigation demo.</div>
                        </div>
                    </div>

                    <div class="px-2 col-lg-5 col-md-12 mt-lg-0 mt-4">
                        <div class="card mt-5">
                            <div class="card-header bg-dark text-white">
                                <h2 class="mt-2">Add Subject</h2>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputsubject" name="subject_code" type="text" placeholder="Subject Code" required />
                                        <label for="inputsubject">Add Subject Code</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputtext" name="subject_name" type="text" placeholder="Subject Name" required />
                                        <label for="inputtext">Add Subject Name</label>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <button type="submit" class="btn btn-dark w-100">Add Subject</button>
                                    </div>
                                </form>
                            </div>
                        </div>

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

    <script>
        function deleteUser(subjectId, event) {
            const xhr = new XMLHttpRequest();
            xhr.open('POST', 'subject.php');
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onload = () => {
                if (xhr.status === 200) {
                    window.location.reload();
                }
            }
            xhr.send(`id=${subjectId}`);


        }
    </script>
</body>

</html>