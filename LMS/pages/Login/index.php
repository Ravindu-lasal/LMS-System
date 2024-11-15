<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="../Login/style.css">
</head>
<body>
<div class="form-wrapper">
  <div class="form-image">
    <img src="../Login_img/login.png" alt="Form Image">
  </div>
  
    <div class="container" id="signup" style="display:none;">
      <h1 class="form-title">Register</h1>
      <form method="post" action="../Login/register.php">
        <div class="input-group">
           <i class="fas fa-user"></i>
           <input type="text" name="lId" id="lId" placeholder="Lecturer ID" required>
           <label for="lId">lecturer ID</label>
        </div>
        <div class="input-group">
           <i class="fas fa-user"></i>
           <input type="text" name="fName" id="fName" placeholder="Full Name" required>
           <label for="fname">Full Name</label>
        </div>
        <div class="input-group">
           <i class="fas fa-user"></i>
           <input type="text" name="address" id="address" placeholder="First Name" required>
           <label for="address">Address</label>
        </div>
        <div class="input-group">
           <i class="fas fa-user"></i>
           <input type="text" name="contact" id="contact" placeholder="First Name" required>
           <label for="contact">Contact</label>
        </div>
        <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" id="email" placeholder="Email" required>
            <label for="email">Email</label>
        </div>
        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" id="password" placeholder="Password" required>
            <label for="password">Password</label>
        </div>
       <input type="submit" class="btn" value="Sign Up" name="signUp">
      </form>
      
     
      <div class="links">
        <p>Already Have Account ?</p>
        <button id="signInButton">Sign In</button>
      </div>
    </div>

    <div class="container" id="signIn">
        <h1 class="form-title">Sign In</h1>
        <form method="post" action="Login/register.php">
          <div class="input-group">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" id="email" placeholder="Email" required>
              <label for="email">Email</label>
          </div>
          <div class="input-group">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" id="password" placeholder="Password" required>
              <label for="password">Password</label>
          </div>
          <p class="recover">
            <a href="#">Recover Password</a>
          </p>
         <input type="submit" class="btn" value="Sign In" name="signIn">
        </form>
        <p class="or">
          <br>
        or Login as,
        <br>
        <br>
        </p>
        <div class="icons">
        <button id="lecButton" onclick="window.location.href='../Lec_login/index.php'">Lecturer</button>
        <button id="lecButton" onclick="window.location.href='../Stu_login/index.php'">Student</button>

        
        </div>
        <!-- <div class="links">
          <p>Don't have account yet?</p>
           <button id="signUpButton">Sign Up</button> 
        </div> -->
      </div>
      <script src="../Login/script.js"></script>
</body>
</html>
