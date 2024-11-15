<?php

include('./inc/db_connect.php');

?>


<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SLIATE LMS</title>
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/stu_nav_footer.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.3/js/bootstrap.min.js"></script>

    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto:300,400);
        @import url(https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css);

        .feedback {
            margin: 0 auto;
            text-align: center;
            margin: 10px;
        }

        .snip1533 {
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
            color: #9e9e9e;
            display: inline-block;
            font-family: 'Roboto', Arial, sans-serif;
            font-size: 16px;
            margin: 35px 10px 10px;
            max-width: 310px;
            min-width: 250px;
            position: relative;
            text-align: center;
            width: 100%;
            background-color: #ffffff;
            border-radius: 5px;
            border-top: 5px solid #393939;
        }

        .snip1533 *,
        .snip1533 *:before {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            -webkit-transition: all 0.1s ease-out;
            transition: all 0.1s ease-out;
        }

        .snip1533 figcaption {
            padding: 13% 10% 12%;
        }

        .snip1533 figcaption:before {
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
            background-color: #fff;
            border-radius: 50%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.25);
            color: #393939;
            content: "\f10e";
            font-family: 'FontAwesome';
            font-size: 32px;
            font-style: normal;
            left: 50%;
            line-height: 60px;
            position: absolute;
            top: -30px;
            width: 60px;
        }

        .snip1533 h3 {
            color: #3c3c3c;
            font-size: 20px;
            font-weight: 300;
            line-height: 24px;
            margin: 10px 0 5px;
        }

        .snip1533 h4 {
            font-weight: 400;
            margin: 0;
            opacity: 0.5;
        }

        .snip1533 blockquote {
            font-style: italic;
            font-weight: 300;
            margin: 0 0 20px;
        }
    </style>


</head>


<body>

    <?php
    include('./partials/nav.php');
    ?>

    <div class="slider-container">
        <div class="slider">
            <img src="assets/Images/Slider/slide1.jpg" class="slide" alt="Slide 1">
            <img src="assets/Images/Slider/slide2.jpg" class="slide" alt="Slide 2">
            <img src="assets/Images/Slider/slide3.jpg" class="slide" alt="Slide 3">
        </div>
        <div class="slider-overlay"></div>
        <div class="slider-text">
            <h1>Find Your Way</h1>
            <p>Student Learning Management System</p>
        </div>
    </div>

    <div class="content" id="courses">
        <h2>Courses</h2>
        <div class="course-cards">
            <div class="course-card">

                <div class="card-content">
                    <h3>IT</h3>
                    <p>Learn the latest in technology and software development.</p>
                </div>
            </div>
            <div class="course-card">

                <div class="card-content">
                    <h3>Accounting</h3>
                    <p>Master the fundamentals of accounting and finance.</p>
                </div>
            </div>
            <div class="course-card">

                <div class="card-content">
                    <h3>English</h3>
                    <p>Improve your English language skills for personal and professional growth.</p>
                </div>
            </div>

            <div class="course-card">

                <div class="card-content">
                    <h3>English</h3>
                    <p>Improve your English language skills for personal and professional growth.</p>
                </div>
            </div>

            <div class="course-card">

                <div class="card-content">
                    <h3>English</h3>
                    <p>Improve your English language skills for personal and professional growth.</p>
                </div>
            </div>

            <div class="course-card">

                <div class="card-content">
                    <h3>English</h3>
                    <p>Improve your English language skills for personal and professional growth.</p>
                </div>
            </div>

            <!-- Add more course cards as needed -->
        </div>
        <!-- Vertical Line -->
        <div class="vertical-line"></div>
    </div>

    <div class="services-section">
        <h2>Our Services</h2>
        <div class="services-container">
            <div class="service-card">
                <div class="service-header" onclick="toggleDropdown('service1')">
                    <span class="dropdown-arrow">▼</span>
                    <h3>Course Management</h3>
                </div>
                <div id="service1" class="service-description">
                    <p>Effortlessly create, manage, and organize courses with our intuitive platform.</p>
                </div>
            </div>
            <div class="service-card">
                <div class="service-header" onclick="toggleDropdown('service2')">
                    <span class="dropdown-arrow">▼</span>
                    <h3>User Analytics</h3>
                </div>
                <div id="service2" class="service-description">
                    <p>Gain insights into user engagement and performance with detailed analytics.</p>
                </div>
            </div>
            <div class="service-card">
                <div class="service-header" onclick="toggleDropdown('service3')">
                    <span class="dropdown-arrow">▼</span>
                    <h3>Interactive Learning</h3>
                </div>
                <div id="service3" class="service-description">
                    <p>Enhance learning with quizzes, forums, and multimedia content.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="crew-section" id="about">

        <h2>Our Crew</h2>
        <div class="crew-container">
            <div class="crew-member">
                <img src="assets\Images\Crew_profile\profile2.jpg" alt="Member 1" class="profile-photo"> <!-- Replace with actual image path -->
                <h3>Awishka Isuru</h3>
                <p>Founder & CEO</p>
            </div>
            <div class="crew-member">
                <img src="assets/Images/Crew_profile/profile1.JPG" alt="Member 2" class="profile-photo"> <!-- Replace with actual image path -->
                <h3>Sandesh Nawarathne</h3>
                <p>Head of Development</p>
            </div>
            <div class="crew-member">
                <img src="assets\Images\Crew_profile\profile2.jpg" alt="Member 3" class="profile-photo"> <!-- Replace with actual image path -->
                <h3>Chavindu Priyasara</h3>
                <p>Marketing Specialist</p>
            </div>
            <div class="crew-member">
                <img src="assets/Images/Crew_profile/profile1.JPG" alt="Member 4" class="profile-photo"> <!-- Replace with actual image path -->
                <h3>Gaganathara Suraweera</h3>
                <p>Product Manager</p>
            </div>
        </div>
    </div>

    <div class="feedback">
        <?php
        // Query to fetch feedback details where status = 1
        $query = "SELECT f_name, f_email, comment FROM feedback WHERE status = 1";
        $result = $conn->query($query);

        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
        ?>
                <figure class="snip1533">
                    <figcaption>
                        <blockquote>
                            <p><?php echo htmlspecialchars($row['comment']); ?></p>
                        </blockquote>
                        <h3><?php echo htmlspecialchars($row['f_name']); ?></h3>
                        <h4><?php echo htmlspecialchars($row['f_email']); ?></h4>
                    </figcaption>
                </figure>
        <?php
            }
        } else {
            echo "<p class='text-center'>No feedback available at the moment.</p>";
        }
        ?>
    </div>


    <!--footer-->
    <?php
    include('./partials/footer.php');
    ?>
    <!-- Font Awesome for social media icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <script src="assets/Js/slider.js"></script> <!-- Link to your JavaScript -->
</body>

</html>