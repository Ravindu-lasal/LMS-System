<?php

session_start();
include_once '../inc/db_connect.php';

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
            height: 100vh;
        }

        .sidebar {
            width: 15%;
            background-color: #e0e0e0;
            padding: 30px;

        }

        .sidebar ul {
            list-style-type: none;
            margin-top: 150px;

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
            font-size: 24px;
            margin-bottom: 40px;
        }

        .lec-info p {
            font-size: 16px;
            margin-bottom: 20px;
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

        .footer {
            background-color: #1a2d41;
            /* Light background color */
            color: #ffffff;
            /* Dark text color */
            padding: 40px 20px;
            /* Padding around the footer */
        }

        .footer .container {
            display: flex;
            /* Use Flexbox for layout */
            justify-content: space-between;
            /* Space between items */
            align-items: flex-start;
            /* Align items at the top */
        }

        .footer h5 {
            margin-bottom: 15px;
            /* Space below headings */
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
            margin-bottom: 10px;
            /* Space between list items */
        }

        .footer ul li a {
            color: #ffffff;
            /* Dark text color for links */
            text-decoration: none;
            /* Remove underline from links */
            transition: color 0.3s ease;
            /* Smooth transition for hover effect */
        }

        /* Hover colors for social media icons in footer*/
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
            margin-top: 20 px;
        }

        /* Responsive adjustments for smaller screens*/
        @media (max-width :768px) {
            .footer .container {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .footer .social-media a {
                margin-right: 10 px;
                margin-bottom: 5 px;
            }
        }
    </style>
</head>

<body>

    <header>
        <div class="navbar">
            <div class="logo"><img src="../assets/LMS_logo re.jpg" alt="Logo"></div>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Courses</a></li>
                <li><a href="#">About</a></li>
                <li><a href="..\pages\contact.php">Contact</a></li>
            </ul>
            <div class="auth-buttons">
                <a href="../inc/logout.php" class="btn logout">Log Out</a>

            </div>
        </div>
    </header>


    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <ul>
                <li><a href="time_table.php">Time Table</a></li>
                <li><a href="#">Attendance</a></li>
                <li><a href="#">Library</a></li>
                <li><a href="#">Results</a></li>
                <li><a href="lecturer_details.php">Lecturers</a></li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <!-- lec Info -->
            <div class="lec-info">
                <p><strong>Full Name:</strong> <?php echo htmlspecialchars($lecturer['fullname']); ?></p>
                <p><strong>Address:</strong> <?php echo htmlspecialchars($lecturer['address']); ?></p>
                <p><strong>Email:</strong> <?php echo htmlspecialchars($lecturer['email']); ?></p>
                <p><strong>Contact:</strong> <?php echo htmlspecialchars($lecturer['contact']); ?></p>
                <p><strong>Register Date:</strong> <?php echo htmlspecialchars($lecturer['create_date']); ?></p>
            </div>

            <!-- Subject Buttons -->
            <div class="subject-buttons">
                <?php
                include_once "../inc/db_connect.php";
                $sql = "SELECT * FROM subject";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<a href="stu_dash_subject.php?subject=' . $row['subject_id'] . '"><button type="button" button class="subject red">' . $row['subject_name'] . '</button></a>';
                    }
                } else {
                    echo "No subjects available";
                }
                $conn->close();
                ?>
            </div>
        </div>
    </div>
    <footer class="footer bg-light py-4"> <!-- Changed background color to light -->
        <div class="container d-flex justify-content-between align-items-start">
            <div class="logo">
                <img src="../assets/LMS_logo re.jpg" alt="Logo" class="img-fluid" style="max-width: 150px;"> <!-- Replace with your logo path -->
            </div>
            <div class="quick-links">
                <h5>Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="#contact" class="text-dark">Contact Us</a></li>
                    <li><a href="#about" class="text-dark">About</a></li>
                    <li><a href="#services" class="text-dark">Services</a></li>
                    <li><a href="#faq" class="text-dark">FAQ</a></li>
                </ul>
            </div>
            <div class="social-media text-center">
                <h5>Follow Us</h5>
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="#" class="text-dark"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="text-dark"><i class="fab fa-x"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="text-dark"><i class="fab fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="text-dark"><i class="fab fa-linkedin-in"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="text-dark"><i class="fab fa-github"></i></a></li>
                </ul>
            </div>
            <div class="contact-info">
                <h5>Contact Us</h5>
                <p>Advanced Technological Institute<br>Bandaranayake Mawatha, Kegalle, 71000<br>SriLanka<br>Email: info@sliatekegalle.com<br>Phone: 0354856556</p>
            </div>
        </div>
        <hr class="my-4">
        <p class="text-center text-dark">&copy; 2024 Advanced Technological Institute-Kegalle. All rights reserved.</p>
    </footer>

    <!-- Font Awesome for social media icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <script src="slider.js"></script> <!-- Link to your JavaScript -->



</body>

</html>