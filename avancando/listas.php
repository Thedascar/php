<?php

/**
 * Estruta de lista no php.
 */
$idadeLista = [21,23,19,25,30,41,18];
/**
 * Se não informar o índice o php coloca o item no último espaço vazio
 */
$idadeLista[0] = 11111;
$idadeLista[] = 222;
$idadeLista[count($idadeLista)] = 20;

foreach($idadeLista as $idade){
    echo $idade . PHP_EOL;
}
