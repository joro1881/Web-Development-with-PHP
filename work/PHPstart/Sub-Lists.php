<?php
/**
 * Created by PhpStorm.
 * User: George
 * Date: 8/20/2018
 * Time: 7:38 PM
 */
?>
<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Another PHP Task</title>
</head>

<body>
<form>
    N : <input type="text" name="num" "/>
    NM : <input type="text" name="num2" "/>
    <input type="submit"/>
</form>
<?php
if(isset($_GET['num']) && $_GET['num2'])
{
    $number = intval($_GET['num']);
    $number2 = intval($_GET['num2']);
    for($i=1; $i<=$number; $i++)
    {
        echo "<li>List $i\r\n<ul>";
        for($sec=1; $sec<=$number2; $sec++)
        {
            echo "<li>Element $i.$sec</li>";
        }
        echo "</ul></li>";
    }
}
?>

</body>
</html>
