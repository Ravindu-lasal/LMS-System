<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Higher National Diploma in Agriculture - HNDT (Agri)</title>
    <link rel="stylesheet" href="../../../assets/css/details.css">
</head>

<body>
    <header>
        <h1>Higher National Diploma in Agriculture (HNDT-AGRI)</h1>
    </header>

    <section class="course-details">
        <h2>Course Overview</h2>
        <p>
            <?php
            // This text could be dynamic in the future, such as being retrieved from a database
            echo "The objective of the HND-AGRI course is to produce middle-level managers capable of practicing appropriate technology and management tasks in crop and animal production, agro product processing, and agribusiness. Graduates will contribute to the socioeconomic and sustainable development of the agriculture sector locally and internationally with professional attitudes and confidence.";
            ?>
        </p>
    </section>

    <section class="program-overview">
        <h2>Overview of the Program</h2>
        <ul>
            <li>The HNDT (Agri) program is a diploma program of three years duration.</li>
            <li>The program is offered in a course unit system across 6 semesters, each lasting 15 weeks.</li>
            <li>The total program consists of 101 credits.</li>
            <li>Out of the 101 credits, 60 credits contribute to the GPA of the program, while the remaining 41 credits are NGPA.</li>
            <li>The program consists of four semesters of coursework and two semesters of in-plant training.</li>
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
                        "name" => "Hardy Advanced Technological Institute, Ampara",
                        "address" => "Inginiyagala Rd., Ampara",
                        "type" => "Full Time",
                        "phone" => "0632222056, 0632223035, 0718100975, 0717638653"
                    ],
                    [
                        "no" => "02",
                        "name" => "Advanced Technological Institute, Galle.",
                        "address" => "Siridamma Mw, Labuduwa, Akmeemana.",
                        "type" => "Full Time",
                        "phone" => "0912246179"
                    ],
                    [
                        "no" => "03",
                        "name" => "Advanced Technological Institute, Gampaha.",
                        "address" => "Naiwala, Essalla, Veyangoda",
                        "type" => "Full Time",
                        "phone" => "0332287519, 0332292544, 0715511205, 0772917792"
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

    <section class="eligibility">
        <h2>Eligibility Criteria</h2>
        <p>
            <?php
            // Eligibility criteria can also be dynamic
            echo "Applicants should have a G.C.E. Advanced Level qualification or equivalent. A strong interest in agriculture and related fields is essential.";
            ?>
        </p>
    </section>

    <section class="duration">
        <h2>Course Duration</h2>
        <p>
            <?php
            // Dynamic course duration, could be fetched from a database
            echo "The HNDT (Agri) program is a full-time course lasting three years.";
            ?>
        </p>
    </section>

    <footer>
        <p>&copy; 2024 HND Program - All Rights Reserved.</p>
    </footer>
</body>

</html>