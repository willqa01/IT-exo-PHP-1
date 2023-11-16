<?php
$num1 = 5;
$num2 = 10;

$operation = "+";
calcul(10, 5, "+");


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
}
