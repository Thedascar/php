<?php

$notas = [
    10,
    8,
    9,
    7
];

/**
 * O sorte não faz a copia dos valores e sim altera pela referência
 * alterando o item original
 * neste caso e melhor fazer uma cópia do array.
 * 
 * Usamos sort() para ordenar a lista.
 * números do menor para maior e
 * string por ordem alfabética.
 */
$notasOrdenadas = $notas;
sort($notasOrdenadas);

echo "Desordenadas:";
var_dump($notas);

echo "Ordenadas:";
var_dump($notasOrdenadas);

/**
 * texto string
 */

 $texto = [
    'um',
    'dois',
    'tres',
    'quatro'
];

$textoOrdenado = $texto;
sort($textoOrdenado);

echo 'texto ordenado';
var_dump($textoOrdenado);

echo 'texto desordenado';
var_dump($texto);