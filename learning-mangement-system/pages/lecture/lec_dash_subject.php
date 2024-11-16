<?php
include('../../inc/db_connect.php');
session_start();
$lecId = isset($_SESSION['lec_id']) ? $_SESSION['lec_id'] : null;
?>

<?php
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "DELETE FROM lecture_enroll WHERE enroll_id=$id";
    $conn->query($sql);
    $sql = "SELECT * FROM subject";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            header("Location: ./lec_dash_subject.php?subject=" . urlencode($row['subject_id']));
        }
    }
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Subject</title>
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

        .subject {
            background-color: #f44336;
            color: white;
            padding: 30px;
            font-size: 30px;
            font-weight: bold;
            text-align: center;
            margin: 40px;
            margin-left: 630px;
            margin-right: 705px;
            border-radius: 15px;
            margin-bottom: 20px;
        }

        .button-container {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
            justify-content: center;
            margin-bottom: 80px;
        }

        .button1 {
            background-color: darkblue;
            padding: 30px;
            font-size: 20px;
            font-weight: bold;
            border-radius: 20px;
            margin: 40px;
            border-color: white;
            color: white;
            margin-bottom: 50px;

        }

        .button2 {
            background-color: darkblue;
            padding: 30px;
            font-size: 20px;
            font-weight: bold;
            border-radius: 20px;
            margin: 40px;
            border-color: white;
            color: white;
            margin-bottom: 50px;
        }

        .button3 {
            background-color: darkblue;
            padding: 30px;
            font-size: 20px;
            font-weight: bold;
            border-radius: 20px;
            margin: 40px;
            border-color: white;
            color: white;
            margin-bottom: 50px;
        }

        .button4 {
            background-color: darkblue;
            padding: 30px;
            font-size: 20px;
            font-weight: bold;
            border-radius: 20px;
            margin: 40px;
            border-color: white;
            color: white;
            margin-bottom: 50px;
        }

        .button-container :hover {
            background-color: red;
            cursor: pointer;
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

    <!-- <header>
        <div class="navbar">
            <div class="logo"><img src="../assets/LMS_logo re.jpg"></div>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Courses</a></li>
                <li><a href="#">About</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
            <div class="auth-buttons">
                <a href="../inc/logout.php" class="btn logout">Log Out</a>

            </div>
        </div>
    </header> -->

    <div class="subject">

        <?php
        include_once "../../inc/db_connect.php";
        $sql = "SELECT * FROM subject";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo $row['subject_name'];
            }
        } else {
            echo "No subjects available";
        }
        $conn->close();
        ?>

    </div>
    <div class="button-container">
        <button class="button1">Lec Material</button>
        <button class="button2">Pass Papers</button>
        <button class="button3">Model Papers</button>
        <button class="button4">Learning resources</button>
    </div>
    <div>
        <style>
            .custom-form {
                max-width: 400px;
                margin: 40px auto;
                padding: 20px;
                border: 1px solid #ccc;
                border-radius: 10px;
                box-shadow: 0 2px 2px rgba(0, 0, 0, 0.2);
                display: flex;
                flex-direction: column;
                gap: 15px;
                background-color: #f9f9f9;
            }

            .custom-form .form-group {
                display: flex;
                flex-direction: column;
                align-items: flex-start;
            }

            .custom-form .form-group label {
                font-weight: bold;
                margin-bottom: 5px;
            }

            .custom-form .form-group input,
            .custom-form .form-group select {
                width: 100%;
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 5px;
            }

            .custom-form button[type="submit"] {
                background-color: #4CAF50;
                color: white;
                padding: 12px 20px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }

            .custom-form button[type="submit"]:hover {
                background-color: #45a049;
            }

            @media (max-width: 768px) {
                .custom-form {
                    margin: 20px;
                    padding: 15px;
                }
            }
        </style>

        <form action="" method="post" class="custom-form">
            <div class="form-group mb-3">
                <label for="url" class="form-label">URL:</label>
                <input type="url" class="form-control" id="url" name="url" placeholder="Enter URL" required>
            </div>
            <div class="form-group mb-3">
                <label for="subject" class="form-label">Subject:</label>

                <select class="form-select" id="subject" name="subject" required>
                    <?php
                    include('../../inc/db_connect.php');
                    session_start();

                    if (isset($_GET['subject'])) {
                        $subjectId = $_GET['subject'];
                        $stmt = $conn->prepare("SELECT subject_name FROM subject WHERE subject_id = ?");
                        $stmt->bind_param("i", $subjectId);
                        $stmt->execute();
                        $result = $stmt->get_result();

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo '<option value="' . htmlspecialchars($subjectId) . '">' . htmlspecialchars($row['subject_name']) . '</option>';
                            }
                        } else {
                            echo '<option value="">No subject found</option>';
                        }
                        $stmt->close();
                    } else {
                        echo '<option value="">No subject selected</option>';
                    }


                    ?>
                </select>
            </div>
            <button type="submit" name="addSubject" class="btn btn-primary">Submit</button>
        </form>

        <?php

        if (isset($_POST['addSubject'])) {
            $url = $_POST['url'];
            $subject = $_POST['subject'];
            $lecId = $_SESSION['lec_id'];

            $stmt = $conn->prepare("INSERT INTO lecture_enroll (link, subject_id, user_id) VALUES (?, ?,?)");
            $stmt->bind_param("sii", $url, $subject, $lecId);
            $stmt->execute();
            $stmt->close();
        }
        ?>

        <style>
            table {
                border-collapse: collapse;
                width: 100%;
                margin-bottom: 40px;
                padding: 10px;

            }

            th,
            td {
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even) {
                background-color: #f2f2f2;
            }

            th {
                background-color: #4CAF50;
                color: white;
            }
        </style>
        <h2 class="mt-3">Recently Added Resources</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>URL</th>
                    <th>Subject</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Ensure the database connection exists
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Correct column names based on your database schema
                $stmt = $conn->prepare("SELECT enroll_id, link, subject_id FROM lecture_enroll WHERE user_id = ?");
                if (!$stmt) {
                    die("Error preparing statement: " . $conn->error); // Debugging message
                }

                // Bind parameters
                $lecId = $_SESSION['lec_id']; // Assuming user ID is stored in the session
                $stmt->bind_param("i", $lecId);

                // Execute the query
                $stmt->execute();
                $result = $stmt->get_result();

                // Display results in a table
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . htmlspecialchars($row['link']) . "</td><td>" . htmlspecialchars($row['subject_id']) . "</td><td><a href=\"?delete=" . $row['enroll_id'] . "\" onclick=\"return confirm('Are you sure you want to delete this resource?')\"><i class=\"fas fa-trash-alt\"></i></a></td></tr>";
                    }
                } else {
                    echo "<tr><td colspan=\"3\">No data available</td></tr>";
                }

                // Close the statement
                $stmt->close();
                ?>


            </tbody>
        </table>
    </div>

    <footer class="footer bg-light py-4"> <!-- Changed background color to light -->
        <div class="container d-flex justify-content-between align-items-start">
            <div class="logo">
                <img src="../assets/LMS_logo re.jpg" alt="" class="img-fluid" style="max-width: 150px;"> <!-- Replace with your logo path -->
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