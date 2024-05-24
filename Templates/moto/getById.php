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
    <div>
        <h1 class="text-center"><?= $moto->getModel() ?></h1>
        <h2 class="text-center"><?= $moto->getBrand() ?></h2>
        <div class="d-flex justify-content-center">
            <img class="img-fluid w-50" src="<?= $moto->getImage() ?>" alt="<?= $moto->getModel() ?>">
        </div>
        <h3 class="text-center">Type : <?= $moto->getType() ?></h3>7
        <h4 class="text-center">Prix : <?= $moto->getPrice() ?>€</h4>
    </div>
    <div>
        <div class="d-flex justify-content-center">
            <form method="POST" action="delete/<?= $moto->getId() ?>">
                <input type="hidden" name="id" value="<?= $moto->getId() ?>">
                <input type="submit" value="Supprimer" class="btn btn-danger">
            </form>
        </div>
    </div>
</body>

</html>