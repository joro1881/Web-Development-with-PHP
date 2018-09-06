<?php
/**
 * Created by PhpStorm.
 * User: George
 * Date: 8/30/2018
 * Time: 11:21 AM
 */ ?>

<form>
    <input type="text" name="text">
    <input type="submit">
</form>

<?php

if(isset($_GET['text']))
{
    $words = (string)$_GET['text'];

    if(strlen($words)>20)
    {
        echo $words;
    }
    elseif(strlen($words)<20) {
        $stars = "";
        for($i=20-strlen($words);$i>0;$i--)
        { $stars.= "*";}

        echo $words.$stars;
    }

}

