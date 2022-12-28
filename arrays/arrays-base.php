<?php

/**
 * Em php a alocação de memoria e de outras linguagens.
 * em php se aloca usando hash maps e não alocando espaços consecutivos na memoria.
 * em arrays de php so podemos ter valores de string ou inteiro,
 * qualquer outro valor será convertido.
 */
$array = [
    1 => 'um',
    2 => 'dois',
    3 => 'tres'
];

$contador = 0;
foreach($array as $numeral => $nomeNumero){
    echo "$numeral em português é: $nomeNumero" . PHP_EOL;
    $contador++;
}
echo "Total: " . count($array) . PHP_EOL;

$array2 = [1,2,3];

$contador = count($array);
for ($i = 0; $i < $contador; $i++) { 
    echo $array2[$i] . PHP_EOL;
}
echo "O total é arrays: $contador". PHP_EOL;
