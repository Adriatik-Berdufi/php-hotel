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
    <div class="container text-center mt-5">
        <h1>Lista Hotels</h1>
        <div class="mt-5">
                <ul class="d-flex gap-3">
                    <?php foreach ($hotels as $hotel) : ?>
                        <li style="list-style-type: none;" class="card text-start p-3">
                                <div classmb-3><?= $hotel['name'] ?></div>
                                <div classmb-3><?= $hotel['description'] ?></div>
                                <div classmb-3>parcheggio:<?= $hotel['parking'] ? 'Si' : 'No'?></div>
                                <div classmb-3>voto:<?= $hotel['vote'] ?></div>
                                <div classmb-3>distnza:<?= $hotel['distance_to_center'] ?>km</div>


                        </li>
                    <?php endforeach; ?>
                </ul>
        </div>

        
    </div>
</body>

</html>
