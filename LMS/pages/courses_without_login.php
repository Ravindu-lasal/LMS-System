<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HND Courses</title>
    <link rel="stylesheet" href="../assets/css/courses_without_login.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.3/js/bootstrap.min.js"></script>
</head>
<body>

<!-- Reusing the header from the index page -->
<header>
<div class="navbar">
        <div class="logo"><img src="logo.png" alt="Logo"></div>
        <ul class="nav-links">
            <li><a href="../index.php">Home</a></li>
            <li><a href="../learning-mangement-system/pages/courses_without_login.php">Courses</a></li>
            <li><a href="#">About</a></li>
            <li><a href="../pages/contact.php">Contact</a></li>
        </ul>
        <div class="auth-buttons">
            <a href="../learning-mangement-system/pages/Login/index.php" class="btn signin">Login</a>
            
        </div>
    </div>
</header>

<!-- Courses Section -->
<div class="content">
    <h2>HND Courses</h2>
    <div class="course-cards">
        <!-- Add 10 HND course cards here -->
            <div class="course-card">
            <div class="card-content">
                <img src="../assets/Images/Courses_all/Capture1.PNG" alt="Course Image 1" class="card-image">
                <h3>HND in Information Technology </h3>
                <h5>(HNDIT)</h5>
                <button onclick="window.location.href='../pages/Details/details_it.php'" class="btn btn-primary">Visit</button>
            </div>
        </div>

        <div class="course-card">
            <div class="card-content">
            <img src="../assets/Images/Courses_all/Capture2.PNG" alt="Course Image 1" class="card-image">
                <h3>HND in English <br> Department</h3>
                <h5>(HNDE)</h5>
                <button onclick="window.location.href='../pages/Details/details_english.php'" class="btn btn-primary">Visit</button>
            </div>
        </div>
        <div class="course-card" >
            <div class="card-content">
            <img src="../assets/Images/Courses_all/Capture3.PNG" alt="Course Image 1" class="card-image">
                <h3>HND in Engineering Department</h3>
                <h5>(Mechanical)</h5>
                <button onclick="window.location.href='../pages/Details/details_it.php'" class="btn btn-primary">Visit</button>
            </div>
        </div>
        <div class="course-card">
            <div class="card-content">
            <img src="../assets/Images/Courses_all/Capture4.PNG" alt="Course Image 1" class="card-image">
                <h3>HND in Agriculture Department</h3>
                <h5>(AGRI)</h5>
                <button onclick="window.location.href='../pages/Details/details_agri.php'" class="btn btn-primary">Visit</button>
            </div>
        </div>
        <div class="course-card" >
            <div class="card-content">
            <img src="../assets/Images/Courses_all/Capture5.PNG" alt="Course Image 1" class="card-image">
                <h3>HND in Management Department</h3>
                <h5>(HNDM)</h5>
                <button onclick="window.location.href='../pages/Details/details_management.php'" class="btn btn-primary">Visit</button>
            </div>
        </div>
        <div class="course-card">
            <div class="card-content">
            <img src="../assets/Images/Courses_all/Capture6.PNG" alt="Course Image 1" class="card-image">
                <h3>HND in Accountancy Department</h3>
                <h5>(HNDA)</h5>
                <button onclick="window.location.href='../pages/Details/details_account.php'" class="btn btn-primary">Visit</button>
            </div>
        </div>
        <div class="course-card">
            <div class="card-content">
            <img src="../assets/Images/Courses_all/Capture7.PNG" alt="Course Image 1" class="card-image">
                <h3>HND in Food Technology Department</h3>
                <h5>(HNDFT)</h5>
                <button onclick="window.location.href='../pages/Details/details_food.php'" class="btn btn-primary">Visit</button>
            </div>
        </div>
        <div class="course-card">
            <div class="card-content">
            <img src="../assets/Images/Courses_all/Capture8.PNG" alt="Course Image 1" class="card-image">
                <h3>HND in Quantity Survay Department</h3>
                <h5>(HNDQS)</h5>
                <button onclick="window.location.href='../pages/Details/details_qs.php'" class="btn btn-primary">Visit</button>
            </div>
        </div>
        <div class="course-card">
            <div class="card-content">
            <img src="../assets/Images/Courses_all/Capture9.PNG" alt="Course Image 1" class="card-image">
                <h3>HND in Tourism And Hospitality Management</h3>
                <h5>(HNDTHM)</h5>
                <button onclick="window.location.href='../pages/Details/details_thm.php'" class="btn btn-primary">Visit</button>
            </div>
        </div>
        <div class="course-card">
            <div class="card-content">
            <img src="../assets/Images/Courses_all/Capture10.PNG" alt="Course Image 1" class="card-image">
                <h3>HND in Business Finance Department</h3>
                <h5>(HNDBF)</h5>
                <button onclick="window.location.href='../pages/Details/details_bf.php'" class="btn btn-primary">Visit</button>
            </div>
        </div>
        <div class="course-card">
            <div class="card-content">
            <img src="../assets/Images/Courses_all/Capture11.PNG" alt="Course Image 1" class="card-image">
                <h3>HND in Engineering Department</h3>
                <h5>(Building Services)</h5>
                <button onclick="window.location.href='../pages/Details/details_engi.php'" class="btn btn-primary">Visit</button>
            </div>
        </div>
        <div class="course-card">
            <div class="card-content">
            <img src="../assets/Images/Courses_all/Capture12.PNG" alt="Course Image 1" class="card-image">
                <h3>HND in Business Administration</h3>
                <h5>(HNDBA)</h5>
                <button onclick="window.location.href='../pages/Details/details_ba.php'" class="btn btn-primary">Visit</button>
            </div>
        </div>
    </div>
</div>

<!--footer-->
<footer class="footer bg-light py-4"> <!-- Changed background color to light -->
    <div class="container d-flex justify-content-between align-items-start">
        <div class="logo">
            <img src="logo.png" alt="Logo" class="img-fluid" style="max-width: 150px;"> <!-- Replace with your logo path -->
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

<!-- Script to handle redirection -->
<script>
function redirectToLogin() {
    window.location.href = 'Login/index.php';  // Redirect to login page
}
</script>

</body>
</html>
