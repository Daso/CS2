<?php
Class Taxes{
    private $id;
    private $month;
    private $year;
    private $quantity;

    public function __Construct($_month, $_quantity){
        $this->id=0;
        $this->month=$_month;
        $this->year=$_year;
        $this->quantity=$_quantity;
    }

    public function getId(){
        return $this->id;
    }

    public function getMonth(){
        return $this->month;
    }

    public function getYear(){
        return $this->year;
    }

    public function getQuantity(){
        return $this->quantity;
    }

    
}
?>
