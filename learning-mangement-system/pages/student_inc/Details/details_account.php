<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Higher National Diploma in Accountancy - (HNDA)</title>
    <link rel="stylesheet" href="../../../assets/css/details.css">
</head>

<body>
    <header>
        <h1>Higher National Diploma in Accountancy (HNDA)</h1>
    </header>

    <section class="course-overview">
        <h2>Course Overview</h2>
        <p>
            <?php
            // Overview of the program
            echo "The Higher National Diploma in Accountancy (HNDA) was established in 1943 as the National Diploma in Accountancy to detect and prevent frauds, errors, and malpractices in Ceylon Tea Estates and Ceylon Railway. It became the HNDA in 1946 and has since gained recognition as equivalent to a Bachelors of Commerce degree by the University Grant Commission (UGC) of Sri Lanka.";
            ?>
        </p>
    </section>

    <section class="program-details">
        <h2>Program Details</h2>
        <ul>
            <li>The HNDA program can be completed on a full-time or part-time basis within a four-year period.</li>
            <li>It consists of eight academic semesters, with practical experience through in-plant training.</li>
            <li>The course is designed to produce skilled, competent graduates equipped with modern technology in accounting and finance.</li>
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
                        "type" => "Full Time / Part Time",
                        "phone" => "0632222056, 0632223035, 0718100975, 0717638653"
                    ],
                    [
                        "no" => "02",
                        "name" => "Advanced Technological Section Anuradhapura",
                        "address" => "No. 35/388, Harishchandra Mw, Anuradhapura",
                        "type" => "Full Time / Part Time",
                        "phone" => "0252234417, 0716564572, 0715177580"
                    ],
                    [
                        "no" => "03",
                        "name" => "Advanced Technological Institute, Badulla",
                        "address" => "Greenland Drive, Badulla",
                        "type" => "Full Time / Part Time",
                        "phone" => "0552230218, 0552223818, 0778094573, 0712347677"
                    ],
                    [
                        "no" => "04",
                        "name" => "Advanced Technological Section Batticaloa",
                        "address" => "Main Street, Kovil Kulam, Arayampathi, Batticaloa",
                        "type" => "Full Time / Part Time",
                        "phone" => "0652247519, 0652247470, 0778641182, 0716376307"
                    ],
                    [
                        "no" => "05",
                        "name" => "Advanced Technological Institute, Dehiwala.",
                        "address" => "Waidya Road, Dehiwala",
                        "type" => "Full Time / Part Time",
                        "phone" => "0112738349, 0718085371, 0714407665"
                    ],
                    [
                        "no" => "06",
                        "name" => "Advanced Technological Institute, Jaffna.",
                        "address" => "No. 665/5, Beach Road, Guru Nagar, Jaffna",
                        "type" => "Full Time / Part Time",
                        "phone" => "0212222595, 0212229803, 0718447486, 0777113664"
                    ],
                    [
                        "no" => "07",
                        "name" => "Advanced Technological Institute, Kandy.",
                        "address" => 'No. 16, Keppetipola Mw,Kandy',
                        'type' => 'Full Time / Part Time',
                        'phone' => '0812232097, 0719175285, 0774538133'
                    ],
                    [
                        'no' => '08',
                        'name' => 'Advanced Technological Institute, Kegalle.',
                        'address' => 'Bandaranayake Mw, Kegalle',
                        'type' => 'Full Time / Part Time',
                        'phone' => '0352221297, 0352221713, 0714848210, 0716254659'
                    ],
                    [
                        'no' => '09',
                        'name' => 'Advanced Technological Institute, Kurunagala.',
                        'address' => '22/1, Wilgoda Road, Kurunagala',
                        'type' => 'Full Time / Part Time',
                        'phone' => '0372229583, 0372224911 ,0714882528'
                    ],
                    [
                        'no' => '10',
                        'name' => 'Advanced Technological Institute , Galle.',
                        'address' => 'Siridamma Mw , Labuduwa , Akmeemana.',
                        'type' => 'Full Time / Part Time',
                        'phone' => '0912246179'
                    ],
                    [
                        'no' => '11',
                        'name' => 'Advanced Technological Institute , Gampaha.',
                        'address' => 'Naiwala , Essalla , Veyangoda',
                        'type' => 'Full Time / Part Time',
                        'phone' => '0332287519 ,0332292544 ,0715511205 ,0772917792'
                    ],
                    [
                        'no' => '12',
                        'name' => 'Advanced Technological Section Rathnapura.',
                        'address' => 'New Town , Rathnapura',
                        'type' => 'Full Time / Part Time',
                        'phone' => '0452231492 ,0452231493 ,0718147124 ,0713930219'
                    ],
                    [
                        'no' => '13',
                        'name' => 'Advanced Technological Section Samanthurai.',
                        'address' => 'Main Street , Samanthurai',
                        'type' => 'Full Time / Part Time',
                        'phone' => '0672261304 ,0775153500'
                    ],
                    [
                        'no' => '14',
                        'name' => 'Advanced Technological Section Tangalle.',
                        'address' => 'Yayawatta , Netolpitiya , Tangalle',
                        'type' => 'Full Time / Part Time',
                        'phone' => '0472241845 ,0472241846 ,0714491932'
                    ],
                    [
                        'no' => '15',
                        'name' => 'Advanced Technological Section Trincomalee.',
                        'address' => 'Inner Harbour Rd , Trincomalle',
                        'type' => 'Full Time / Part Time',
                        'phone' => '0262223232 ,0262050617 ,0773659589'
                    ],
                    [
                        'no' => '16',
                        'name' => 'Advanced Technological Section Vavuniya.',
                        'address' => 'Off A 9 Road , Veppankulam,Omanthai , Vavuniya.',
                        'type' => 'Full Time / Part-Time',
                        'phone' => '0242052733 ,0776162010'
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
        <p><?php echo '<strong>Entry qualifications:</strong> Applicants should have one of the following: GCE (A/L) Examination passes in four subjects (old syllabus) or three subjects (new syllabus), with at least two credit passes including Mathematics or Accountancy.'; ?></p>
    </section>

    <footer>
        <p>&copy; 2024 HND Program - All Rights Reserved.</p>
    </footer>
</body>

</html>