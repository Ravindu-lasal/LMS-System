<?php
// lecturer_Timetable.php

// Include the database connection file
include '../PHP/db_connection.php';

// Initialize selected year variable
$selectedYear = isset($_POST['batch_year']) ? $_POST['batch_year'] : null;

// Handle form submission for saving data
if (isset($_POST['save'])) {
    $subject = $_POST['subject'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $notes = $_POST['notes'];
    $lecturer_id = $_POST['lecturer_id'];
    $batch_year = $_POST['batch_year'];

    // Save the new timetable entry with the selected batch year
    $sql = "INSERT INTO timetable (subject, date, time, notes, lecturer_id, batch_year) 
            VALUES ('$subject', '$date', '$time', '$notes', '$lecturer_id', '$batch_year')";
    $conn->query($sql);
    header("Location: lecturer_Timetable.php"); // Redirect after saving
}

// Handle form submission for updating data
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $subject = $_POST['subject'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $notes = $_POST['notes'];
    $lecturer_id = $_POST['lecturer_id'];

    // Update the timetable entry
    $sql = "UPDATE timetable SET subject='$subject', date='$date', time='$time', notes='$notes', lecturer_id='$lecturer_id' WHERE id=$id";
    $conn->query($sql);
    header("Location: lecturer_Timetable.php"); // Redirect after updating
}

// Handle delete request
if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM timetable WHERE id=$id";
    $conn->query($sql);
    header("Location: lecturer_Timetable.php"); // Redirect after deletion
}

// Handle edit request
$editData = null; // Initialize variable to hold edit data
if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $sql = "SELECT * FROM timetable WHERE id=$id";
    $result = $conn->query($sql);
    $editData = $result->fetch_assoc(); // Fetch the data for the selected row
}

// Fetch data for the selected batch year or all if none selected
$sql = "SELECT * FROM timetable" . ($selectedYear ? " WHERE batch_year = '$selectedYear'" : "");
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AttendLink - Schedule</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
      rel="stylesheet"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/lecturer_Timetable.css">
</head>
<body>
     <!--Nav bar-->
     <nav>
     <div class="logo">
        <a href="../HTML/main_home_page.html">
          <img src="../Images/logo.png" />
        </a>
      </div>
      <div class="nav-buttons">
        <ul>
          <li><a href="../HTML/lecturer_home_page.html">Home</a></li>
          <li><a href="../HTML/lecturer_summary.html">Summary</a></li>
          <li><a href="../HTML/lecturer_Timetable.php">Time table</a></li>
          <li><a href="../HTML/lecturer_medical_approve.html">Medical</a></li>
        </ul>
        <div class="user-icon">
          <a href="../HTML/student_profile.html">
            <i class="fas fa-user" id="lecDp"></i>
          </a>
        </div>
      </div>
    </nav>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 text-center">
                <h2>Schedule your lectures</h2>
            </div>
        </div>

        <!-- Dropdown for Batch Year -->
        <div class="row mt-3 mb-3 container my-5">
            <div class="text-center">
                <form method="post" action="lecturer_Timetable.php">
                    <select name="batch_year" class="form-select w-25 mx-auto" aria-label="Batch (Year)" onchange="this.form.submit()">
                        <option value="" disabled selected>Select Batch Year</option>
                        <option value="2023" <?php if ($selectedYear == '2023') echo 'selected'; ?>>2023</option>
                        <option value="2022" <?php if ($selectedYear == '2022') echo 'selected'; ?>>2022</option>
                        <option value="2021" <?php if ($selectedYear == '2021') echo 'selected'; ?>>2021</option>
                    </select>
                </form>
            </div>
        </div>

        <!-- Attendance Table -->
        <div class="row">
            <div class="col-12 text-center">
                <table class="table table-custom table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Subject</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Notes</th>
                            <th>Lecturer ID</th>
                            <th>Batch Year</th> <!-- New column for Batch Year -->
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo $row['subject']; ?></td>
                            <td><?php echo $row['date']; ?></td>
                            <td><?php echo $row['time']; ?></td>
                            <td><?php echo $row['notes']; ?></td>
                            <td><?php echo $row['lecturer_id']; ?></td>
                            <td><?php echo $row['batch_year']; ?></td> <!-- Display Batch Year -->
                            <td>
                            <form action="lecturer_Timetable.php" method="post" style="display:inline; margin-right: 15px;">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <button type="submit" name="edit" style="background: none; border: none; cursor: pointer;">
            <i class="fas fa-edit" style="font-size: 1.5rem; color: #ff6000;"></i>
        </button>
    </form>
    <form action="lecturer_Timetable.php" method="post" style="display:inline;">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <button type="submit" name="delete" style="background: none; border: none; cursor: pointer;">
            <i class="fas fa-trash-alt" style="font-size: 1.5rem; color: #ff6000;"></i>
        </button>
    </form>
                            </td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Form for Adding/Editing Lectures -->
        <div class="container">
            <h3 class="text-center mt-4">Add or Update Lecture</h3>
            <form action="lecturer_Timetable.php" method="post" class="text-center">
                <input type="hidden" name="id" value="<?php echo isset($editData) ? $editData['id'] : ''; ?>">
                <input type="text" name="subject" placeholder="Subject" class="form-control mb-3" required value="<?php echo isset($editData) ? $editData['subject'] : ''; ?>">
                <input type="date" name="date" class="form-control mb-3" required value="<?php echo isset($editData) ? $editData['date'] : ''; ?>">
                <input type="time" name="time" class="form-control mb-3" required value="<?php echo isset($editData) ? $editData['time'] : ''; ?>">
                <input type="text" name="notes" placeholder="Notes" class="form-control mb-3" value="<?php echo isset($editData) ? $editData['notes'] : ''; ?>">
                <input type="text" name="lecturer_id" placeholder="Lecturer ID" class="form-control mb-3" required value="<?php echo isset($editData) ? $editData['lecturer_id'] : ''; ?>">
                <input type="hidden" name="batch_year" value="<?php echo $selectedYear; ?>"> <!-- Ensure batch year is sent when saving -->

                <div class="text-end mt-4">
                    <button type="submit" name="<?php echo isset($editData) ? 'update' : 'save'; ?>" 
                            style="background-color: #ff6000; color: white; border: none; padding: 10px 20px; border-radius: 50px; cursor: pointer;">
                        <?php echo isset($editData) ? 'Update' : 'Save'; ?>
                    </button>
                    <a href="lecturer_Timetable.php" 
                       style="display: inline-block; background-color: #ff6000; color: white; border: none; padding: 10px 20px; border-radius: 50px; text-decoration: none; margin-left: 10px;">
                        Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>