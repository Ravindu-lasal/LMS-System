<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time Table</title>
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

        body {
            background-color: #f4f4f4;
        }

        .container {
            display: flex;
            /* height: 100vh; */
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

        .sidebar ul :hover{
            
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
            font-weight:bold;
            color: white;
            cursor: pointer;
        }

        .subject-buttons :hover{
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

        .tablebg{
            background-image: url('../assets/sliate.jpg');
            background-size: cover; 
            background-position: center; 
            height: 90vh;
            padding-top: 50px;
            
            
        }
        /* .tablebg1{
            background-color: rgba(255, 255, 255, 0.8);
            margin-bottom: 20px;
            height: 90vh;
            width: 65%;
            margin-left: 260px;
            margin-top: -625px;
            
            
        } */

        table {
            
            /* margin: -570px 300px 50px ; */
            width: 60%;
            border-collapse: collapse;
            background-color: rgba(255, 255, 255, 0.9);
            margin:  0 auto;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        .break, .lunch {
            text-align: center;
            font-weight: bold;
        }

        /* Footer Styles (keep existing styles) */

        .footer {
        background-color: #1a2d41; /* Light background color */
        color: #ffffff; /* Dark text color */
        padding: 20px 20px; /* Reduced padding to minimize space */
        height: auto; /* Remove fixed height, let the content determine height */
        }

        .footer .container {
            display: flex; /* Use Flexbox for layout */
            justify-content: space-between; /* Space between items */
            align-items: flex-start; /* Align items at the top */
            flex-wrap: wrap; /* Allow the content to wrap in case of smaller screens */
        }

        .footer h5 {
            margin-bottom: 10px; /* Reduced space below headings */
            font-size: 18px; /* Font size for headings */
            font-weight: bold; /* Bold headings */
        }

        .footer ul {
            list-style-type: none; /* Remove bullet points from lists */
            padding: 0; /* Remove padding from lists */
        }

        .footer ul li {
            margin-bottom: 8px; /* Reduced space between list items */
        }

        .footer ul li a {
            color: #ffffff; /* Dark text color for links */
            text-decoration: none; /* Remove underline from links */
            transition: color 0.3s ease; /* Smooth transition for hover effect */
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
            margin-top: 10px; /* Reduced margin at the bottom */
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
        <div class="logo"><img src="../assets/LMS_logo re.jpg" ></div>
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

        <div class="tablebg"> 
        <div class="table">
        <table>
        <tr>
            <th></th>
            <th>Monday</th>
            <th>Tuesday</th>
            <th>Wednesday</th>
            <th>Thursday</th>
            <th>Friday</th>
        </tr>
        <tr>
            <td>8.30-9.30</td>
            <td>DSA</td>
            <td>WEB</td>
            <td>DBMS</td>
            <td>STATICS</td>
            <td>OS</td>
        </tr>
        <tr>
            <td>9.30-10.30</td>
            <td>DSA</td>
            <td>WEB</td>
            <td>DBMS</td>
            <td>STATICS</td>
            <td>OS</td>
        </tr>
        <tr>
            <td colspan="6" class="break">Tea Break</td>
        </tr>
        <tr>
            <td>10.45-11.30</td>
            <td>DSA</td>
            <td>WEB</td>
            <td>DBMS</td>
            <td>STATICS</td>
            <td>OS</td>
        </tr>
        <tr>
            <td>11.30-12.30</td>
            <td>DSA</td>
            <td>OOP</td>
            <td>DBMS</td>
            <td>STATICS</td>
            <td>OS</td>
        </tr>
        <tr>
            <td colspan="6" class="lunch">Lunch</td>
        </tr>
        <tr>
            <td>1.00-2.00</td>
            <td>WEB</td>
            <td>OOP</td>
            <td>CS</td>
            <td>OOP</td>
            <td></td>
        </tr>
        <tr>
            <td>2.00-3.00</td>
            <td>WEB</td>
            <td>OOP</td>
            <td>CS</td>
            <td>OOP</td>
            <td></td>
        </tr>
        <tr>
            <td>3.00-4.00</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>

        </div>
        </div>
        <!-- <div class="tablebg1"> 
            
        </div> -->

   

    
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
