<?php
include('../inc/db_connect.php');

session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/stu_nav_footer.css">
    <link rel="stylesheet" href="../assets/css/courses_without_login.css">
    <style>
        .crew-section {
            background-color: #ffffff;
            /* Light background for contrast */
            padding: 50px 20px;
            /* Padding for spacing */
            text-align: center;
            /* Center align text */
        }

        .crew-section h2 {
            font-size: 36px;
            /* Title size */
            color: #2c3e50;
            /* Dark color for title */
            margin-bottom: 40px;
            /* Space below title */
        }

        .crew-container {
            display: flex;
            /* Use flexbox for layout */
            justify-content: space-around;
            /* Space between crew members */
            flex-wrap: wrap;
            /* Allow wrapping on smaller screens */
            max-width: 1200px;
            /* Max width of container */
            margin: auto;
            /* Center container horizontally */
        }

        .crew-member {
            background-color: #ffffff;
            /* White background for member card */
            border-radius: 12px;
            /* Rounded corners */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* Subtle shadow effect */
            margin: 10px;
            /* Space around each member card */
            padding: 20px;
            /* Inner padding for content */
            width: 200px;
            /* Fixed width for member cards */
            height: 300px;
            /* Fixed height for member cards */
            display: flex;
            /* Use flexbox to align content vertically */
            flex-direction: column;
            /* Stack content vertically */
            align-items: center;
            /* Center items horizontally */
        }

        .profile-photo {
            width: 100px;
            /* Set width for profile photos */
            height: 100px;
            /* Set height for profile photos */
            border-radius: 50%;
            /* Make photos circular */
            object-fit: cover;
            /* Ensure images cover the area without distortion */
        }

        .crew-member h3 {
            font-size: 24px;
            /* Font size for member names */
            margin-top: 15px;
            /* Space above name */
        }

        .crew-member p {
            font-size: 16px;
            /* Font size for positions */
            color: #00000065;
            /* Gray color for position text */
        }
    </style>
</head>

<body>

    <?php
    include('./student_inc/stu_nav.php');
    ?>

    <div class="crew-section">

        <h2>Our Crew</h2>
        <div class="crew-container">
            <div class="crew-member">
                <img src="../assets\Images\Crew_profile\profile2.jpg" alt="Member 1" class="profile-photo"> <!-- Replace with actual image path -->
                <h3>Awishka Isuru</h3>
                <p>Founder & CEO</p>
            </div>
            <div class="crew-member">
                <img src="../assets/Images/Crew_profile/profile1.JPG" alt="Member 2" class="profile-photo"> <!-- Replace with actual image path -->
                <h3>Sandesh Nawarathne</h3>
                <p>Head of Development</p>
            </div>
            <div class="crew-member">
                <img src="../assets\Images\Crew_profile\profile2.jpg" alt="Member 3" class="profile-photo"> <!-- Replace with actual image path -->
                <h3>Chavindu Priyasara</h3>
                <p>Marketing Specialist</p>
            </div>
            <div class="crew-member">
                <img src="../assets/Images/Crew_profile/profile1.JPG" alt="Member 4" class="profile-photo"> <!-- Replace with actual image path -->
                <h3>Gaganathara Suraweera</h3>
                <p>Product Manager</p>
            </div>
        </div>
    </div>

    <?php
    include('./student_inc/stu_footer.php');
    ?>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.3/js/bootstrap.min.js"></script>
    <script src="../assets/Js/slider.js"></script> <!-- Link to your JavaScript -->
</body>

</html>