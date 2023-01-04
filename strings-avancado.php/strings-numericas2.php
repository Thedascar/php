<?php
// int
$teste = 123;
var_dump($teste);
// string
// mas podemos fazer o cast como inteiro.. fazendo cast....
//$teste2 = '123';
//var_dump((int) $teste2);

$teste2 = '123';
var_dump($teste2);

// função...

function exibeNumero(int|float $numero) : void
{
    echo 'Dentro da função' . PHP_EOL;
    var_dump($numero);
}
exibeNumero($teste);