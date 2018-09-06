<?php
/**
 * Created by PhpStorm.
 * User: George
 * Date: 9/6/2018
 * Time: 12:42 PM
 */ ?>

<?php
    include 'Car.php';
    class Engine extends Car {

        protected $engine;
        protected $numberSeats;
        protected $horsepower;

        public function __construct(string $brand, $model)
        {
            parent::__construct($brand, $model);
        }

        function setCar()
        {
            $this->brand = "Suzuki";
            $this->model = "Ciaz";
            $this->year = 2016;
            $this->engine = "1600 HD";
            $this->horsepower = "90 horses";
            $this->numberSeats = "5";
        }

        public function myNewCar()
        {
            echo '<br>';
            echo "My new car is {$this->brand} {$this->model} constructed in {$this->year}".'<br>';
            echo "It also has engine with {$this->horsepower} and {$this->numberSeats}";
        }
    }

    $newCar = new Engine('pegeout', 2000);
    $newCar->setCar();
    $newCar->myNewCar();
    ?>
