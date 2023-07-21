<?php
// ini operator buat array map sahaja kayaknya
// Union
$first = [
    "first_name" => "Joel"
];
$last = [
    "last_name" => "Mio"
];
$full = $first + $last;
 
var_dump($full);

$a = [
    "last_name" => "Mio",
    "first_name" => "Joel"
];
$b = [
    "first_name" => "Joel",
    "last_name" => "Mio"
];
var_dump($a == $b);
var_dump($a === $b);

 
// Compare
