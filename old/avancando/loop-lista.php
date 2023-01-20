<?php

$idadeLista = [21,23,19,25,30,41,18,15,46,78,59];
 
/**
 * percorrendo a lista com for
 * count() se equivale a .lenght
 * count() conta dinâmicamente o tamanho do array.
 */
for ($i=0; $i < count($idadeLista); $i++) { 
    echo $idadeLista[$i] . PHP_EOL;
}