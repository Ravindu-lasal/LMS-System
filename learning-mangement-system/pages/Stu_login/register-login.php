<?php 
include 'connect.php';
//register section
if (isset($_POST['signUp'])) {
    $fullName = $_POST['s_name'];
    $address = $_POST['s_address'];
    $contact = $_POST['s_contact'];
    $email = $_POST['s_email'];
    $password = $_POST['s_password'];

    $checkEmail = "SELECT * FROM student WHERE email='$email'";
    $result = $conn->query($checkEmail);

    if ($result->num_rows > 0) {
        echo "Email Address Already Exists!";
    } else {
        $insertQuery = "INSERT INTO student (fullName, address, contact, email, password)
                        VALUES ('$fullName', '$address', '$contact', '$email', '$password')";
        if ($conn->query($insertQuery) === TRUE) {
            header("Location: index.php");
        } else {
            echo "Error: " . $conn->error;
        }
    }
}
//signin section
if (isset($_POST['signIn'])) {
    $email = $_POST['s_email'];
    $password = $_POST['s_password'];
    $sql = "SELECT * FROM student WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        session_start();
        $row = $result->fetch_assoc();
        $_SESSION['id'] = $row['id']; 
        header("Location: homepage.php");
        exit();
    } else {
        echo "Incorrect Email or Password";
    }
}
?>
