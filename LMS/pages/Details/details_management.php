<?php
// If you need any server-side PHP logic, add it here.
// For example, fetching data from a database or handling form submissions.
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Higher National Diploma in Management - (HNDM)</title>
    <link rel="stylesheet" href="../../assets/css/details.css">
</head>
<body>
    <header>
        <h1>Higher National Diploma in Management (HNDM)</h1>
    </header>

    <section class="course-details">
        <h2>Course Overview</h2>
        <p>
            <?php
            // Overview of the program
            echo "At the completion of the program, students will be expected to have gained knowledge of a broad range of relevant business-related academic disciplines and acquired skills related to core competencies such as collecting, analyzing, and organizing information; communicating ideas; planning and organizing activities; working with others in teams; solving problems; using mathematical ideas and techniques; and applying technology.";
            ?>
        </p>
    </section>

    <section class="core-competencies">
        <h2>Core Competencies</h2>
        <ul>
            <?php
            // Core competencies listed in an array for dynamic rendering
            $competencies = [
                "Collecting, analyzing and organizing information",
                "Communicating ideas and information",
                "Planning and organizing activities",
                "Working with others in teams",
                "Solving problems",
                "Using mathematical ideas and techniques",
                "Using technology"
            ];

            // Loop through the array and print each competency in a list item
            foreach ($competencies as $competency) {
                echo "<li>$competency</li>";
            }
            ?>
        </ul>
    </section>

    <section class="specialized-knowledge">
        <h2>Specialized Knowledge</h2>
        <p>
            <?php
            // Specialized knowledge description
            echo "Students will acquire specialized knowledge of key management-related disciplines such as human resource management or marketing management, along with practical experience through in-plant training.";
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
                        "name" => "Hardy Advanced Technological Institute, Ampara",
                        "address" => "Inginiyagala Rd., Ampara",
                        "type" => "Full Time",
                        "phone" => "0632222056, 0632223035, 0718100975, 0717638653"
                    ],
                    [
                        "no" => "02",
                        "name" => "Advanced Technological Institute, Badulla.",
                        "address" => "Greenland Drive, Badulla",
                        "type" => "Full Time",
                        "phone" => "0552230218, 0552223818, 0778094573, 0712347677"
                    ],
                    [
                        "no" => "03",
                        "name" => "Advanced Technological Institute, Dehiwala.",
                        "address" => "Waidya Road, Dehiwala",
                        "type" => "Full Time",
                        "phone" => "0112738349, 0718085371, 0714407665"
                    ],
                    [
                        "no" => "04",
                        "name" => "Advanced Technological Institute, Jaffna.",
                        "address" => "No. 665/5, Beach Road, Guru Nagar, Jaffna",
                        "type" => "Full Time",
                        "phone" => "0212222595, 0212229803, 0718447486, 0777113664"
                    ],
                    [
                        "no" => "05",
                        "name" => "Advanced Technological Institute, Kandy.",
                        "address" => "No. 16, Keppetipola Mw,Kandy",
                        "type" => "Full Time",
                        "phone" => "0812232097, 0719175285, 0774538133"
                    ],
                    [
                        "no" => "06",
                        "name" => "Advanced Technological Institute, Kurunagala.",
                        "address" => "22/1, Wilgoda Road, Kurunagala",
                        "type" => "Full Time",
                        "phone" => "0372229583, 0372224911, 0714882528"
                    ],
                    [
                        "no" => "07",
                        "name" => "Advanced Technological Institute, Galle.",
                        "address" => "Siridamma Mw, Labuduwa, Akmeemana.",
                        "type" => "Full Time",
                        "phone" => "0912246179, 0771681233, 0710968530"
                    ],
                    [
                        "no" => "08",
                        "name" => 'Advanced Technological Institute Section, Nawalapitiya.',
                        'address' => 'Old Urban Council Building, Nawalapitiya.',
                        'type' => 'Full Time',
                        'phone' => '0542050634, 0713702889'
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