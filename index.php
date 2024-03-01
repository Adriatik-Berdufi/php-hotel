<?php require_once __DIR__ ."/func.php"; ?>
<?php require_once __DIR__ ."/data.php"; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">

        <div>
                <ul>
                    <?php foreach ($hotels as $hotel) : ?>
                        <li>nome hotel: <?= $hotel['name'] ?></li>
                    <?php endforeach; ?>
                </ul>
        </div>

        
    </div>
</body>

</html>
