<?php
/**
 * Created by PhpStorm.
 * User: George
 * Date: 9/6/2018
 * Time: 1:51 PM
 */ ?>

<?php

$mouse = new stdClass();
$mouse->name = 'Human';
$mouse->car = 'bri4ka';
$mouse->day = 'dnes';
$mouse->woman = 'nqma si';
$mouse->like = 'haresa';
$mouse->crap = 'hungry';
$mouse->miracle = 'real miracle';
$mouse->codeSkills = 'amazing skills';
$mouse->game = 'over';
$mouse->walk = 'swing walk';

echo json_encode($mouse);
echo '<br><br><br><br>';

foreach ($mouse as $value){
    echo $value.'<br>';
}

