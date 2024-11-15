<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Higher National Diploma in Quantity Surveying - (HNDQS)</title>
    <link rel="stylesheet" href="../../../assets/css/details.css">
</head>

<body>
    <header>
        <h1>Higher National Diploma in Quantity Surveying (HNDQS)</h1>
    </header>

    <section class="course-overview">
        <h2>Course Overview</h2>
        <p>
            <?php
            // Overview of the program
            echo "At the completion of the HNDQS program, holders can start their careers as Quantity Surveyors in both public and private sectors. The syllabus of the HNDQS programme was recently introduced by considering the syllabuses of other professional Institutes of Quantity Surveying. This program has been conducted over 2 ½ years on a full-time basis since 2012, with the mission of creating competent higher national diploma holders equipped with modern technology in the field of Quantity Surveying to contribute to the sustainable development of the country.";
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
                        "name" => "Advanced Technological Institute, Galle.",
                        "address" => "Siridamma Mw, Labuduwa, Akmeemana.",
                        "type" => "Full Time",
                        "phone" => "091-246179"
                    ],
                    [
                        "no" => "02",
                        "name" => "Advanced Technological Institute, Colombo.",
                        "address" => "No. 42, Rodrigo Place, Colombo 15",
                        "type" => "Full Time",
                        "phone" => "011-529479, 011-521152"
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