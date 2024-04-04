<?php
    
    $api_url = 'https://apiv3.apifootball.com/?action=get_leagues&country_id=6&APIkey=99230a3f2c0aa0da52b18fd50fe3163bc5b247aeb3d1bb6c7ffc614852acf210';
    
    
    $data = json_decode(file_get_contents($api_url), true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Competitions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #DA9FFA; 
        }
        .card {
            margin-bottom: 20px;
            max-width: 300px; 
        }
        h1 {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="http://localhost:8080/riri_consume/ConsumeAPI.php">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

<div class="container mt-3">
    <h1 class="text-center mb-4">List of Competition</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php foreach ($data as $row): ?>
            <div class="col">
                <div class="card">
                    <img src="<?= $row['league_logo'] ?>" class="card-img-top" alt="League Logo">
                    <img src="<?= $row['country_logo'] ?>" class="card-img-top" alt="Country Logo">
                    <div class="card-body">
                        <h2 class="card-title"><?= $row['country_name'] ?></h2>
                        <h3 class="card-title">Country ID: <?= $row['country_id'] ?></h3>
                        <h3 class="card-title">League ID: <?= $row['league_id'] ?></h3>
                        <h3 class="card-title">League Name: <?= $row['league_name'] ?></h3>
                        <h3 class="card-title">League Season: <?= $row['league_season'] ?></h3>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
