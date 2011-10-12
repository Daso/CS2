<?php
require_once 'Taxes.php';
Class OperationsTaxes {
    private $id;
    private $quantity;
    private $quantityYear;
    private $sql;
    private $acumulateQuantity;
    private $i = 0;

    public function CalculateTaxperMonth($year){
        $this->quantity = getQuantity();
        if ($this->quantity < 2500){
            $this->quantity = $this->quantity - $this->quantity*0.07;
        }else{
            $this->quantity = $this->quantity - $this->quantity*0.1;
        }
        $this->id = $this->id + 1;
        $this->sql = "INSERT INTO TAXES (quantity, date) VALUES" + quantity + "," + $year + "-" + id;
        return quantity;
    }

    public function CalculateAcumulateMonthTax($year){
        $id = 1;
        while(i<12){
        $this->acumulateQuantity = $this->sql = "SELECT QUANTITY FROM TAXES WHERE DATE = " + $year + "-" + $id;
        $this->quantityYear = $this->quantityYear + $this->acumulateQuantity;
        $this->i = $this->i + 1;
        $this->id = $this->id + 1;
        }
        return quantityYear;
    }

    public function CalculateTaxperYear(){
        $this->quantityYear = CalculateAcumulateMonthTax($year);
        if($this->quantityYear > 24000){
            $this->rest = 24000 - quantityYear;
            $this->quantityYear = $this->quantityYear - $this->rest*0.3; 
        }
        return quantityYear;
    }
}
?>
