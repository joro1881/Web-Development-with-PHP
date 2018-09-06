<?php
/**
 * Created by PhpStorm.
 * User: George
 * Date: 8/30/2018
 * Time: 2:50 PM
 */ ?>

<?php

$greetings = ['UK' => 'Good morning', 'France' => 'Bonjour', 'Germany' => 'Guten Tag', 'Bulgaria' => 'Ko staa'];

foreach ($greetings as $key => $value) {
    echo "In $key people say \"$value\".";
    echo "<br>";
}

$arr = ['Sofia','20', 'Varna','10', 'Sofia','5'];
$sums = [];
for ($i = 0; $i < count($arr); $i += 2) {
    list($town, $income) = [$arr[$i], $arr[$i+1]];
    if ( ! isset($sums[$town]))
        $sums[$town] = $income;
    else
        $sums[$town] += $income;
}
print_r($sums);

function strIsEqual($str1, $str2, $ignoreCase = true) {
    if ($ignoreCase) {
        $result = strtolower($str1) == strtolower($str2);
    } else {
        $result = $str1 == $str2;
    }
    return $result;
}

echo "<br>". strIsEqual("nakov", "NaKOv", true); // 1 (true)
echo "<br>". strIsEqual("nakov", "NAKOV"); // 1 (true)
echo "<br>". strIsEqual("nakov", "Nakov", false); // "" (false)


function changeValue(&$arg) {
    $arg += 100;
}
$num = 2;
echo $num . "\n"; // 2
changeValue($num);
echo $num; // 102
?>
<?php
//declare(strict_types = 1); // Strict mode
function example(int $arg): int {
    // The returned result should be int
    return $arg + 1;
}
$array = array("Team Building, Vitosha", "Nakov", "studying programming", "SoftUni");

usort($array, function($a, $b) {
    return strlen($a) - strlen($b);
});

print_r($array);

function isPalindrome($str) {
    for ($i = 0; $i < strlen($str) / 2; $i++)
        if ($str[$i] != $str[strlen($str) - $i - 1])
            return false;
    return true;
}

echo isPalindrome('abbba');
