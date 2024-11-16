<?php
include('../../inc/db_connect.php');

session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HND Courses</title>
    <link rel="stylesheet" href="../../assets/css/courses_without_login.css">
    <link rel="stylesheet" href="../../assets/css/stu_nav_footer.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.3/js/bootstrap.min.js"></script>
</head>

<body>

    <!-- Reusing the header from the index page -->
    <?php
    include('./lec_inc/lec_nav.php');
    ?>

    <!-- Courses Section -->
    <div class="content">
        <h2>HND Courses</h2>
        <div class="course-cards">
            <!-- Add 10 HND course cards here -->
            <div class="course-card">
                <div class="card-content">
                    <img src="../../assets/Images/Courses_all/Capture1.PNG" alt="Course Image 1" class="card-image">
                    <h3>HND in Information Technology </h3>
                    <h5>(HNDIT)</h5>
                    <button onclick="window.location.href='./student_inc/Details/details_it.php'" class="btn btn-primary">Visit</button>
                </div>
            </div>

            <div class="course-card">
                <div class="card-content">
                    <img src="../../assets/Images/Courses_all/Capture2.PNG" alt="Course Image 1" class="card-image">
                    <h3>HND in English <br> Department</h3>
                    <h5>(HNDE)</h5>
                    <button onclick="window.location.href='./student_inc/Details/details_english.php'" class="btn btn-primary">Visit</button>
                </div>
            </div>
            <div class="course-card">
                <div class="card-content">
                    <img src="../../assets/Images/Courses_all/Capture3.PNG" alt="Course Image 1" class="card-image">
                    <h3>HND in Engineering Department</h3>
                    <h5>(Mechanical)</h5>
                    <button onclick="window.location.href='./student_inc/Details/details_it.php'" class="btn btn-primary">Visit</button>
                </div>
            </div>
            <div class="course-card">
                <div class="card-content">
                    <img src="../../assets/Images/Courses_all/Capture4.PNG" alt="Course Image 1" class="card-image">
                    <h3>HND in Agriculture Department</h3>
                    <h5>(AGRI)</h5>
                    <button onclick="window.location.href='./student_inc/Details/details_agri.php'" class="btn btn-primary">Visit</button>
                </div>
            </div>
            <div class="course-card">
                <div class="card-content">
                    <img src="../../assets/Images/Courses_all/Capture5.PNG" alt="Course Image 1" class="card-image">
                    <h3>HND in Management Department</h3>
                    <h5>(HNDM)</h5>
                    <button onclick="window.location.href='./student_inc/Details/details_management.php'" class="btn btn-primary">Visit</button>
                </div>
            </div>
            <div class="course-card">
                <div class="card-content">
                    <img src="../../assets/Images/Courses_all/Capture6.PNG" alt="Course Image 1" class="card-image">
                    <h3>HND in Accountancy Department</h3>
                    <h5>(HNDA)</h5>
                    <button onclick="window.location.href='./student_inc/Details/details_account.php'" class="btn btn-primary">Visit</button>
                </div>
            </div>
            <div class="course-card">
                <div class="card-content">
                    <img src="../../assets/Images/Courses_all/Capture7.PNG" alt="Course Image 1" class="card-image">
                    <h3>HND in Food Technology Department</h3>
                    <h5>(HNDFT)</h5>
                    <button onclick="window.location.href='./student_inc/Details/details_food.php'" class="btn btn-primary">Visit</button>
                </div>
            </div>
            <div class="course-card">
                <div class="card-content">
                    <img src="../../assets/Images/Courses_all/Capture8.PNG" alt="Course Image 1" class="card-image">
                    <h3>HND in Quantity Survay Department</h3>
                    <h5>(HNDQS)</h5>
                    <button onclick="window.location.href='./student_inc/Details/details_qs.php'" class="btn btn-primary">Visit</button>
                </div>
            </div>
            <div class="course-card">
                <div class="card-content">
                    <img src="../../assets/Images/Courses_all/Capture9.PNG" alt="Course Image 1" class="card-image">
                    <h3>HND in Tourism And Hospitality Management</h3>
                    <h5>(HNDTHM)</h5>
                    <button onclick="window.location.href='./student_inc/Details/details_thm.php'" class="btn btn-primary">Visit</button>
                </div>
            </div>
            <div class="course-card">
                <div class="card-content">
                    <img src="../../assets/Images/Courses_all/Capture10.PNG" alt="Course Image 1" class="card-image">
                    <h3>HND in Business Finance Department</h3>
                    <h5>(HNDBF)</h5>
                    <button onclick="window.location.href='./student_inc/Details/details_bf.php'" class="btn btn-primary">Visit</button>
                </div>
            </div>
            <div class="course-card">
                <div class="card-content">
                    <img src="../../assets/Images/Courses_all/Capture11.PNG" alt="Course Image 1" class="card-image">
                    <h3>HND in Engineering Department</h3>
                    <h5>(Building Services)</h5>
                    <button onclick="window.location.href='./student_inc/Details/details_engi.php'" class="btn btn-primary">Visit</button>
                </div>
            </div>
            <div class="course-card">
                <div class="card-content">
                    <img src="../../assets/Images/Courses_all/Capture12.PNG" alt="Course Image 1" class="card-image">
                    <h3>HND in Business Administration</h3>
                    <h5>(HNDBA)</h5>
                    <button onclick="window.location.href='./student_inc/Details/details_ba.php'" class="btn btn-primary">Visit</button>
                </div>
            </div>
        </div>
    </div>

    <!--footer-->
    <?php
    include('./lec_inc/lec_footer.php');
    ?>

    <!-- Script to handle redirection -->
    <script>
        function redirectToLogin() {
            window.location.href = 'Login/index.php'; // Redirect to login page
        }
    </script>

</body>

</html>