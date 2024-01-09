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

    <div class="container">
        <h1 class="text-center my-5">PHP Hotels</h1>
        <form action="index.php" method="GET">
            <label for="parking">Parcheggio</label>
            <select name="parking" id="parking">
                <option>Sì</option>
                <option>No</option>
            </select>
            <label for="vote">Voto</label>
            <input type="number" name="vote" id="vote" min="1" max="5">
            <button class="btn btn-primary" type="button">Filtra</button>
        </form>
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
                <?php
                for ($i = 0; $i < count($hotels); $i++) {
                    echo
                    "<tr>
                    <td>
                        {$hotels[$i]['name']}
                    </td>
                    <td>
                        {$hotels[$i]['description']}
                    </td>
                    <td>
                        {$hotels[$i]['parking']}
                    </td>
                    <td>
                        {$hotels[$i]['vote']}
                    </td>
                    <td>
                        {$hotels[$i]['distance_to_center']} km
                    </td>
                </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>





</body>

</html>