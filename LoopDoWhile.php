<?php

// do while ini menjalankan statementnya minimal sekali walau kondisinya not true;
$num = 100;
do{
    echo"Ini looping ke-$num" . PHP_EOL;
    $num--;
} while ($num <= 1);