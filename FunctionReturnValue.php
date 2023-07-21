<?php

function sum(int $first, int $second): int {
    $total = $first + $second;
    return $total;
}

$result = sum(10,20);
var_dump($result);

$result = sum(100,50);
var_dump($result);

// 
function getFinalValue(int $value): string {
    if ($value >= 90) {
        return "A";
    } else if ($value >= 85) {
        return "B";
    } else if ($value >= 75) {
        return "C";
    } else if ($value >= 70) {
        return "D";
    } else {
        return "E";
    }
}

$score = getFinalValue(90);
var_dump($score);

$score = getFinalValue(72);
var_dump($score);
