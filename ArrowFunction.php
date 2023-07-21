<?php

$firstName = "Makoto";
$lastName = "Higurashi";

$sayHello = fn() => "Hello $firstName $lastName" . PHP_EOL;

echo $sayHello();