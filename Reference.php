<?php

// ref variabel
$name = "Budi";
$otherName = &$name; //penambahan &;

$otherName = "Eko";
echo $name . PHP_EOL;

// ref parameter
function increament(int &$value) {
    $value++;
}

$counter = 1;
increament($counter);

echo $counter . PHP_EOL;

// ref return value
function &getValue() {
    static $value = 100;
    return $value;
}

$a = &getValue();
$a = 2020;

$b = &getValue();
echo $b . PHP_EOL;