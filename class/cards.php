<?php 

class Card {

    protected string $number;
    protected string $date;
    protected int $CCV;

    public function getNumber()
    {
        return $this->number;
    }

    public function setNumber($number)
    {   
        if (strlen($number) == 19) {
            $this->number = $number;
            return $this;
        } 
        $this->number = "La tua carta non è valida!";
        return $this;

    }
    public function getDate()
    {
        return $this->date;
    }
    public function setExpiringDate($date)
    {
        $today = date('Y-m-d');
        $expire = date_create($date);
        if(date_format($expire, "Y-m-d") < $today) {
            $this->date = "La tua carta è scaduta!";
            return $this; 
        }
        $this->date = $date;
        return $this;
    }

    public function getCCV()
    {
        return $this->CCV;
    }

    public function setCCV($CCV)
    {   
        if (is_int($CCV) && strlen($CCV) == 3) {
            $this->CCV = $CCV;
            return $this;
        }
    }
}

?>