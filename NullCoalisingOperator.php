<?php

// $data = [
//     'action' => 'anu'
// ];

// if (isset($data['action'])) {
//     $action = $data['action'];
// } else {
//     $action = "Nothing";
// }

// echo $action . PHP_EOL;

// #inilah null coalising gausah pake if else
$data = [
    "action" => "uwow"
];
$action = $data["action"] ?? "kosong";

echo $action . PHP_EOL;

?>