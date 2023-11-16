<?php

$_POST[""];
$_GET[""];

$num1 = 0;
$num2 = 10;

$operation = "dzqgjdfzj";
$result = 0;

$testnum = "10";


if ($num2 === $testnum) {
    $result = "OK";
}

$testBool = (($operation == "+" && $num1 > 10) || ($num2 > 5 && $num2 < 20));

if (($operation == "+" && $num1 > 10) || $num2 < 20) {
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
echo $result;
