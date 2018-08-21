<?php /**
 * Created by PhpStorm.
 * User: George
 * Date: 8/20/2018
 * Time: 7:32 PM
 */ ?>

<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Another PHP Task</title>
</head>

<body>


<form>
    N : <input type="text" name="num" "/>
    <input type="submit"/>
</form>
<?php
if(isset($_GET['num']))
{
    $number = intval($_GET['num']);
    for($i=1; $i<=$number; $i++)
    {
        echo '<button>'.$i.'</button>'.'<br>';
    }
}
?>

</body>
</html>
