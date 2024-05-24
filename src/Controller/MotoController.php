<?php

namespace Src\Controller;

use Src\Entity\Moto;
use Src\Manager\MotoManager;

class MotoController
{
    private MotoManager $motoManager;
    public function __construct()
    {
        $this->motoManager = new MotoManager();
    }
    // Route: /moto
    public function getAll()
    {
        $motoManager = new MotoManager();
        $motos = $motoManager->findAll();
        //Appel de template
        include (__DIR__ . "/../../Templates/moto/liste.php");
    }

    // Route: /moto/$id
    public function getById($id)
    {
        //echo "ROUTE: /moto/$id   (getById)";
        $moto = $this->motoManager->findById($id);

        if ($moto) {
            include (__DIR__ . "/../../Templates/moto/getById.php");
            return $moto;
        } else {
            echo "<p>Cette moto n'existe pas</p>";
            echo "<a href='http://localhost/SimoneauHugoPOO/index.php/moto'>Revenir à l'acceuil</a>";
        }
    }

    // Route: /moto/$type
    public function getByType($type)
    {
        //echo "ROUTE: /moto/$type   (getByType)";
        $title = $type;
        $motos = $this->motoManager->findByType($type);

        if ($motos) {
            include (__DIR__ . "/../../Templates/moto/getByType.php");
            return $motos;
        } else {
            echo "<p>Ce type de moto n'existe pas</p>";
            echo "<a href='http://localhost/SimoneauHugoPOO/index.php/moto'>Revenir à l'acceuil</a>";
        }
    }

    // Route: /moto/add/
    public function add()
    {
        //Verif SI form valider ( methode POST )
        //SI tous les champs sont fournies
        //add en BDD
        //redirection index
        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            $model = isset($_POST["model"]) ? $_POST["model"] : "";
            $brand = isset($_POST["brand"]) ? $_POST["brand"] : "";
            $type = isset($_POST["type"]) ? $_POST["type"] : "";
            $price = isset($_POST["price"]) ? $_POST["price"] : "";
            $image = isset($_POST["image"]) ? $_POST["image"] : "";
            if ($model != "" && $brand != "" && $type != "" && $price != "" && $image != "") {
                $newMoto = new Moto(0, $model, $brand, $type, $price, $image);
                $this->motoManager->add($newMoto);

                header("Location: http://localhost/SimoneauHugoPOO/index.php/moto");
            } else {
                echo ("Parametre(s) manquant(s)");
            }
        }

        //Afficher formulaire
        include (__DIR__ . "/../../Templates/moto/add.php");
        //echo "ROUTE: /moto/add   (add)";
    }

    // Route: /moto/edit/$id
    public function edit(int $id)
    {
        //Verif si form valider ( methode POST )
        // Tout les champs sont fournies
        //edit en BDD
        //redirection index

        // Malheureusement le edit ne marche pas j'ai pas eu le temps de regler le probleme avec le nombre de parametres
        $moto = $this->motoManager->findById($id);
        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            $id = isset($_POST["id"]) ? (int) $_POST["id"] : 0;
            $model = isset($_POST["model"]) ? $_POST["model"] : "";
            $brand = isset($_POST["brand"]) ? $_POST["brand"] : "";
            $type = isset($_POST["type"]) ? $_POST["type"] : "";
            $price = isset($_POST["price"]) ? $_POST["price"] : "";
            $image = isset($_POST["image"]) ? $_POST["image"] : "";
            if ($model != "" && $brand != "" && $type != "" && $price != "" && $image != "") {
                $moto = new Moto($id, $model, $brand, $type, $price, $image);
                $this->motoManager->edit($moto);

                header("Location: http://localhost/SimoneauHugoPOO/index.php/moto");
            } else {
                echo ("Parametre(s) manquant(s)");
            }
        } else {
            //echo ("Methode incorrecte");
        }
        include (__DIR__ . "/../../Templates/moto/edit.php");
        //echo "ROUTE: /moto/edit/$id   (edit)";
    }

    // Route: /pizza/delete/$id
    public function delete($id)
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $id = isset($_POST["id"]) ? $_POST["id"] : "";
            if ($id != "") {
                $this->motoManager->delete($id);
                header("Location: http://localhost/SimoneauHugoPOO/index.php/moto");
            } else {
                echo ("Cette moto n'existe pas");
            }
        } else {
            echo ("Methode incorrecte");
        }
        //echo "ROUTE: /moto/delete/$id   (delete)";
    }
}
