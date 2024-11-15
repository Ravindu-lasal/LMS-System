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
        height: 50px; /* Adjust based on your logo */
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

    .card-deck{
            margin: 150px;
            margin-top: 10px;
            margin-bottom: 25px;
        }
    

    /* Footer Styles (keep existing styles) */

    .footer {
            background-color: #1a2d41; /* Light background color */
            color: #ffffff; /* Dark text color */
            padding: 40px 20px; /* Padding around the footer */
        }

        .footer .container {
            display: flex; /* Use Flexbox for layout */
            justify-content: space-between; /* Space between items */
            align-items: flex-start; /* Align items at the top */
        }

        .footer h5 {
            margin-bottom: 15px; /* Space below headings */
            font-size: 18px; /* Font size for headings */
            font-weight: bold; /* Bold headings */
        }

        .footer ul {
            list-style-type: none; /* Remove bullet points from lists */
            padding: 0; /* Remove padding from lists */
        }

        .footer ul li {
            margin-bottom: 10px; /* Space between list items */
        }

        .footer ul li a {
            color: #ffffff; /* Dark text color for links */
            text-decoration: none; /* Remove underline from links */
            transition: color 0.3s ease; /* Smooth transition for hover effect */
        }
        
        /* Hover colors for social media icons in footer*/
        .footer .social-media a:hover {
            color:#3b5998 ; 
        }
        .footer .social-media a:nth-child(2):hover { 
            color:#000000 ; 
        }
        .footer .social-media a:nth-child(3):hover { 
            background-image :linear-gradient(to right ,#ff0080 ,#ff8c00); 
        }
        .footer .social-media a:nth-child(4):hover { 
            color:#0077b5 ; 
        }
        .footer .social-media a:nth-child(5):hover { 
            color:#333333 ; 
        }
        .footer p {
            margin-top :20 px ; 
        }

        /* Responsive adjustments for smaller screens*/
        @media (max-width :768px) { 
        .footer .container { 
            flex-direction :column ; 
            align-items :center ; 
            text-align :center ; 
        }

        .footer .social-media a { 
            margin-right :10 px ; 
            margin-bottom :5 px ; 
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
            <a href="#" class="btn logout">Log Out</a>
           
        </div>
    </div>
</header>

<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="../assets/ai.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="../assets/ai.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="../assets/ai.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
</div>

<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="../assets/ai.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="../assets/ai.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="../assets/ai.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
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