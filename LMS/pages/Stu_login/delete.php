<?php
include("connect.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $deleteQuery = "DELETE FROM `student` WHERE id='$id'";
    if (mysqli_query($conn, $deleteQuery)) {
        echo "<script>
                alert('Profile deleted successfully.');
                window.location.href = 'homepage.php';
              </script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
