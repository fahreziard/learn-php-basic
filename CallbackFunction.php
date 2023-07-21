<?php

function sayHello(string $name, callable $filter) {
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Budi", "strtoupper");
sayHello("Budi", "strtolower");
sayHello("John", function ($name):string {
    return strtoupper($name);
});
sayHello("Robin Hood", fn($name) => strtoupper($name)); 