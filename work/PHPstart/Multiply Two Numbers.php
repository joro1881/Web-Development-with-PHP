<?php/**
 * Created by PhpStorm.
 * User: George
 * Date: 8/19/2018
 * Time: 10:53 PM
 */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> First Steps into PHP</title>
</head>
<body>
<?php
If (isset($_GET['num']) && isset($_GET['num2'])){
    $number = intval($_GET['num']);
    $number2 = intval($_GET['num2']);
    $result = $number*$number2;
} ?>
<form>
    N : <input type="text" name="num" "/>
    M : <input type="text" name="num2" "/>
    <input type="submit"/>
    R : <input type="text" value="<?=$result?>"/>
</form>

</body>
</html>