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
    <nav class="navbar navbar-expand-lg bg-dark">
        <a class="text-white text-decoration-none" href="http://localhost/SimoneauHugoPOO/index.php/moto">Accueil</a>
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
    <div class="mt-4">
        <h5 class="text-center">Modification</h5>
        <form class="d-flex flex-column align-items-center" method="POST" action="">
            <label for="model">Le modele :</label>
            <input type="text" id="model" name="model" placeholder="X000..." value="<?= $moto->getModel() ?>" required>
            <label for="brand">La marque :</label>
            <input type="text" id="brand" name="brand" placeholder="Yamaha..." value="<?= $moto->getBrand() ?>"
                required>
            <label for="type">Le type :</label>
            <select name="type" id="type-select">
                <option value="">Selectionnez le type</option>
                <option value="Enduro">Enduro</option>
                <option value="Custom">Custom</option>
                <option value="Sportive">Sportive</option>
                <option value="Roadster">Roadster</option>
            </select>
            <label for="image">L'image (lien) :</label>
            <input type="text" name="image" id="image" placeholder="Url de l'image..." value="<?= $moto->getImage() ?>"
                required>
            <label for="price">Le prix :</label>
            <input type="text" name="price" id="price" placeholder="50€..." value="<?= $moto->getPrice() ?>" required>
            <div>
                <a class="btn btn-danger m-2" href="http://localhost/SimoneauHugoPOO/index.php/moto">Annuler</a>
                <input type="submit" value="Modifier" class="btn btn-success m-2">
            </div>
        </form>
    </div>
</body>

</html>