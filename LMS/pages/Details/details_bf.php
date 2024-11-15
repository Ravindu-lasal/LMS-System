<?php
// If you need any server-side PHP logic, add it here.
// For example, fetching data from a database or handling form submissions.
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Higher National Diploma in Business Finance - (HNDBF)</title>
    <link rel="stylesheet" href="../../assets/css/details.css">
</head>
<body>
    <header>
        <h1>Higher National Diploma in Business Finance (HNDBF)</h1>
    </header>

    <section class="course-overview">
        <h2>Course Overview</h2>
        <p>
            <?php
            // Overview of the program
            echo "The National Diploma in Business and Finance was introduced in 1984 by the Board of Technology and Education Council in the United Kingdom. The syllabus has been revised in 2004 and 2010 to meet the rapid changes in the business environment. This Higher National Diploma in Business Finance provides students with a strong foundational education in Business and Finance, along with specialized knowledge in selected areas of study, technical skills in finance, management, and business strategy.";
            ?>
        </p>
        <p>
            <?php
            // Additional details about skills developed
            echo "The program enables students to develop analytical, logical, critical, and problem-solving skills, as well as personal attributes such as communication and presentation skills.";
            ?>
        </p>
    </section>

    <section class="conducted-at">
        <h2>Conducted At</h2>
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Name of the ATI/ATI Section</th>
                    <th>Addresses</th>
                    <th>Full Time/Part Time</th>
                    <th>Telephone No.</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Data for institutes offering the course
                $institutes = [
                    [
                        "no" => "01",
                        "name" => "Advanced Technological Institute, Dehiwala",
                        "address" => "Waidya Road, Dehiwala",
                        "type" => "Full Time",
                        "phone" => "0112738349, 0112714270"
                    ]
                ];

                // Loop through the institutes array and output rows dynamically
                foreach ($institutes as $institute) {
                    echo "<tr><td>{$institute['no']}</td><td>{$institute['name']}</td><td>{$institute['address']}</td><td>{$institute['type']}</td><td>{$institute['phone']}</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </section>

    <section class="entry-qualification">
        <h2>Entry Qualification</h2>
        <p><?php echo 'Applicants should have a G.C.E. Advanced Level qualification or equivalent.'; ?></p>
    </section>

    <footer>
        <p>&copy; 2024 HND Program - All Rights Reserved.</p>
    </footer>
</body>
</html>