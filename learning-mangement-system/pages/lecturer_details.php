<?php
include('../inc/db_connect.php');

session_start();

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        .heading {
            margin: 0 auto;
            text-align: center;
            margin: 20px;
        }

        .heading h1 {
            color: #0077b5;
            font-weight: 600;
        }

        .heading small {
            padding-bottom: 10px;
            color: #ff0080;
            font-weight: 400;
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

        .card-deck {
            margin: 150px;
            margin-top: 10px;
            margin-bottom: 25px;
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

    <div class="heading">
        <h1>Our Lectuers</h1>
        <small>Best Lectures Always</small>
    </div>


    <div class="card-deck">
        <?php
        $sql = "SELECT fullname, email, contact, address, create_date FROM users WHERE user_type = 'lecture'";
        $result = $conn->query($sql);
        ?>

        <div class="container mt-5">
            <div class="row">
                <?php
                if ($result->num_rows > 0) {
                    // Loop through each lecture and create a card
                    while ($row = $result->fetch_assoc()) {
                ?>
                        <div class="col-md-4">
                            <div class="card mb-4">
                                <img class="card-img-top" src="https://img.freepik.com/free-photo/businessman-black-suit-holding-his-tasklist-makes-thumb-up_114579-15902.jpg?t=st=1731679357~exp=1731682957~hmac=abc28d9b77b960af1efe33e6197deef9d4a0f67416b4e7eb6e295313d1babbb0&w=996" alt="Lecture Image">
                                <div class="card-body">
                                    <h5 class="card-title text-primary text-center fw-3"><?php echo htmlspecialchars($row['fullname']); ?></h5>
                                    <p class="card-text text-start">
                                        <strong class="text-danger m-3"> Email : </strong> <?php echo htmlspecialchars($row['email']); ?><br>
                                        <strong class="text-danger m-3"> Contact : </strong> <?php echo htmlspecialchars($row['contact']); ?><br>
                                        <strong class="text-danger m-3"> Address : </strong> <?php echo htmlspecialchars($row['address']); ?>
                                    </p>
                                </div>
                                <div class="card-footer text-center">
                                    <small class="text-muted">Joined on: <?php echo htmlspecialchars($row['create_date']); ?></small>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                } else {
                    echo "<p class='text-center'>No lecture details found.</p>";
                }
                ?>
            </div>
        </div>
    </div>

    <!-- Font Awesome for social media icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <script src="slider.js"></script> <!-- Link to your JavaScript -->



</body>

</html>