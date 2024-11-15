<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Higher National Diploma in Engineering - (HND - Engineering)</title>
    <link rel="stylesheet" href="../../../assets/css/details.css">
</head>

<body>
    <header>
        <h1>Higher National Diploma in Engineering (HND - Engineering)</h1>
    </header>

    <section class="course-overview">
        <h2>Course Overview</h2>
        <p>
            <?php
            // Overview of the program
            echo "The Higher National Diploma Program in Engineering (HNDE) is designed to convert school leavers with specialized mathematical knowledge into middle-level technologists who possess relevant engineering capabilities. The program provides a clear understanding of engineering principles, practical applications, and the emerging necessities of changes and creative innovations in specific fields.";
            ?>
        </p>
        <p>
            <?php
            // Additional details about the program's history
            echo "This program began under the Technical College, Ratmalana in 1986 and was brought under SLIATE in 1997. Since then, SLIATE has been conducting this program with the aim of creating competent Higher National Diploma holders equipped with modern technology in Civil, Mechanical, and Electrical Engineering.";
            ?>
        </p>
    </section>

    <section class="divisions">
        <h2>Divisions of HND - Engineering</h2>
        <ul>
            <li><strong>Higher National Diploma in Civil Engineering:</strong> A three-year full-time English medium course including six months of in-plant training.</li>
            <li><strong>Higher National Diploma in Electrical Engineering:</strong> A three-and-a-half-year full-time English medium course with six months of in-plant training.</li>
            <li><strong>Higher National Diploma in Mechanical Engineering:</strong> Details to be provided.</li>
        </ul>
    </section>

    <section class="entry-profile">
        <h2>Entry Profile</h2>
        <p><?php echo 'Applicants should have passed Combined Mathematics, Physics, and Chemistry in the GCE (A/L) Examination in one sitting and must have a simple pass for the English subject at the Ordinary Level (O/L). A pass in the General Papers is compulsory for applicants qualified under the GCE (A/L) new syllabus.'; ?></p>
    </section>

    <section class="selection-criteria">
        <h2>Selection Criteria</h2>
        <p><?php echo 'Shortlisted applicants will face an interview for selection. The selection will be based on the Z-Score of the Advanced Level Examination. Preference will be given to applicants below 23 years of age as of the closing date for applications.'; ?></p>
    </section>

    <footer>
        <p>&copy; 2024 HND Program - All Rights Reserved.</p>
    </footer>
</body>

</html>