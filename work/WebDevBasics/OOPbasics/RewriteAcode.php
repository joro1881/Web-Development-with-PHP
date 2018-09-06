<?php
/**
 * Created by PhpStorm.
 * User: George
 * Date: 9/6/2018
 * Time: 1:33 PM
 */ ?>

<?php

class Math{

    protected $firstNumber;
    protected $secondNumber;
    protected $singleNumber;

    public function sumTwoNumbers(int $first, int $second)
    {
        $this->firstNumber = $first;
        $this->secondNumber = $second;
        return $this->singleNumber = $this->firstNumber + $this->secondNumber;
    }

    public function divideTwoNumbers(int $first, int $second)
    {
        $this->firstNumber = $first;
        $this->secondNumber = $second;
        return $this->singleNumber = $this->firstNumber / $this->secondNumber;
    }

    public function isItZero($justNumber){
        $this->singleNumber = $justNumber;
        if($justNumber == 0)
        {
            echo "Division by zero is not possible";
            exit;
        }
    }
    public function __toString()
    {
        // TODO: Implement __toString() method.
        return "Result : {$this->singleNumber}";
    }
}

$mat = new Math(2,3);
$mat->divideTwoNumbers(3,4);
echo $mat.'<br>';
$mat->sumTwoNumbers(15,15);
echo $mat.'<br>';
echo $mat->isItZero(0);


