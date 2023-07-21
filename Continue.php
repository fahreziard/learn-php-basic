<?php
// bisa dibilang continue ini kaya skip gitu la, jadi jika if(true) maka akan diabaikan :(

for($ganjil = 0; $ganjil <= 100; $ganjil++) {
    if ($ganjil % 2 == 0) {
        continue;
    }
    echo "Angka Ganjil => ". $ganjil . PHP_EOL;
};

for($genap = 100; $genap >= 0; $genap--) {
    if ($genap % 2 == 1) {
        continue;
    }
    echo "Angka Genap => ". $genap . PHP_EOL;
}
