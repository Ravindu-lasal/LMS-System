<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your LMS Website</title>
    <link rel="stylesheet" href="../../assets/css/contact.css"> <!-- Link to your CSS file -->
    <link rel="stylesheet" href="../../assets/css/stu_nav_footer.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.3/js/bootstrap.min.js"></script>
</head>

<body>

    <!-- Header -->
    <?php
    include('./lec_inc/lec_nav.php');
    ?>


    <!-- Main Heading: Contact Us -->
    <div class="heading">
        <h1 class="main-heading">Contact Us</h1> <!-- Larger heading below the header -->
    </div>
    <!-- Container for Image, Description, and Form -->
    <div class="contact-details-container d-flex align-items-start outer-wrap"> <!-- Flex container for alignment -->

        <!-- Left Side: Image -->
        <div class="image-container">
            <img src="../../assets/Images/Contact/contact_img_home.jpg" alt="Description of image" class="img-fluid"> <!-- Replace with your image path -->
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
        </div>

    </div> <!-- End of contact-details-container -->

    <!--footer-->
    <!-- Header -->
    <?php
    include('./lec_inc/lec_footer.php');
    ?>

    <!-- Font Awesome for social media icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <script src="slider.js"></script> <!-- Link to your JavaScript -->
</body>

</html>