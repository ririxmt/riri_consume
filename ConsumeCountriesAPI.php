<?php
    $url = 'https://apiv3.apifootball.com/?action=get_countries&APIkey=ec16a045189fad26fdf77bef1783ab87dad579b767aae0d529f863f13ee27707';
    $response = file_get_contents($url);
    $countries = json_decode($response, true);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Countries</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #DA9FFA; 
        }
        .card {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="http://localhost:8080/riri_consume/ConsumeAPI.php">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-3">
        <h1 class="text-center mb-4">List of Countries</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php foreach ($countries as $country): ?>
                <div class="col">
                    <div class="card">
                        <img src="<?php echo $country['country_logo'] ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h3 class="card-title"><?php echo $country['country_id'] ?></h3>
                            <p class="card-text"><?php echo $country['country_name'] ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

