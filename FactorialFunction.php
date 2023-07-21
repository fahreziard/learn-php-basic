<?php

function factorialLoop(int $value):int {
    $total = 1;
    for($i = 1; $i <= $value; $i++){
        $total = $total *= $i;
    }
    return $total;
}

var_dump(factorialLoop(5));

function factorialRecursive(int $value): int {
    if($value == 1){
        return 1;
    } else {
        return $value * factorialLoop($value - 1);
    }
}

var_dump(factorialLoop(6));

function loop(int $value){
    if($value == 0){
        echo "Beres Loop" . PHP_EOL;
    } else {
        echo "loop ke-$value" . PHP_EOL;
        loop($value - 1);
    }
}

loop(10);
// maxnya around 2700000 kalo lebih error;