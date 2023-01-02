<?php

$email = 'Lucas@hotmail.com';
// Usamos strpor() string-position para achar a posição do @.
$posicaoDOArroba = strpos($email,'@',); // buscar a posição do @ dentro da string.


// Usamos a função substr() para extrair um pedaço da string....
// substring é o nome da função;
// passamos a variável ínico da string e ate quando ela vai...
echo substr($email,0,18).PHP_EOL;
// Se omitir-mos o último parâmetro , a string ira continuar do parâmetro digitado..
echo substr($email,18).PHP_EOL;

echo PHP_EOL;

// Aqui usaremos o método antigo...
echo substr($email,0,$posicaoDOArroba).PHP_EOL;
echo substr($email,$posicaoDOArroba + 1).PHP_EOL;
