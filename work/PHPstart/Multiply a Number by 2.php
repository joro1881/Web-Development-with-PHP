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
        If (isset($_GET['num'])){
            $number = intval($_GET['num'])*2;
        }
        ?>
            <form>
                N : <input type="text" name="num" value="<?= $number?>"/>
                <input type="submit"/>
            </form>

        </body>
</html>