<?php

$a = 10;
$b = 10;
$c = 5;

$result = $a + $b + $c;

var_dump($result);

$resultNegative = -$result;
var_dump($resultNegative);

$resultPositive = +$result;
var_dump($resultPositive);

$resultMultiply = $a * $c;
var_dump($resultMultiply);

$resultDevided = $a / $c;
var_dump($resultDevided);

$hasil = $resultDevided * $resultMultiply;
var_dump($hasil);

$resultModulus = 50 % 10;
var_dump($resultModulus);



