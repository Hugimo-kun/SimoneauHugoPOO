<?php

namespace Src\Entity;

class Moto
{
    private int $id;
    private string $model;
    private string $brand;
    private string $type;
    private float $price;
    private string $image;

    public function __construct(int $id, string $model, string $brand, string $type, float $price, string $image)
    {
        $this->id = $id;
        $this->model = $model;
        $this->brand = $brand;
        $this->type = $type;
        $this->price = $price;
        $this->image = $image;
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of model
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set the value of model
     *
     * @return  self
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get the value of brand
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set the value of brand
     *
     * @return  self
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get the value of type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Get the value of price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    static public function fromArray(array $array): self
    {
        return new self(id: $array["id"], brand: $array["brand"], model: $array["model"], type: $array["type"], price: $array["price"], image: $array["image"]);
    }
}