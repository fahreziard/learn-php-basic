<?php

// digunakan untuk menghentikan pengulangan gitu aja sih;
$counter = 0;
while (true) {
    echo "itulah 4 trio : $counter" . PHP_EOL;
    $counter++;
    
    if($counter > 12) {
        break;
    }
};