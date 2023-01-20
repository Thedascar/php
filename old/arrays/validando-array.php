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
 * retorna um valor booleano.
 * array ordenado é 0,1,2,3......
 */
if (is_array($notas)){
    echo 'É um array-is_array :' . PHP_EOL; 
}
/**
 * temos uma resposta falsa já que temos as keys como string.
 */
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
 * Arrays_is_list faz uma verificação para ver se o arrays e uma lista sequêncial para poder fazer um for padrão.
 * 
 * neste casa temos um booleano true,
 * pois a ordem esta correta 0,1,2....
 * mesmo sendo chaves colocadas seguem a ordem
 */
 
var_dump(array_is_list($arrays));