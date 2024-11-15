<?php
session_start();
include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        .student-card {
            background-color: #ccdde2;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
            display: flex;
            flex-direction: column;
            width: 100%;
        }
        .student-card h3 {
            margin: 0 0 10px;
            font-size: 24px;
        }
        .student-card p {
            margin: 5px 0;
            font-size: 18px;
        }
        .buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 50px;
        }
        .btn {
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .edit-btn {
            background-color: #28a745;
        }
        .delete-btn {
            background-color: #f44336;
        }
        .logout-btn {
            padding: 15px 30px;
            background-color: #007BFF;
            color: white;
            border-radius: 10px;
            text-decoration: none;
            font-size: 20px;
            margin-top: 40px;
            display: inline-block;
        }
        .logout-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 style="text-align: center; margin-top: 50px;">Welcome to the Student Dashboard</h1>
<br><br><br>
        <?php 
        if (isset($_SESSION['id'])) {
            $id = $_SESSION['id'];
            $query = mysqli_query($conn, "SELECT * FROM `student` WHERE id='$id'");
            
            while ($row = mysqli_fetch_array($query)) {
                ?>
                <div class="student-card">
                <center><h3>ID - <?php echo $row['id']; ?></h3></center>
                <p><strong>Full Name:</strong> <?php echo $row['fullName']; ?></p><br>
                    <p><strong>Email:</strong> <?php echo $row['email']; ?></p><br>
                    <p><strong>Address:</strong> <?php echo $row['address']; ?></p><br>
                    <p><strong>Contact:</strong> <?php echo $row['contact']; ?></p><br>
                    <div class="buttons">
                    <center><a href="edit.php?id=<?php echo $row['id']; ?>" class="btn">Edit Profile</a></center>
                    <center><a href="delete.php?id=<?php echo $row['id']; ?>" class="btn">Delete Profile</a></center>
                    </div>
                </div>
                <?php
            }
        } else {
            echo "<p>You are not logged in. Please log in to view your details.</p>";
        }
        ?>
        <center><a href="logout.php" class="logout-btn">Logout</a></center>
    </div>
</body>
</html>
