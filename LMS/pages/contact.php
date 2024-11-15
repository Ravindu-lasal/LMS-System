<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your LMS Website</title>
    <link rel="stylesheet" href="../assets/css/contact.css"> <!-- Link to your CSS file -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.3/js/bootstrap.min.js"></script>
</head>
<body>

<!-- Header -->
<header>
    <div class="navbar">
        <div class="logo"><img src="logo.png" alt="Logo"></div>
        <ul class="nav-links">
            <li><a href="../index.php">Home</a></li>
            <li><a href="#">Courses</a></li>
            <li><a href="#">About</a></li>
            <li><a href="../pages/contact.php">Contact</a></li>
        </ul>
        <div class="auth-buttons">
        <a href="../pages/signin.php" class="btn signin">Login</a>
        
        </div>
    </div>
</header>

<!-- Main Heading: Contact Us -->
<h1 class="main-heading">Contact Us</h1> <!-- Larger heading below the header -->

<!-- Container for Image, Description, and Form -->
<div class="contact-details-container d-flex align-items-start"> <!-- Flex container for alignment -->

    <!-- Left Side: Image -->
    <div class="image-container">
        <img src="../assets/Images/Contact/contact_img_home.jpg" alt="Description of image" class="img-fluid"> <!-- Replace with your image path -->
    </div>

    <!-- Middle: Paragraph -->
    <div class="text-container mx-3"> <!-- Add margin for spacing -->
    <p>At [Your Company Name], we value your feedback and inquiries. Our dedicated team is here to assist you with any questions or concerns you may have. Whether you're seeking support, have a suggestion, or simply want to connect, we are just a message away.</p>
    <p>We believe that effective communication is the cornerstone of exceptional service. That's why we've made it easy for you to reach out through our contact form below. Simply fill in your details, and we'll ensure that your message reaches the right department promptly.</p>
    <p>Your thoughts matter to us, and we strive to respond as quickly as possible. Thank you for choosing [Your Company Name]. We look forward to hearing from you!</p>
    </div>

    <!-- Right Side: Student Details Form -->
    <div class="form-container">
        <h2>Get in Touch</h2> <!-- Heading for the Contact Us page -->
        <div class="contact-info">
            <p>If you have any questions, feel free to reach out to us!</p>
        </div>

        <!-- Replaced the form with the new one -->
        <form class="student-form" action="#" method="POST">
            <div class="mb-3">
                <label for="studentName" class="form-label">Name:</label>
                <input type="text" id="studentName" name="studentName" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="studentEmail" class="form-label">Email:</label>
                <input type="email" id="studentEmail" name="studentEmail" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="studentID" class="form-label">Student ID:</label>
                <input type="text" id="studentID" name="studentID" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="message" class="form-label">Message:</label>
                <textarea id="message" name="message" rows="4" class="form-control" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Send Message</button> <!-- Submit button -->
        </form>

    </div>

</div> <!-- End of contact-details-container -->

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

<!-- Font Awesome for social media icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<script src="slider.js"></script> <!-- Link to your JavaScript -->
</body>
</html>
