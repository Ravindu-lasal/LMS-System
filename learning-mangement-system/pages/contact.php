<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your LMS Website</title>
    <link rel="stylesheet" href="../assets/css/contact.css"> <!-- Link to your CSS file -->
    <link rel="stylesheet" href="../assets/css/stu_nav_footer.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.3/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.3/js/bootstrap.min.js"></script>
</head>

<body>

    <!-- Header -->
    <header>
        <div class="navbar">
            <div class="logo"><img src="../assets/Images/logo-edit-2.png" alt="Logo">
                <p>Learning Management Sysetem -SLIATE - Kegalle</p>
            </div>
            <ul class="nav-links">
            </ul>
            <div class="auth-buttons">
                <a href="../index.php" class="btn logout">Home</a>
            </div>
        </div>
    </header>

    <!-- Banner Image -->
    <div class="banner mt-2 text-center">
        <img src="https://images.unsplash.com/photo-1596524430615-b46475ddff6e?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Banner" class="img-fluid w-75">
    </div>

    <!-- Main Content -->
    <div class="container my-5">
        <!-- Text Container -->
        <div class="text-container text-center mb-4">
            <h2>Welcome to Our Platform</h2>
            <p>At [Your LMS Website], we strive to provide the best learning experience. Your feedback is essential to improve our services. Please share your thoughts and ideas with us!</p>
        </div>

        <!-- Feedback Form -->
        <div class="form-container">
            <h3 class="text-center mb-4">Feedback Form</h3>
            <form action="#" method="POST" class="w-75 mx-auto">
                <div class="mb-3">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="feedback" class="form-label">Your Feedback:</label>
                    <textarea id="feedback" name="feedback" rows="5" class="form-control" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary w-100">Submit Feedback</button>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <?php
    include('./student_inc/stu_footer.php');
    ?>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="slider.js"></script>
</body>

</html>