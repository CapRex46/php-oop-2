<?php 
require_once __DIR__ . "/products.php";

class AnimalToys extends Products {
    
    protected string $type;
    protected string $material;
    protected string $animal;

    function __construct(array $toysDetails) {
        $this->setTitle($toysDetails["productName"]);
        $this->setPrice($toysDetails["productPrice"]);
        $this->setDesc($toysDetails["productDescription"]);
        $this->setType($toysDetails["gameType"]);
        $this->setMaterial($toysDetails["gameMaterial"]);
    }


    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    public function getMaterial()
    {
        return $this->material;
    }

    public function setMaterial($material)
    {
        $this->material = $material;

        return $this;
    }

    public function getAnimal()
    {
        return $this->animal;
    }

    public function setAnimal($animal)
    {
        $this->animal = $animal;

        return $this;
    }
}

?>