<?php 

require_once __DIR__ . "/cards.php";

class User extends Card {

    protected string $name;
    protected string $surname;
    protected string $email;
    protected bool $registered;
    protected bool $discount;

    function __construct(array $userDetails) {
        $this->setName($userDetails["userName"]);
        $this->setSurname($userDetails["userSurname"]);
        $this->setEmail($userDetails["userEmail"]);
        $this->setRegistered($userDetails["userRegistered"]);
        $this->setDiscount($userDetails["userRegistered"]);
        $this->setNumber($userDetails["userCardNumber"]);
        $this->setExpiringDate($userDetails["userCardExpire"]);
        $this->setCCV($userDetails["userCardCVV"]);

    }
    public function getRegistered()
    {
        return $this->registered;
    }
    public function setRegistered($registered)
    {
        $this->registered = $registered;
        return $this;
    }

    public function getDiscount()
    {   
        return $this->discount;
    }

    public function setDiscount($registered)
    {
        if($registered) {
            $this->discount = true;
            return $this;
        } 

        $this->discount = false;
        return $this;

    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function setSurname($surname)
    {
        $this->surname = $surname;
        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }
}

?>