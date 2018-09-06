<?php include 'Vechile.php';
/**
 * Created by PhpStorm.
 * User: George
 * Date: 9/6/2018
 * Time: 6:00 PM
 */

class Car extends Vechile{

    protected $brand;
    protected $model;
    protected $year;

    public function __construct(int $numberDoors, string $color, string $brand, string $model, int $year)
    {
        parent::__construct($numberDoors, $color);
        $this->brand=$brand;
        $this->model=$model;
        $this->year=$year;
    }

    public function paintCar($paint_color){
        $this->setColor($paint_color);
    }

    //how to hide setDoors() ?
}

$anotherCar = new Car(4,'green','Hundai','SomaPrime', 2020);

$anotherCar->paintCar('bejova');
print_r($anotherCar);

