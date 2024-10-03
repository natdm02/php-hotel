<?php
//arrey hotel
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

    $Filter = isset($_GET['parking']) && $_GET['parking'] == '1';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP HOTEL</title>
    <!--BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!--css-->
    <link rel="stylesheet" href="mine.css">
</head>

<body>

<main>
    <div class="container my-5">
        
        <form method="GET" class="mb-4">
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="parking" name="parking" value="1" <?php if ($Filter) echo 'checked'; ?>>
                <label class="form-check-label" for="parking">hotel con parcheggio</label>
            </div>
            <button type="submit" class="btn btn-primary mt-3">filtra</button>
        </form>

        
        <table class="table table-bordered">
            <tr>
                <th>name</th>
                <th>description</th>
                <th>parking</th>
                <th>rating</th>
                <th>Km</th>
            </tr>

            
            <?php foreach ($hotels as $hotel) {
                
                if ($Filter && !$hotel['parking']) {
                    continue;
                }
            ?>
                <tr>
                    <td><?php echo $hotel['name']; ?></td>
                    <td><?php echo $hotel['description']; ?></td>
                    <td><?php echo $hotel['parking'] ? 'Sì' : 'No'; ?></td>
                    <td><?php echo $hotel['vote']; ?></td>
                    <td><?php echo $hotel['distance_to_center']; ?> km</td>
                </tr>
            <?php } ?>
        </table>
    </div>
</main>
</body>
</html>

