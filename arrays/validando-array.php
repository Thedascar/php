<?php

$notas = [
    'Lucas' => 10,
    'Aline' => 8,
    'Bob' => 9,
    'Bacon' => 7,
    'nimguem' => 6
];

ksort($notas);
var_dump($notas);

/**
 * Função is_array nos ajudara validar um array
 * mostrando se a lista é um array ordenado ou não.
 */
if (is_array($notas)){
    echo 'É um array';   

}

var_dump(array_is_list($notas));



$arrays = [
   0 => 'um',
   1 => 'dois',
   2 => 'tres'    
];

foreach ($arrays as $key => $nomeNumero) {
    echo "$key em português é: $nomeNumero" . PHP_EOL;
}

echo "Total: " . count($arrays). PHP_EOL;

/**
 * Arrays_is_list faz uma verificação para ver se o arrays e uma lista sequencial para poder fazer um for padrão.
 */
 
var_dump(array_is_list($arrays));