<?php

$idadeList = [21,23,18,25,30,41,18];

/**
 * função list -- usada para ser refêrenciada por outro array.
 * 
 */

list($idadeLucas,$idadeAline,$idadeBob) = $idadeList;
unset($idadeList[4]);


foreach ($idadeList as $idade) {
    echo $idade . PHP_EOL;
}