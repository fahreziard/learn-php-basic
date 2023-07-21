<?php

// bedanya dengan for adalah tidak ada init dan post statement jadi harus declare manual  atau tidak se-line, akan terus jalan apabila kondisi true;

$num = 0;
while($num <= 10) {
    echo $num . PHP_EOL;
    $num++;
};

$num = 0;
while($num <= 10):
    echo $num . PHP_EOL;
    $num++;
endwhile;