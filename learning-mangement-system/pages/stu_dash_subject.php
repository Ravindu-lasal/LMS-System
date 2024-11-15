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

        .subject {
            background-color: #f44336;
            color: white;
            padding: 30px;
            font-size: 30px;
            font-weight: bold;
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

    <header>
        <div class="navbar">
            <div class="logo"><img src="../assets/LMS_logo re.jpg"></div>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Courses</a></li>
                <li><a href="#">About</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
            <div class="auth-buttons">
                <a href="#" class="btn logout">Log Out</a>

            </div>
        </div>
    </header>

    <div class="subject">STATICS</div>
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

        <form action="submit_url.php" method="post" class="custom-form">
            <div class="form-group mb-3">
                <label for="url" class="form-label">URL:</label>
                <input type="url" class="form-control" id="url" name="url" placeholder="Enter URL" required>
            </div>
            <div class="form-group mb-3">
                <label for="subject" class="form-label">Subject:</label>

                <select class="form-select" id="subject" name="subject" required>
                    <?php
                    include_once "../inc/db_connect.php";

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

                    $conn->close();
                    ?>
                </select>
            </div>
            <div class="subject-materials">

            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
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