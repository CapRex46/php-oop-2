<?php 

class Products {

    protected bool $available;
    protected float $price;
    protected string $title;
    protected string $desc;

 
    public function getAvailable()
    {
        return $this->available;
    }


    public function setAvailable($available)
    {
        $this->available = $available;
        return $this;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    public function getDesc()
    {
        return $this->desc;
    }

    public function setDesc($desc)
    {
        $this->description = $desc;
        return $this;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }
}

?>