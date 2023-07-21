<?php

function increament() {
    static $counter = 1; // static scope
    echo "Counter = $counter ". PHP_EOL;
    $counter++;
}

increament();
increament();
increament();
increament();
increament();
increament();