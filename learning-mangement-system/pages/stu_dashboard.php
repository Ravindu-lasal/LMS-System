<?php
include('../inc/db_connect.php');
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.3/js/bootstrap.min.js"></script>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }


        body {
            height: 100vh;
            list-style-type: none;
        }

        header {
            background-color: #2c3e50;
            padding: 15px 0;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
        }

        .logo {
            display: flex;
            text-align: center;
            align-items: center;
            justify-content: space-between;
            gap: 10px;
        }

        .logo p {
            color: #eaeaea;
            font-size: 18px;
            font-weight: bold;
            padding-top: 20px;
        }


        .logo img {
            height: 50px;
            /* Adjust based on your logo */
        }

        /* Navigation Links */
        .nav-links {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        .nav-links li {
            margin-right: 20px;
        }

        .nav-links li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
        }

        .nav-links li a:hover {
            color: #3498db;
        }

        /* Sign In and Sign Up Buttons */
        .auth-buttons {
            display: flex;
        }

        .auth-buttons .btn {
            text-decoration: none;
            padding: 10px 20px;
            margin-left: 15px;
            border-radius: 5px;
            font-size: 16px;
        }

        .auth-buttons .logout {
            background-color: #3498db;
            color: white;
        }

        .auth-buttons .btn:hover {
            opacity: 0.8;
        }

        body {
            background-color: #f4f4f4;
        }

        .container {
            display: flex;
        }

        .sidebar {
            width: 10%;
            background-color: #e0e0e0;
            padding: 10px;

        }

        .sidebar ul {
            list-style-type: none;
            margin-top: 100px;
            margin-left: 30px;

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

        .student-info h1 {
            font-size: 27px;
            margin-bottom: 40px;
        }

        .student-info h1 span {
            color: #3498db;
            font-size: 40px;
            margin-bottom: 40px;
        }

        .student-info h2 {
            font-size: 24px;
            margin-bottom: 40px;
        }

        .student-info p {
            font-size: 16px;
            margin-bottom: 20px;
        }

        .subject-buttons {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 20px;
            margin-top: 80px;
            margin-right: -65px;
            margin-left: 50px;
            padding-bottom: 100px;
            align-self: flex-start;
        }

        .subject-buttons a {
            text-decoration: none;
            text-align: center;
            text-shadow: #333333;

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


        .footer {
            background-color: #1a2d41;
            /* Light background color */
            color: #ffffff;
            /* Dark text color */
            padding: 20px 20px;
            /* Reduced padding to minimize space */
            height: auto;
            /* Remove fixed height, let the content determine height */
        }

        .footer .container {
            display: flex;
            /* Use Flexbox for layout */
            justify-content: space-between;
            /* Space between items */
            align-items: flex-start;
            /* Align items at the top */
            flex-wrap: wrap;
            /* Allow the content to wrap in case of smaller screens */
        }

        .footer h5 {
            margin-bottom: 10px;
            /* Reduced space below headings */
            font-size: 18px;
            /* Font size for headings */
            font-weight: bold;
            /* Bold headings */
        }

        .footer ul {
            list-style-type: none;
            /* Remove bullet points from lists */
            padding: 0;
            /* Remove padding from lists */
        }

        .footer ul li {
            margin-bottom: 8px;
            /* Reduced space between list items */
        }

        .footer ul li a {
            color: #ffffff;
            /* Dark text color for links */
            text-decoration: none;
            /* Remove underline from links */
            transition: color 0.3s ease;
            /* Smooth transition for hover effect */
        }

        .footer .social-media a:hover {
            color: #3b5998;
        }

        .footer .social-media a:nth-child(2):hover {
            color: #000000;
        }

        .footer .social-media a:nth-child(3):hover {
            background-image: linear-gradient(to right, #ff0080, #ff8c00);
        }

        .footer .social-media a:nth-child(4):hover {
            color: #0077b5;
        }

        .footer .social-media a:nth-child(5):hover {
            color: #333333;
        }

        .footer p {
            margin-top: 10px;
            /* Reduced margin at the bottom */
        }

        /* Responsive adjustments for smaller screens */
        @media (max-width: 768px) {
            .footer .container {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .footer .social-media a {
                margin-right: 10px;
                margin-bottom: 5px;
            }
        }
    </style>
</head>

<body>

    <?php
    include('./student_inc/stu_nav.php');
    ?>


    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <ul>
                <li><a href="./time_table.php">Time Table</a></li>
                <li><a href="./lecturer_details.php">Lecturers</a></li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="container">
            <div class="sidebar">
                <!-- Sidebar content -->
            </div>

            <!-- Main Content -->
            <div class="main-content">
                <div class="student-info">
                    <?php

                    // Display the student dashboard
                    echo "<h1><span>Welcome..!</span> <br> " . $_SESSION['st_name']  . "</h1>";
                    echo "<p>This is your student dashboard. Here you can access your subjects and other details.</p>";
                    ?>

                </div>

                <!-- Subject Buttons -->
                <div class="subject-buttons">
                    <a href="./subject_reso.php" button class="subject red">WEB</button></a>
                    <a href="stu_dash_subject.php" button class="subject black">OOP</button></a>
                    <a href="stu_dash_subject.php" button class="subject red">DBMS</button></a>
                    <a href="stu_dash_subject.php" button class="subject black">IS</button></a>
                    <a href="stu_dash_subject.php" button class="subject red">DSA</button></a>
                    <a href="stu_dash_subject.php" button class="subject black">OS</button></a>
                    <a href="stu_dash_subject.php" button class="subject red">Statics</button></a>
                </div>
            </div>
        </div>
    </div>

    <?php
    include('./student_inc/stu_footer.php');
    ?>

    <!-- Font Awesome for social media icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <script src="slider.js"></script> <!-- Link to your JavaScript -->

</body>

</html>