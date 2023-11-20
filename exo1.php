<?php
$num12 = 5;
$num22 = 10;

$operationn = "+";
$result = 0;


// $result = calcul(5, 10, "+") + 15;

calcul(5, 10, "+")[0];

foreach (calcul(5, 10, "+") as $key => $value) {
    echo $value;
}

calcul($result, 60, "+");


echo $result;












function calcul($num1, $num2, $operation)
{

    $result = 0;

    $testnum = "10";



    if ($operation == "+") {
        $result = $num1 + $num2;
    }
    if ($operation == "-") {
        $result = $num1 - $num2;
    }
    if ($operation == "/") {
        $result = $num1 / $num2;
    }
    if ($operation == "*") {
        $result = $num1 * $num2;
    }
    return [10, 50, 600, 5, 3];
}
