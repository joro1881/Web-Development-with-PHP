<?php
/**
 * Created by PhpStorm.
 * User: George
 * Date: 9/6/2018
 * Time: 12:16 PM
 */ ?>

<?php

class Car
{
    protected $brand;
    protected $model;
    protected $year;

    public function __construct(string $brand, $model){

        $this->brand = $brand;
        $this->model = $model;
        }

    public function currentYear(int $year){
        if($year < 1980)
        {
            echo "Invalid model. Please check manual";
        }
        elseif($year > 1981) {
            $this->year = $year;
            return $this->year;
        }
    }

    public function printCars(){
        if($this->year < 1980)
        {

        }
        else {

            echo "This car is {$this->model} {$this->brand} build in {$this->year}";
        }
    }
}

$myCar = new Car("Pegeout", 307);

$myCar->currentYear(2002);
$myCar->printCars();
?>

