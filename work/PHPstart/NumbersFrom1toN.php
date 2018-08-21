<?php /**
 * Created by PhpStorm.
 * User: George
 * Date: 8/20/2018
 * Time: 7:10 PM
 */ ?>
<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Another PHP Task</title>
</head>

    <body>
    <?php
        if(isset($_GET['num']))
        {
            $number = intval($_GET['num']);
            $fact=1;
            for($i=1; $i<=$number; $i++)
            {
                $fact*=$i;
            }
            echo $fact;
        }
    ?>

        <form>
            N : <input type="text" name="num" "/>
            <input type="submit"/>
        </form>
    </body>
</html>
