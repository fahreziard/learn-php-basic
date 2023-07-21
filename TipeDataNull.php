<?php

$name = "Aidan";
$name = null;

$age = null;

echo "Name : ";
echo $name;
echo "\n";

echo "Age : ";
echo $age;
echo "\n";

echo "Is Name Null? : ";
var_dump(is_null($name));
echo "\n";

$contoh = "Budi";
unset($contoh);

$contoh = "Buds";
$contoh = null;

var_dump(isset($contoh));