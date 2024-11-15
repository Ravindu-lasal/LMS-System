<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HND in English</title>
    <link rel="stylesheet" href="../../../assets/css/details.css">
</head>

<body>
    <header>
        <h1>Higher National Diploma in English (HND-ENG)</h1>
    </header>

    <section class="course-details">
        <h2>Course Overview</h2>
        <p>
            <?php
            // This text could be dynamic in the future, such as being retrieved from a database
            echo "The Higher National Diploma (HND) in English is designed to equip students with the necessary skills in English language and literature. This program caters to both full-time and part-time students.";
            ?>
        </p>
    </section>

    <section class="course-objectives">
        <h2>Course Objectives</h2>
        <ul>
            <?php
            // Course objectives, stored in an array for dynamic rendering.
            $objectives = [
                "Enhance proficiency in English language skills.",
                "Develop critical thinking and analytical skills through literature.",
                "Prepare students for further academic pursuits or professional careers."
            ];

            // Loop through the array and print each objective in a list item
            foreach ($objectives as $objective) {
                echo "<li>$objective</li>";
            }
            ?>
        </ul>
    </section>

    <section class="course-structure">
        <h2>Course Structure</h2>
        <table>
            <thead>
                <tr>
                    <th>Year</th>
                    <th>Subjects</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Structure data for each year, could be fetched from a database later.
                $structure = [
                    "Year 1" => "English Language, Literature Studies, Communication Skills",
                    "Year 2" => "Advanced English, Creative Writing, Linguistics"
                ];

                // Loop through the structure array and output rows dynamically
                foreach ($structure as $year => $subjects) {
                    echo "<tr><td>$year</td><td>$subjects</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </section>

    <section class="eligibility">
        <h2>Eligibility Criteria</h2>
        <p>
            <?php
            // Eligibility criteria can also be dynamic
            echo "Applicants should have a G.C.E. Advanced Level qualification or equivalent. A strong interest in English language and literature is essential.";
            ?>
        </p>
    </section>

    <section class="duration">
        <h2>Course Duration</h2>
        <p>
            <?php
            // Dynamic course duration, could be fetched from a database
            echo "The full-time program lasts 2 ½ years, while the part-time program lasts 2 years.";
            ?>
        </p>
    </section>

    <section class="mode-of-conduct">
        <h2>Mode of Conduct</h2>
        <p><?php echo "The part-time course is conducted on Saturdays and Sundays from 8:00 AM to 4:30 PM."; ?></p>
    </section>

    <section class="assessment-method">
        <h2>Assessment Method</h2>
        <p><?php echo "Assessment methods will include written examinations and continuous assessments throughout the course."; ?></p>
    </section>

    <section class="selection-method">
        <h2>Selection Method</h2>
        <p><?php echo "The number of students to be recruited will be determined by the relevant institutes based on resource availability. Details regarding interviews and examinations will be communicated after application submission."; ?></p>
    </section>

    <footer>
        <p>&copy; 2024 HND Program - All Rights Reserved.</p>
    </footer>
</body>

</html>