<?php
/**
 * Created by PhpStorm.
 * User: George
 * Date: 9/6/2018
 * Time: 5:26 PM
 */ ?>

<?php

class Vechile{

    private $numberDoors;
    private $color;

    public function __construct(int $doors, string $color)
    {
        $this->setDoors($doors);
        $this->setColor($color);
    }

    public function setColor(string $color){
        $this->color = $color;
    }

    public function setDoors(int $number){
        $this->numberDoors = $number;
    }

    public function getColor(){
        $this->color;
    }

    public function getDoors(){
        $this->numberDoors;
    }

    public function __get($name)
    {
        $this->{$name};
    }

    public function paintMe(){
        $this->setColor('blue');
    }

    public function __toString()
    {
        //$oneColor = $this->getColor();
        //$dooors = $this->getDoors();
        //if(isset($dooors))
        //{
            return "We have ".$this->numberDoors." doors.".'<br>'
                ."The color is ".$this->color;
        //}
        //elseif (isset($oneColor)){
           // return ;
        //}
        //else{
        //    return "Missing data, nothing to string about";
        //}
    }
}

$myVechile = new Vechile(3,'grey');
$myVechile->paintMe();
echo $myVechile->__toString().'<br>'.'<br>'.'<br>'.'<br>';