<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>

</head>

<body>
    <nav>
        <a href="http://localhost/SimoneauHugoPOO/index.php/moto">Accueil</a>
    </nav>
    <h1 class="text-center">Toute les motos</h1>
    <?php

    foreach ($motos as $moto) {
        ?>
        <a class="d-flex justify-content-center m-2 border border-2 border-secondary rounded text-decoration-none"
            href="http://localhost/SimoneauHugoPOO/index.php/moto/<?= $moto->getId() ?>">
            <div class="text-decoration-none text-dark w-50">
                <div class="d-flex justify-content-center">
                    <img src="<?= $moto->getImage() ?>" class="img-fluid" alt="<?= $moto->getModel() ?>">
                </div>
                <p class="text-center">Model : <?= $moto->getModel() ?></p>
                <p class="text-center">Marque : <?= $moto->getBrand() ?></p>
                <p class="text-center">Type : <?= $moto->getType() ?></p>
                <p class="text-center">Prix : <?= $moto->getPrice() ?>€</p>
            </div>
        </a>
        <?php
    }

    ?>
</body>

</html>