
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #DA9FFA; 
        }
    </style>
  </head>
  <body>
    <h1>Football Team</h1>
    <nav class="navbar bg-success">
        <div class="container-fluid">
            <a class="navbar-brand text-white fw-bold">Choose Type </a>
            <button class="btn btn-outline-light" type="submit">Profile</button>
        </div>
    </nav>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <a href="http://localhost:8080/riri_consume/ConsumeAPI.php" class="text-start">
                    <button class="btn btn-warning btn-lg" type="button">Countries</button>
                </a>
            </div>
            <div class="col-md-6">
                <a href="http://localhost:8080/riri_consume/ConsumeAPI.php" class="text-start">
                    <button class="btn btn-warning btn-lg" type="button">Competition</button>
                </a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
