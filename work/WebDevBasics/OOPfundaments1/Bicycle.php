<?php
/**
 * Created by PhpStorm.
 * User: George
 * Date: 9/6/2018
 * Time: 6:31 PM
 */

include "Vechile.php";

class Bycycle extends Vechile {
    protected $brand;
    protected $model;
    protected $year;
    private $ride = false;
    private $forSkirt;

     public function __construct(string $color, string $brand, string $model, int $year, bool $forSkirt)
     {
         $doors = 0;

         parent::__construct($doors, $color);

         $this->brand = $brand;
         $this->model = $model;
         $this->year = $year;
         $this->forSkirt = $forSkirt;
     }


     public function doesAnyRide(){
         if($this->ride === true)
         {
             echo "Someone rides the bike";
         }
         if($this->ride === false){
             echo "Bike is free for taking";
         }
         else echo "Serious issue, we don't have data for the bike";
     }

     public function Ride(){

         return $this->ride = true;
     }
     public function Stop(){
         return $this->ride = false;
     }

     public function setDoors(int $number)
     {
         parent::setDoors($number); // TODO: Change the autogenerated stub
     }
}