<?php
// If you need any server-side PHP logic, add it here.
// For example, fetching data from a database or handling form submissions.
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Higher National Diploma in Tourism and Hospitality Management - (HNDTHM)</title>
    <link rel="stylesheet" href="../../assets/css/details.css">
</head>
<body>
    <header>
        <h1>Higher National Diploma in Tourism and Hospitality Management (HNDTHM)</h1>
    </header>

    <section class="course-overview">
        <h2>Course Overview</h2>
        <p>
            <?php
            // Overview of the program
            echo "The Higher National Diploma in Tourism and Hospitality Management (HNDTHM) is designed to equip students with the skills and knowledge necessary to excel in the tourism and hospitality industries. The course duration is 3 years.";
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
                        "phone" => "063-222056, 063-223035"
                    ],
                    [
                        "no" => "02",
                        "name" => "Advanced Technological Institute, Badulla",
                        "address" => "Greenland Drive, Badulla",
                        "type" => "Full Time",
                        "phone" => "055-230818, 055-230218"
                    ],
                    [
                        "no" => "03",
                        "name" => "Advanced Technological Institute, Dehiwala.",
                        "address" => "Waidya Road, Dehiwala",
                        "type" => "Full Time",
                        "phone" => "0112738349, 0112714270"
                    ],
                    [
                        "no" => "04",
                        "name" => "Advanced Technological Institute, Jaffna.",
                        "address" => "No. 665/5, Beach Road, Guru Nagar, Jaffna",
                        "type" => "Full Time",
                        "phone" => "021-222595"
                    ],
                    [
                        "no" => "05",
                        "name" => "Advanced Technological Institute, Kandy.",
                        "address" => 'No. 16, Keppetipola Mw,Kandy',
                        'type' => 'Full Time',
                        'phone' => '0812226644'
                    ],
                    [
                       'no' => '06',
                       'name' => 'Advanced Technological Institute, Galle.',
                       'address' => 'Siridamma Mw, Labuduwa, Akmeemana.',
                       'type' => 'Full Time',
                       'phone' => '091-246179'
                   ],
                   [
                       'no' => '07',
                       'name' => 'Advanced Technological Institute Section, Nawalapitiya.',
                       'address' => 'Old Urban Council Building, Nawalapitiya',
                       'type' => 'Full Time',
                       'phone' => '0542050634'
                   ],
                   [
                       'no' => '08',
                       'name' => 'Advanced Technological Institute Section, Mannar.',
                       'address' => '',
                       'type' => 'Full Time',
                       'phone' => ''
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