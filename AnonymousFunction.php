<?php

$sayHello = function (string $name) {
    echo "Hello $name" . PHP_EOL;
};

$sayHello("Budi");
$sayHello("Steve");

// 

function sayGoodBye(string $name, $filter) {
    $finalName = $filter($name);
    echo "Good bye $finalName" . PHP_EOL;
}
sayGoodBye("Joel", function ($name){
    return strtoupper($name);
});

$filterFunc = function (string $name):string {
    return strtoupper($name);
};

sayGoodBye("Joel", $filterFunc);

$firstName = "Setsuna";
$lastName = "Seiei";

$sayHello = function () use ($firstName, $lastName) {
    echo "Hello $firstName $lastName" . PHP_EOL;
};

$sayHello();