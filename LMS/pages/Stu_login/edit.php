<?php
session_start();
include("connect.php");
if (!isset($_SESSION['id'])) {
    header("Location: index.php"); 
    exit();
}
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = mysqli_query($conn, "SELECT * FROM `student` WHERE id='$id'");
    $row = mysqli_fetch_array($query);
    if (!$row) {
        echo "Student not found.";
        exit();
    }
    if (isset($_POST['update'])) {
        $fullName = $_POST['fullName'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $contact = $_POST['contact'];

        $updateQuery = "UPDATE `student` SET fullName='$fullName', email='$email', address='$address', contact='$contact' WHERE id='$id'";

        if (mysqli_query($conn, $updateQuery)) {
            echo "<script>
                    alert('Profile updated successfully!');
                    window.location.href = 'homepage.php';
                  </script>";
            exit();
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
} else {
    echo "Invalid ID.";
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1 class="form-title" style="text-align: center;">Edit Profile</h1><br><br>
        <form method="POST">
        
        <div class="input-group">
            <i class="fas fa-id-badge"></i>
            <input type="text" id="ID" name="ID" value="<?php echo $row['id']; ?>" placeholder="ID" readonly>
            <label for="fullName">Id </label>
        </div>
        <br><br>

        <div class="input-group">
            <i class="fas fa-user"></i>
            <input type="text" id="fullName" name="fullName" value="<?php echo $row['fullName']; ?>" placeholder="Full Name" required>
            <label for="fullName">Full Name</label>
        </div>
        <br><br>

        <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input type="email" id="email" name="email" value="<?php echo $row['email']; ?>" placeholder="Email" required>
            <label for="email">Email</label>
        </div>
        <br><br>

        <div class="input-group">
            <i class="fas fa-home"></i>
            <input type="text" id="address" name="address" value="<?php echo $row['address']; ?>" placeholder="Address" required>
            <label for="address">Address</label>
        </div>
        <br><br>

        <div class="input-group">
            <i class="fas fa-phone"></i>
            <input type="text" id="contact" name="contact" value="<?php echo $row['contact']; ?>" placeholder="Contact" required>
            <label for="contact">Contact</label>
        </div>
        <br><br>

        <input type="submit" name="update" class="btn" value="Update Profile"><br><br><br>

        <center><div class="btn"><a href="homepage.php" class="btn">Back to Homepage</a></div></center>
        </form>
    </div>
</body>
</html>
