<?php /**
 * Created by PhpStorm.
 * User: George
 * Date: 8/20/2018
 * Time: 12:33 AM
 */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> First Steps into PHP</title>
</head>
<body>
<?php
if(isset($_GET['num']) && isset($_GET['num2']) && isset($_GET['num3']))
{
    $number = intval($_GET['num']);
    $number2 = intval($_GET['num2']);
    $number3 = intval($_GET['num3']);
    switch (true)
    {
        case ($number<0):
            if(($number2 >= 0)&& ($number3 >= 0))
            {
                echo "Negative";
                break;
            }
            if(($number2 < 0) || ($number3 < 0))
            {
                echo "Positive";
                break;
            }
        case ($number2<0):
            if(($number >= 0)&& ($number3 >= 0))
            {
                echo "Negative";
                break;
            }
            if(($number3 < 0) || ($number < 0))
            {
                echo "Positive";
                break;
            }
        case ( $number3 < 0 ):
            if(($number >= 0)&& ($number2 >= 0))
            {
                echo "Negative";
                break;
            }
            if(($number3 < 0) || ($number < 0))
            {
                echo "Positive";
                break;
            }
        default:
            if(($number >=0) && ($number2 >= 0) && ($number3>=0))
            {
                echo "Positive";
                break;
            }
            else echo "Negative";
    }
}
?>
<form>
    N : <input type="text" name="num" "/>
    M : <input type="text" name="num2" "/>
    L : <input type="text" name="num3" "/>
    <input type="submit"/>
</form>

</body>
</html>