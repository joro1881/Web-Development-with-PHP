<?php
/**
 * Created by PhpStorm.
 * User: George
 * Date: 8/21/2018
 * Time: 9:38 AM
 */ ?>
<?php

for ($r=0, $g=0, $b=0; $r < 256; $r+=16,$g+=8,$b+=4){
        $color="#".
            str_pad(dechex($r),2,'0').
            str_pad(dechex( $g),2,'0').
            str_pad(dechex($b),2,'0');
?>

<div style= background-color:<?= $color?> "><?= $color?>
</div>


<?php }
echo "<br><br>";
$color = ["one"=>"red", "two"=> "green"];
foreach ($color as $key=>$value){
    echo "k-> $key, v-> $value <br>";
}

?>
<?php
$colors = (object)[];
$colors->red = "#F00";
$colors->slateblue = "#6A5ACD";
$colors->orange = "#FFA500";

foreach ($colors as $key => $value) : ?>
    <p style="background-color:<?= $value ?>">
        <?= $key ?> -> <?= $value ?>
    </p>
<?php endforeach;

echo "<br>";
$cars = ['BMW', 'Audi', 'Mercedes', 'Ferrari'];
echo $cars[0]; // BMW

$cars[0] = 'Opel';
var_dump($cars);
?>

