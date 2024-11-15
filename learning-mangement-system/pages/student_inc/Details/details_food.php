<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Higher National Diploma in Food Technology - (HNDFT)</title>
    <link rel="stylesheet" href="../../../assets/css/details.css">
</head>

<body>
    <header>
        <h1>Higher National Diploma in Food Technology (HNDFT)</h1>
    </header>

    <section class="course-overview">
        <h2>Course Overview</h2>
        <p>
            <?php
            // Overview of the program
            echo "The Higher National Diploma in Food Technology (HNDFT) programme at the Sri Lanka Institute of Advanced Technological Education (SLIATE) was developed and introduced in 2012 with the objective of producing middle-level Food Technology professionals required for the new millennium.";
            ?>
        </p>
    </section>

    <section class="program-details">
        <h2>Overview of the Program</h2>
        <ul>
            <li>The HNDFT program is a diploma program of two and a half (2 ½) years duration.</li>
            <li>The program will be offered in a course unit system in semesters, comprising six semesters, each lasting 15 weeks.</li>
            <li>The first four semesters consist of coursework, while the last two semesters involve in-plant training.</li>
            <li>The total program consists of 85 credits, all contributing to the GPA of the program.</li>
        </ul>
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
                        "name" => "Advanced Technological Institute, Gampaha.",
                        "address" => "Naiwala, Essalla, Veyangoda",
                        "type" => "Full Time",
                        "phone" => "033-2292544, 033-2287519"
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

    <section class="entry-profile">
        <h2>Entry Profile</h2>
        <p><?php echo 'Applicants should have a G.C.E. Advanced Level qualification or equivalent.'; ?></p>
    </section>

    <footer>
        <p>&copy; 2024 HND Program - All Rights Reserved.</p>
    </footer>
</body>

</html>