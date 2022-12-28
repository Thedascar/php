<?php

$notas = [
    'Lucas' => 10,
    'Aline' => 8,
    'Bob' => 9,
    'Bacon' => 7,
    'nimguem' => 6
];

/**
 * rsorte() e a função inversa de sort()....
 * 
 * para manter as chaves do arrays com seus respectivos arrays utilizamos
 * 
 * asort() - (associative) crescente
 * arsort() -  decrescente
 * 
 */
asort($notas);
var_dump($notas);



/**
 * para fazer a ordenação pelos valores das keys
 * utilizamos
 * 
 * ksort() - (Key) crescente
 * krsort() - decrescente
 */
echo 'Ordenado pelas Keys'. PHP_EOL;
ksort($notas);
var_dump($notas);