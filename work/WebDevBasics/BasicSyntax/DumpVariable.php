<?php
/**
 * Created by PhpStorm.
 * User: George
 * Date: 8/30/2018
 * Time: 10:46 AM
 */ ?>

<?php

$string1 = "hello";
$numberINT = 15;
$numFloat = 1.234;
$arr1 = array(1,2,3);
$simpleObject = (object)[2,34];

if (is_string($string1))
{
    echo "string\r\n";
}

If (is_int($numberINT))
{
    echo "int($numberINT)\r\n";
}

if (is_float($numFloat))
{
    echo "float($numFloat)\r\n";
}

if(is_array($arr1))
{
    echo "array\r\n";
}

if (is_object($simpleObject))
{
    echo "object";
}
