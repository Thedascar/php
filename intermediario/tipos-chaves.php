<?php

/**
 * Php so entende inteiro e texto com array associativos.
 */

$array = [
    1 => 'a',
   '1' => 'b',
   1.5 => 'c',
   true => 'd'
];

foreach ($array as $item){
    echo $item . PHP_EOL;
}
