<?php

goto a;
echo "Hello World". PHP_EOL;

a:
echo "Hello A" . PHP_EOL;

$counter = 1;
while (true) {
    echo "While loop $counter" . PHP_EOL;
    $counter++;
    if ($counter > 10) {
        goto end;
    };
};

end:
echo "au ah males" . PHP_EOL;