<?php 
require_once __DIR__ . "/products.php";

class Food extends Products {

    protected string $type;
    protected string $brand;
    protected int $weight;

    function __construct(array $foodDetails) {
        $this->setTitle($foodDetails["productName"]);
        $this->setPrice($foodDetails["productPrice"]);
        $this->setType($foodDetails["foodType"]);
        $this->setBrand($foodDetails["foodBrand"]);
        $this->setWeight($foodDetails["foodWeight"]);
        $this->setDesc($foodDetails["productDescription"]);

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

    public function getBrand()
    {
        return $this->brand;
    }

    public function setBrand($brand)
    {
        $this->brand = $brand;

        return $this;
    }

    public function getWeight()
    {
        return $this->weight;
    }
 
    public function setWeight($weight)
    {   
        if (is_int($weight)) {
            $this->weight = $weight;
    
            return $this;
        }
    }
}


?>