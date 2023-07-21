<?php

function createName() {
    $name = "Budi"; // local scope
}

createName();
echo $name . PHP_EOL; 