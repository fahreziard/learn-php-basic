<?php

$gundam = array(
    "Frame" => "Barbatos",
    "Pilot" => "Mikazuki",
    "Origin" => "Kasei/Mars",
    "Organitation" => [
        "CGS", "Tekkadan"
    ]
);
$gundam["Gender"] = "Male"; 
var_dump($gundam);
var_dump($gundam["Organitation"][1]);

$gundam2 = [
    "Frame" => "Aerial",
    "Pilot" => "Suletta",
    "Origin" => "Suisei/Mercury",
    "Address" => array(
        "City" => "Bandung",
        "Region" => "Indogs"
    )
];

var_dump($gundam2);
var_dump($gundam2["Pilot"]);


