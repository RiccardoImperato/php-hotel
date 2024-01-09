<?php
$hotels = [
    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotels</title>
    <!-- Bootsrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <!-- <?php
            foreach ($hotels as $hotel_info) {
                foreach ($hotel_info as $key => $data) {
                    echo "$key: $data ";
                }
            }
            ?> -->

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Parking</th>
                <th scope="col">Vote</th>
                <th scope="col">Distance to center</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <?php
                    echo $hotels[0]['name'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $hotels[0]['description'];
                    ?>
                </td>
                <td>
                    <?php
                    if ($hotels[0]['parking'] === true) {
                        echo 'Sì';
                    } else {
                        echo 'No';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    echo $hotels[0]['vote'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $hotels[0]['distance_to_center'] . ' ' . 'Km';
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php
                    echo $hotels[1]['name'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $hotels[1]['description'];
                    ?>
                </td>
                <td>
                    <?php
                    if ($hotels[1]['parking'] === true) {
                        echo 'Sì';
                    } else {
                        echo 'No';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    echo $hotels[1]['vote'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $hotels[1]['distance_to_center'] . ' ' . 'Km';
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php
                    echo $hotels[2]['name'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $hotels[2]['description'];
                    ?>
                </td>
                <td>
                    <?php
                    if ($hotels[2]['parking'] === true) {
                        echo 'Sì';
                    } else {
                        echo 'No';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    echo $hotels[2]['vote'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $hotels[2]['distance_to_center'] . ' ' . 'Km';
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php
                    echo $hotels[3]['name'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $hotels[3]['description'];
                    ?>
                </td>
                <td>
                    <?php
                    if ($hotels[3]['parking'] === true) {
                        echo 'Sì';
                    } else {
                        echo 'No';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    echo $hotels[3]['vote'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $hotels[3]['distance_to_center'] . ' ' . 'Km';
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php
                    echo $hotels[4]['name'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $hotels[4]['description'];
                    ?>
                </td>
                <td>
                    <?php
                    if ($hotels[4]['parking'] === true) {
                        echo 'Sì';
                    } else {
                        echo 'No';
                    }
                    ?>
                </td>
                <td>
                    <?php
                    echo $hotels[4]['vote'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $hotels[4]['distance_to_center'] . ' ' . 'Km';
                    ?>
                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>