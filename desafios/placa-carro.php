<?php

$array = [
    'AJA-2456' =>['marca' => 'VW','modelo' => 'GOLF'],
    'MJA-7845' =>['marca' => 'FIAT','modelo' => 'PALIO'],
    'KOM-2589' =>['marca' => 'MITSUBISHI','modelo' => 'PAJERO'],
    'AYT-4978' =>['marca' => 'MITSUBISHI','modelo' => 'OUTLANDER']
];

/**
 * Neste caso percorremos o $array pelos índices criados.
 * 
 * o $array recebe os índices como $placa e armazena o conteúdo do $array como $carros.
 */
foreach ($array as $placa => $carros) {
    echo "Placa ". $placa . " Marca ".$carros['marca']." "."Modelo ".$carros['modelo'] . PHP_EOL;
} 
