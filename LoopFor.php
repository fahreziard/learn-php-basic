<?php

// for($i = 100; $i >= 10; --$i){
//     echo $i . PHP_EOL;
// };

// for( ; ; ){
//     echo "hayuk" . PHP_EOL;
// };

for ($counter = 0; $counter <= 10; $counter++ ) {
    echo "Gacor kang : " . $counter . PHP_EOL;
};

for ($counter = 10; $counter >= 0; $counter-- ) {
    echo "Gacor kang : " . $counter . PHP_EOL;
};

for ($counter = 0; $counter <= 10; $counter++ ):
    echo "Gacor kang : " . $counter . PHP_EOL;
endfor;