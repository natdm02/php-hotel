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
    <!--bootstrap/-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>php-hotel</title>
</head>

<body>

    <main class="col-10 m-auto p-4">
        <form class="mb-4" action="" method="GET">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="show_parking" id="showParking">
                <label class="form-check-label" for="showParking">Mostra solo hotel con parcheggio</label>
            </div>
                <button type="submit" class="btn btn-primary mt-2">Filtra</button>
        </form>

        <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nome Hotel</th>
                <th scope="col">Descrizione</th>
                <?php if(isset($_GET['show_parking']) && $_GET['show_parking'] == 'on') { ?>
                <th scope="col">Parcheggio</th>
                <?php } ?>
                <th scope="col">Voto</th>
                <th scope="col">Distanza dal centro</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($hotels as $hotel) { ?>
            <tr>
                <td><?php echo $hotel['name']; ?></td>
                <td><?php echo $hotel['description']; ?></td>
                <?php if(isset($_GET['show_parking']) && $_GET['show_parking'] == 'on') { ?>
                <td><?php echo $hotel['parking'] === true ? 'Sì' : 'No'; ?></td>
                <?php } ?>
                <td><?php echo $hotel['vote']; ?></td>
                <td><?php echo $hotel['distance_to_center']; ?> km</td>
            </tr>
            <?php } ?>
        </tbody>
        </table>
    </main>/

  
</body>
</html>