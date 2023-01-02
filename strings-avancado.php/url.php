<?php

$url = 'https://alura.com.br';


// Usa o str_starts_with() para verificar o ínicio da string...
$aStringComecaCom = str_starts_with($url,'https');
if($aStringComecaCom){
    echo "É uma url segura".PHP_EOL;
} else{
    echo "Não é uma url segura".PHP_EOL;
}

echo PHP_EOL;

// Usa o str_ends_with() para verificar se a string termina com ....
$aStringTerminaCom = str_ends_with($url,'br');
if($aStringTerminaCom){
    echo "É um domomínio do brasil".PHP_EOL;
} else{
    echo "Não é um domínio do brasil".PHP_EOL;
}
