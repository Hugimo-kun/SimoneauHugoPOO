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
    <div class="container">

        <h1 class="text-center">Ajout d'une nouvelle moto</h1>
        <form class="d-flex flex-column align-items-center" method="POST" action="">
            <label for="model">Le modele :</label>
            <input type="text" id="model" name="model" placeholder="X000..." required>
            <label for="brand">La marque :</label>
            <input type="text" id="brand" name="brand" placeholder="Yamaha..." required>
            <label for="type">Le type :</label>
            <select name="type" id="type-select">
                <option value="">Selectionnez le type</option>
                <option value="Enduro">Enduro</option>
                <option value="Custom">Custom</option>
                <option value="Sportive">Sportive</option>
                <option value="Roadster">Roadster</option>
            </select>
            <label for="image">L'image (lien) :</label>
            <input type="text" name="image" id="image" placeholder="Url de l'image..." required>
            <label for="price">Le prix :</label>
            <input type="text" name="price" id="price" placeholder="50€..." required>
            <div>
                <a class="btn btn-danger m-2" href="http://localhost/SimoneauHugoPOO/index.php/moto">Annuler</a>
                <input type="submit" value="Ajouter" class="btn btn-success m-2">
            </div>
        </form>

    </div>
</body>

</html>