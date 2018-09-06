<?php
/**
 * Created by PhpStorm.
 * User: George
 * Date: 8/30/2018
 * Time: 12:06 PM
 */ ?>

<?php

function total_sun($month,$year)
{
    $sundays=0;
    $total_days=cal_days_in_month(CAL_GREGORIAN, $month, $year);
    for($i=1;$i<=$total_days;$i++) {
        if (date('N', strtotime($year . '-' . $month . '-' . $i)) == 7)
        {
            echo date("jS F\, Y", strtotime($year . '-' . $month . '-' . $i))."<br>";
        $sundays++;
        }
}
echo "<br>".$sundays;
}
total_sun(9,2018);