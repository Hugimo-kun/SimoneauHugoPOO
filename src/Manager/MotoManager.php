<?php

namespace Src\Manager;

use Src\Entity\Moto;
use Exception;



class MotoManager extends DatabaseManager
{
    public function findAll()
    {
        $query = $this->getConnection()->prepare("SELECT * FROM moto");
        $query->execute([]);

        $results = $query->fetchAll();
        $motos = [];
        foreach ($results as $result) {
            $motos[] = Moto::fromArray($result);
        }
        return $motos;
    }

    public function findById(int $id): Moto|false
    {
        $query = $this->getConnection()->prepare("SELECT * FROM moto WHERE id = :id");
        $query->execute([":id" => $id]);

        $res = $query->fetch();

        if ($res === false) {
            return $res;
        }

        return Moto::fromArray($res);
    }

    public function add(Moto $moto)
    {
        try {
            $response = $this->getConnection()->prepare("INSERT INTO moto (brand, model, type, price, image) VALUES (:brand, :model, :type, :price, :image)");

            $response->execute(
                [
                    ':brand' => $moto->getBrand(),
                    ':model' => $moto->getModel(),
                    ':type' => $moto->getType(),
                    ':price' => $moto->getPrice(),
                    ':image' => $moto->getImage()
                ]
            );
        } catch (Exception $e) {
            echo ("Erreur lors de l'ajout en BDD");
            exit();
        }
    }

    public function edit(Moto $moto)
    {
        try {
            $response = $this->getConnection()
                ->prepare("UPDATE moto SET brand = :brand, model = :model, type = :type, price = :price, image = :image WHERE id = :id");

            $response->execute(
                [
                    ':id' => $moto->getId(),
                    ':brand' => $moto->getBrand(),
                    ':type' => $moto->getType(),
                    ':price' => $moto->getPrice(),
                    ':image' => $moto->getImage()
                ]
            );
        } catch (Exception $e) {
            echo ($e->getMessage());
            exit();
        }
    }

    public function delete(int $id)
    {
        $query = $this->getConnection()->prepare("DELETE FROM moto WHERE id = :id");

        $query->execute([
            ':id' => $id
        ]);
    }
}
