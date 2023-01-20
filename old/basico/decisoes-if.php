<?php

$idade = 17;
$numeroDePessoas = 1;

echo "Você só pode entrar se tiver mais do que 18 anos ou a partir de 16 anos acompanhado" . PHP_EOL;

if($idade >= 18){
    echo "Você tem $idade anos. Pode entrar sozinho " . PHP_EOL;
}else if($idade >= 16 && $numeroDePessoas > 1){
    echo "Você tem $idade anos, e está acompanhado(a), Pode entrar.";
}else{
    echo "Você tem $idade anos , e não pode entrar.";
}

echo PHP_EOL;
echo "Adeus";