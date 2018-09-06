<?php
/**
 * Created by PhpStorm.
 * User: George
 * Date: 8/30/2018
 * Time: 10:59 AM
 */ ?>


<form>
    <input type="number" name="number1"/>
    <input type="number" name="number2"/>
    <input type="submit">
</form>

<?php

If (isset($_GET['number1']) && isset($_GET['number2']))
{
    $num1 = intval($_GET['number1']);
    $num2 = intval($_GET['number2']);

    if ($num1 == $num2 || $num1 === $num2)
    {
        echo "Values must be different";
    }
    elseif($num1>0 && $num1<100 && $num2 < 100 && $num2 > 0)
    {
        if($num1<$num2)
        {
            for($num1;$num1<$num2;$num1++)
            {
                echo $num1."<br>";
            }
            echo $num2;
        }
        if($num2<$num1)
        {
            for($num2;$num2<$num1;$num2++)
            {
                echo $num2 . "<br>";
            }
            echo $num1;
        }
    }
    else
    {
        echo "Not correct values again";
    }
}
