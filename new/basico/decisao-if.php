<?php

$idade = 16;
$numeroDepessoas = 1;

echo 'Você só pode entrar se tiver a partir de 18 anos ou ' . PHP_EOL;
echo 'a partir de 16 anos acompanhado' . PHP_EOL;
echo PHP_EOL;

if($idade >= 18){
    echo "Você tem $idade anos" . PHP_EOL;
    echo "Pode entrar " . PHP_EOL;
}elseif($idade >= 16 && $numeroDepessoas > 0){ 
    echo "Você tem $idade anos e está acompanhado" . PHP_EOL;
    echo "Pode entrar " . PHP_EOL;
}else {
    echo "Você só pode entrar se tiver mais do que 18 anos . " . PHP_EOL;
}

echo PHP_EOL;

echo 'Adeus'. PHP_EOL;