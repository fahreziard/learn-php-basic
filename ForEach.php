<?php

$names = ["Budi", "Johni", "Mike"];

for($i = 0;$i < count($names);$i++){
    echo "Hello $names[$i]" . PHP_EOL;
};

$names = ["Budi", "Johni", "Mike"];

foreach ($names as $index => $name) {
    echo "ini data ke $index : $name" . PHP_EOL;
};

$person = [
    "first_name" => "Muhammad",
    "middle_name" => "Fahrezu",
    "last_name" => "Ardana"
];

foreach ($person as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}