<?php

$email = 'Lucas@hotmail.com';
$senha = 'áú';
// para ver o tamanho da string usamos strlen(), assim como usamos count() nos arrays.

// o retorno da função é um bytes, então palavras com acento utilizam..
// 2 bytes por letra. 
// retorna 4 vvvvv
echo strlen($senha) . PHP_EOL;

if(strlen($senha) < 8 ){
echo 'Senha incorreta'. PHP_EOL;
}

$posicaoDOArroba = strpos($email,'@',);

echo substr($email,0,$posicaoDOArroba).PHP_EOL;
echo substr($email,$posicaoDOArroba + 1).PHP_EOL;
