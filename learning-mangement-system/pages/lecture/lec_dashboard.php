<?php

session_start();
include_once '../../inc/db_connect.php"';

if (isset($_SESSION['lec_id'])) {
    $lecturer_id = $_SESSION['lec_id'];

    // Fetch lecturer details from the database
    $stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
    $stmt->bind_param("i", $lecturer_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $lecturer = $result->fetch_assoc();
    } else {
        echo "No lecturer found with the given ID.";
        exit;
    }

    $stmt->close();
} else {
    echo "No lecturer is logged in.";
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecturer Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/stu_nav_footer.css">
    <link rel="stylesheet" href="../../assets/css/courses_without_login.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.3/js/bootstrap.min.js"></script>

    <style>
        body {
            background-color: #f4f4f4;
        }

        .container {
            display: flex;

        }

        .sidebar {
            width: 15%;
            background-color: #e0e0e0;
            padding: 30px;

        }

        .sidebar ul {
            list-style-type: none;
            margin-top: 80px;

        }

        .sidebar ul li {
            margin-bottom: 35px;
        }

        .sidebar ul li a {
            text-decoration: none;
            color: black;
            font-size: 18px;
        }

        .sidebar ul :hover {

            background-color: gray;
            font-weight: bold;
        }

        .main-content {
            margin-top: 40px;
            width: 80%;
            padding: 40px;
            display: flex;
            justify-content: space-between;
        }

        .lec-info h1 {
            font-size: 30px;
            margin-bottom: 40px;
        }

        .lec-info h2 {
            color: #3498db;
            font-size: 24px;
            margin-bottom: 40px;
        }

        .lec-info p {
            font-size: 16px;
            margin-bottom: 20px;
        }

        .lec-info p strong {
            font-weight: bold;
            font-size: 18px;
            color: #333;
            margin: 4px 0px;

        }

        .lec-info p span {
            color: #333;
            font-weight: 500;
        }

        .subject-buttons {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 20px;
            margin-top: 150px;
            align-self: flex-start;
            margin-left: auto;
        }

        .subject {

            padding: 20px;
            width: 200px;
            border: none;
            font-size: 25px;
            font-weight: bold;
            color: white;
            cursor: pointer;
        }

        .subject-buttons :hover {
            font-size: 27px;
            background-color: darkred;
        }

        .subject.red {
            background-color: red;
        }

        .subject.black {
            background-color: black;
        }

        .subject.blue {
            background-color: blue;
        }

        /* Footer Styles (keep existing styles) */
    </style>
</head>

<body>

    <?php
    include('./lec_inc/lec_nav.php');
    ?>

    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <ul>
                <li><a href="time_table.php">Time Table</a></li>
                <li><a href="lecturer_details.php">Lecturers</a></li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <!-- lec Info -->

            <div class="lec-info" style="padding-top: 25px;">
                <h2>Lecturer Information</h2>
                <p style="margin-top: 12px;"><strong style="display: block; margin-top: 24px;">Register Date:</strong> <span style="font-weight: 400 ;"><?php echo htmlspecialchars($lecturer['create_date']); ?></span></p>
                <p style="margin-top: 12px;"><strong style="display: block; margin-top: 24px;">Full Name:</strong> <span style="font-weight: 400 ;"><?php echo htmlspecialchars($lecturer['fullname']); ?></span></p>
                <p style="margin-top: 12px;"><strong style="display: block; margin-top: 24px;">Address:</strong> <span style="font-weight: 400 ;"><?php echo htmlspecialchars($lecturer['address']); ?></span></p>
                <p style="margin-top: 12px;"><strong style="display: block; margin-top: 24px;">Email:</strong> <span style="font-weight: 400 ;"><?php echo htmlspecialchars($lecturer['email']); ?></span></p>
                <p style="margin-top: 12px;"><strong style="display: block; margin-top: 24px;">Contact:</strong> <span style="font-weight: 400 ;"><?php echo htmlspecialchars($lecturer['contact']); ?></span></p>
            </div>

            <!-- Subject Buttons -->
            <div class="subject-buttons">
                <?php
                include_once "../../inc/db_connect.php";
                $sql = "SELECT * FROM subject";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<a href="../stu_dash_subject.php?subject=' . $row['subject_id'] . '"><button type="button" button class="subject red">' . $row['subject_name'] . '</button></a>';
                    }
                } else {
                    echo "No subjects available";
                }
                $conn->close();
                ?>
            </div>
        </div>
    </div>

    <?php
    include('./lec_inc/lec_footer.php');
    ?>


    <!-- Font Awesome for social media icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <script src="slider.js"></script> <!-- Link to your JavaScript -->



</body>

</html>