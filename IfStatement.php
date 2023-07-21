<?php

$name = "Joel";
$nilai = 68;
$absen = 65;

if ($nilai >= 80 && $absen >= 80) {
    echo "Selamat nilai anda A" . PHP_EOL;
} else if ($nilai >= 75 && $absen >= 75) {
    echo "Yahh nilai anda B" . PHP_EOL;
} else if ($nilai >= 70 && $absen >= 70) {
    echo "Belajar lagi, nilai anda C" . PHP_EOL;
} else {
    echo "Dongo bjir" . PHP_EOL;
};

// jarang dipake wlee
if ($nilai >= 80 && $absen >= 80) :
    echo "Selamat nilai anda A" . PHP_EOL;
elseif ($nilai >= 75 && $absen >= 75):
    echo "Yahh nilai anda B" . PHP_EOL;
elseif ($nilai >= 70 && $absen >= 70):
    echo "Belajar lagi, nilai anda C" . PHP_EOL;
else :
    echo "Dongo bjir" . PHP_EOL;
endif;