<?php

function sayHi($name, $lastName) {
    echo "Hi $name $lastName " . PHP_EOL;
}

sayHi("Joel", "Satoru");
sayHi("Johny", "Sigh");

// default  argument value 
function sayHello($name = "Anonymous") {
    echo "Hello $name" . PHP_EOL;
}

sayHello();

// // kesalahan saat default argumen value :
// function greeting($firstName = "Budi", $lastName) {
//     echo "Hello $name $lastName" . PHP_EOL;
// }

// greeting("Gaming");
// // ini Value "Gaming" tidak bisa langsung menjadi parameter kedua jadi ini akan dianggap parameter pertama;

function sum(int $first, int $last) {
    $total = $first + $last;
    echo "$first + $last = $total" . PHP_EOL;
}

sum(1,3);
sum(5,"5");
sum("2","4");
sum(true,false);
// sum([],[]); // error ;p

// Variabel-length Argument list;
function sumAll(...$values) {
    $total = 0;
    foreach ($values as $value) {
        $total += $value;
    }
    echo "Total " . implode(" + ", $values) . " = $total" . PHP_EOL;
}

$values = [1,2,3,4,5];
sumAll(...$values);