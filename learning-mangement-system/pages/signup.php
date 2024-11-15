<?php
include '../inc/db_connect.php';
?>
<!-- Register Function  -->

<!-- registraion function  -->

<?php

if (isset($_POST['signUp_submit'])) {

  $filter_name = filter_var($_POST['fName'], FILTER_SANITIZE_SPECIAL_CHARS);
  $name = mysqli_real_escape_string($conn, $filter_name);

  $filter_address = filter_var($_POST['address'], FILTER_SANITIZE_SPECIAL_CHARS);
  $address = mysqli_real_escape_string($conn, $filter_address);

  $filter_contact = filter_var($_POST['contact'], FILTER_SANITIZE_SPECIAL_CHARS);
  $contact = mysqli_real_escape_string($conn, $filter_contact);

  $filter_email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
  $email = mysqli_real_escape_string($conn, $filter_email);

  $filter_pass = filter_var($_POST['pass'], FILTER_SANITIZE_SPECIAL_CHARS);
  $pass = mysqli_real_escape_string($conn, md5($filter_pass));

  $filter_cpass = filter_var($_POST['cpass'], FILTER_SANITIZE_SPECIAL_CHARS);
  $cpass = mysqli_real_escape_string($conn, md5($filter_cpass));


  $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email'") or die('query failed');

  if (mysqli_num_rows($select_users) > 0) {
    $message[] = 'user already exist!';
  } else {
    if ($pass != $cpass) {
      $message[] = 'confirm password not matched!';
    } else {
      mysqli_query($conn, "INSERT INTO `users` (fullName, address, contact, email, password) VALUES ('$name', '$address', '$contact', '$email', '$pass')") or die('query failed');
      $message2[] = 'registered successfully!';
    }
  }
}

?>

<!-- Login Fun -->

<!-- login fun  -->

<?php


session_start();

if (isset($_POST['login_submit'])) {

  $filter_email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
  $email = mysqli_real_escape_string($conn, $filter_email);
  $filter_pass = filter_var($_POST['pass'], FILTER_SANITIZE_SPECIAL_CHARS);
  $pass = mysqli_real_escape_string($conn, md5($filter_pass));

  $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$pass'") or die('query failed');


  if (mysqli_num_rows($select_users) > 0) {

    $row = mysqli_fetch_assoc($select_users);

    if ($row['user_type'] == 'admin') {

      $_SESSION['admin_name'] = $row['fullName'];
      $_SESSION['admin_email'] = $row['email'];
      $_SESSION['admin_id'] = $row['id'];
      header('location:./pages/admin/index.php');


    } elseif ($row['user_type'] == 'lecture') {
      $_SESSION['lec_name'] = $row['fullName'];
      $_SESSION['lec_email'] = $row['email'];
      $_SESSION['lec_id'] = $row['id'];
      header('location:./lec_dashboard.php');


    } elseif ($row['user_type'] == 'student') {
      $_SESSION['st_name'] = $row['fullName'];
      $_SESSION['st_email'] = $row['email'];
      $_SESSION['st_id'] = $row['id'];
      header('location:./stu_dashboard.php');
    } else {
      $message[] = 'no user found!';
    }
  } else {
    $message[] = 'incorrect email or password!';
  }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register & Login</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>

  <?php
  if (isset($message)) {
    foreach ($message as $message) {
      echo '
      <div class="msg_box container text-center text-danger fs-4 p-1 mt-2 mb-3">
         <span>' . $message . '</span>
        <a class = "b_register" href = "#register" onclick="this.parentElement.remove();"><i class="fas fa-times text-danger fs-3"></i> </a>
      </div>
      ';
    }
  }
  ?>

  <?php
  if (isset($message2)) {
    foreach ($message2 as $message2) {
      echo '
      <div class="msg_box container text-center text-success fs-4 p-1 mt-2 mb-3">
         <span>' . $message2 . '</span>
        <a class = "b_register" href = "#register" onclick="this.parentElement.remove();"><i class="fas fa-check text-success fs-3"></i> </a>
      </div>
      ';
    }
  }
  ?>

  <div class="form-wrapper">
    <div class="form-image">
      <img src="../assets/Images/login.png" alt="Form Image">
    </div>

    <div class="container" id="signup" style="display:none;">
      <h1 class="form-title">Sign Up</h1>
      <form method="post">
        <div class="input-group">
          <i class="fas fa-user"></i>
          <input type="text" name="fName" id="fName" placeholder="Full Name" required>
          <label for="fName">Full Name</label>
        </div>
        <div class="input-group">
          <i class="fas fa-user"></i>
          <input type="text" name="address" id="address" placeholder="Address" required>
          <label for="address">Address</label>
        </div>
        <div class="input-group">
          <i class="fas fa-user"></i>
          <input type="text" name="contact" id="contact" placeholder="Contact" required>
          <label for="contact">Contact</label>
        </div>
        <!-- Email Input -->
        <div class="input-group">
          <i class="fas fa-envelope"></i>
          <input type="email" name="email" id="email" placeholder="Email" required>
          <label for="email">Email</label>
        </div>

        <!-- Password Input -->
        <div class="input-group">
          <i class="fas fa-lock"></i>
          <input type="password" name="pass" id="pass" placeholder="Password" required>
          <label for="password">Password</label>
        </div>

        <div class="input-group">
          <i class="fas fa-lock"></i>
          <input type="password" name="cpass" id="cpass" placeholder="Confirm Password" required>
          <label for="password">Confirm Password</label>
        </div>

        <!-- Submit Button -->
        <input type="submit" class="btn" value="Sign Up" name="signUp_submit">
      </form>


      <div class="links">
        <p>Already Have Account ?</p>
        <button id="signInButton">Sign In</button>
      </div>
    </div>

    <div class="container" id="signIn">
      <h1 class="form-title">Sign In</h1>
      <form method="post">
        <div class="input-group">
          <i class="fas fa-envelope"></i>
          <input type="email" name="email" id="email" placeholder="Email" required>
          <label for="email">Email</label>
        </div>
        <div class="input-group">
          <i class="fas fa-lock"></i>
          <input type="password" name="pass" id="pass" placeholder="Password" required>
          <label for="password">Password</label>
        </div>
        <p class="recover">
          <a href="#">Recover Password</a>
        </p>
        <input type="submit" class="btn" value="Sign In" name="login_submit">
      </form>

      <div class="links">
        <p>Don't have account yet?</p>
        <button id="signUpButton">Sign Up</button>
      </div>
    </div>
    <script src="../assets/Js/script.js"></script>
</body>

</html>