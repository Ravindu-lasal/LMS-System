<?php
// If you need any server-side PHP logic, add it here.
// For example, fetching data from a database or handling form submissions.
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HND in Information Technology</title>
    <link rel="stylesheet" href="../../assets/css/details.css">
</head>
<body>
    <header>
        <h1>Higher National Diploma in Information Technology (HND-IT)</h1>
    </header>

    <section class="course-details">
        <h2>Course Overview</h2>
        <p>
            <?php
            // This text could be dynamic in the future, such as being retrieved from a database
            echo "This Higher National Diploma (HND) in Information Technology program is designed to prepare students with the knowledge and skills required for careers in the IT industry. The program covers both theoretical and practical aspects of IT.";
            ?>
        </p>
    </section>

    <section class="course-objectives">
        <h2>Course Objectives</h2>
        <ul>
            <?php
            // Course objectives, stored in an array for dynamic rendering.
            $objectives = [
                "Provide a solid foundation in core IT principles and technologies.",
                "Develop problem-solving skills relevant to the IT industry.",
                "Prepare students for further academic study or professional careers."
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
                    "Year 1" => "Programming, Database Systems, Networking, Web Development",
                    "Year 2" => "Software Engineering, System Analysis, Advanced Networking, Project Work"
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
            echo "Applicants should have a G.C.E. Advanced Level qualification or equivalent, with a strong interest in IT. Prior experience or study in computing is recommended.";
            ?>
        </p>
    </section>

    <section class="duration">
        <h2>Course Duration</h2>
        <p>
            <?php
            // Dynamic course duration, could be fetched from a database
            echo "This is a full-time program lasting 2 1/2 years.";
            ?>
        </p>
    </section>

    <footer>
        <p>&copy; 2024 HND Program - All Rights Reserved.</p>
    </footer>
</body>
</html>
