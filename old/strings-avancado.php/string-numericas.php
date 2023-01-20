<?php

//Temos que tomar cuidado pois o php aceita alguams condições como string válida.

$anoNascimento = '1995';

$idade = 2023 - $anoNascimento;

echo $idade . PHP_EOL;
// Devemos prestar atençao no tipos de conversão em php antes da versão 8 ele interpretava a string não númerica como 0, mas agora na versão 8 ele retorna uam comparação como string '0'...
if($anoNascimento == 1995){
    echo 'SIM' . PHP_EOL;
} else {
    echo 'NÃO' . PHP_EOL;
}

