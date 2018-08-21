<?php
/**
 * Created by PhpStorm.
 * User: George
 * Date: 8/20/2018
 * Time: 8:26 PM
 */ ?>

<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Another PHP Task</title>
    <style>
        div *{
            display: inline-block;
            margin: 5px;
            width: 20px;
            height: 20px;
        }
    </style>
</head>

<body>
<div>
    <?php
    $color=0;
    for($row=0;$row<=4;$row++){
        for($col=0; $col<=9;$col++){
            echo "<div style='background-color: rgb($color,$color,$color)'></div>";
            $color +=5;
        }
        $color+=1;
        echo"<br>";
    }
    ?>
</div>
</body>
</html>

