<?php 

$values = array(1, 2, 3, 4, 5, 5.5);
var_dump($values);

$names = ["Budi", "Fulan", "Joel"];
$names[0] = "Budiono";
$names[] = "Aidan";
var_dump($names);
var_dump($names[1]);

unset($names[2]);
var_dump($names);
var_dump(count($names));


