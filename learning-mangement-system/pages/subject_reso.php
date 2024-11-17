<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Resources</title>
    <link rel="stylesheet" href="../assets/css/resources.css">
</head>

<body>
    <div class="back-btn">
        <div class="empty"></div>
        <button class="back"><a href="./stu_dashboard.php">Go Back</a></button>
    </div>
    <div class="container">
        <h1>Subject Resources</h1>
        <h3>Here are the resources related to the subject</h3>
        <?php
        include_once "../inc/db_connect.php";

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT le.enroll_id, le.subject_id, le.link, le.enrollment_date, s.subject_name 
            FROM lecture_enroll le 
            INNER JOIN subject s ON le.subject_id = s.subject_id";

        $result = $conn->query($sql);

        if ($result === false) {
            die("Error executing query: " . $conn->error);
        }

        if ($result->num_rows > 0) {
            echo "<table class='table table-striped'>";
            echo "<thead><tr><th>Subject Name</th><th>Resource Link</th><th>Enrollment Date</th><th>Action</th></tr></thead><tbody>";

            while ($row = $result->fetch_assoc()) {
                $enroll_id = $row['enroll_id'];
                $link = htmlspecialchars($row['link']);
                $subject_name = htmlspecialchars($row['subject_name']);
                $enrollment_date = htmlspecialchars($row['enrollment_date']);

                $button_disabled = isset($_SESSION['referred'][$enroll_id]) ? 'disabled' : '';

                echo "<tr>
                    <td>$subject_name</td>
                    <td><a href='$link' target='_blank'>$link</a></td>
                    <td>$enrollment_date</td>
                    <td>
                        <form method='post'>
                            <button type='submit' name='mark_as_referred' value='$enroll_id' class='btn btn-primary' $button_disabled>Mark as Referred</button>
                        </form>
                    </td>
                  </tr>";
            }

            echo "</tbody></table>";
        } else {
            echo "<p>No resources found.</p>";
        }

        if (isset($_POST['mark_as_referred'])) {
            $enroll_id = $_POST['mark_as_referred'];

            if (!isset($_SESSION['referred'])) {
                $_SESSION['referred'] = [];
            }
            $_SESSION['referred'][$enroll_id] = true;

            header("Location: " . $_SERVER['PHP_SELF']);
            exit;
        }

        $conn->close();
        ?>
    </div>





</body>

</html>