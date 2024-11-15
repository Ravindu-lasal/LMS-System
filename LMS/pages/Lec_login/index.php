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
      <h1 class="form-title">Register as a Lecturer</h1>
      <form method="post" action="../Login/register.php">
    <div class="input-group">
        <i class="fas fa-user"></i>
        <input type="text" name="lId" id="lId" placeholder="Lecturer ID" required>
        <label for="lId">Lecturer ID</label>
    </div>
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
    <br>
    
    <div class="input-group">
        <label for="subject1">Subjects</label>
        <select name="subject1" id="subject1" required>
            <option value="" disabled selected>Select Subject </option>
            <option value="WEB">WEB</option>
            <option value="OOP">OOP</option>
            <option value="DBMS">DBMS</option>
            <option value="STATISTIC">STATISTIC</option>
            <option value="OS">OS</option>
            <option value="DSA">DSA</option>
            <option value="IS">IS</option>
        </select>
    </div>
  <br>
    <!-- Email Input -->
    <div class="input-group">
        <i class="fas fa-envelope"></i>
        <input type="email" name="email" id="email" placeholder="Email" required>
        <label for="email">Email</label>
    </div>

    <!-- Password Input -->
    <div class="input-group">
        <i class="fas fa-lock"></i>
        <input type="password" name="password" id="password" placeholder="Password" required>
        <label for "password">Password</label>
    </div>

    <!-- Submit Button -->
    <input type="submit" class="btn" value="Sign Up" name "signUp">
</form>

      
      <div class="links">
        <p>Already Have Account ?</p>
        <button id="signInButton">Sign In</button>
      </div>
    </div>

    <div class="container" id="signIn">
        <h1 class="form-title">Sign In as a Lecture</h1>
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
        
        <div class="links">
          <p>Don't have account yet?</p>
          <button id="signUpButton">Sign Up</button>
        </div>
      </div>
      <script src="../Login/script.js"></script>
</body>
</html>
