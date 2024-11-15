<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="form-wrapper">
  <div class="form-image">
    <img src="login.png" alt="Form Image">
  </div>
  <div class="container" id="signup" style="display: none;">
    <h1 class="form-title">Register</h1>
    
    <form method="post" action="register-login.php">
      <div class="input-group">
        <i class="fas fa-user"></i>
        <input type="text" name="s_name" id="s_name" placeholder="Full Name" required>
        <label for="s_name">Full Name</label>
      </div><br>
      <div class="input-group">
        <i class="fas fa-home"></i>
        <input type="text" name="s_address" id="s_address" placeholder="Address" required>
        <label for="s_address">Address</label>
      </div><br>
      <div class="input-group">
        <i class="fas fa-phone"></i>
        <input type="tel" name="s_contact" id="s_contact" placeholder="Contact Number" required>
        <label for="s_contact">Contact</label>
      </div><br>
      <div class="input-group">
        <i class="fas fa-envelope"></i>
        <input type="email" name="s_email" id="s_email" placeholder="Email" required>
        <label for="s_email">Email</label>
      </div><br>
      <div class="input-group">
        <i class="fas fa-lock"></i>
        <input type="password" name="s_password" id="s_password" placeholder="Password" required>
        <label for="s_password">Password</label>
      </div><br>
      <input type="submit" class="btn" value="Sign Up" name="signUp">
    </form>
    <p class="or">---------- or --------</p>
    <div class="icons">
      <i class="fab fa-google"></i>
      <i class="fab fa-facebook"></i>
    </div>
    <div class="links">
      <p>Already have an account?</p>
      <button id="signInButton">Sign In</button>
    </div>
  </div>
  <div class="container" id="signIn">
    <h1 class="form-title">Sign In</h1>
    <form method="post" action="register-login.php">
      <div class="input-group">
        <i class="fas fa-envelope"></i>
        <input type="email" name="s_email" id="login_email" placeholder="Email" required>
        <label for="login_email">Email</label>
      </div>
      <br>
      <div class="input-group">
        <i class="fas fa-lock"></i>
        <input type="password" name="s_password" id="login_password" placeholder="Password" required>
        <label for="login_password">Password</label>
      </div>
      <br>
      <input type="submit" class="btn" value="Sign In" name="signIn">
    </form>
    <p class="or">---------- or --------</p>
    <div class="icons">
      <i class="fab fa-google"></i>
      <i class="fab fa-facebook"></i>
    </div>
    <div class="links">
      <p>Don't have an account?</p>
      <button id="signUpButton">Sign Up</button>
    </div>
  </div>
  <script src="script.js"></script>
</body>
</html>