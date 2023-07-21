<?php

function foo() {
    echo "Ini adalah return func foo" . PHP_EOL;
}

function bar() {
    echo "BAR" . PHP_EOL;
}

$functionName = "foo";
$functionName();

$functionName = "bar";
$functionName();

//
function sayHello(string $name, $filter) {
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}

function sampleFunction(string $name): string {
    return "Sample $name";
}

sayHello("Joel", "sampleFunction");
sayHello("Budi", "strtoupper");
sayHello("Budi", "strtolower");
