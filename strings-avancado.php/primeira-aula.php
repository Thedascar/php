<?php
// Procurando uma string dentro da outra..
$nome = 'Lucas Ramon Campos Assuncão';
// Verificando se uam string está dentro de outra...
// com a função str_contains(); <--- Retona um booleano
$ehDaMInhaFamilia = str_contains($nome,'Ramon');
if($ehDaMInhaFamilia){
    echo "$nome é da minha família".PHP_EOL;
} else{
    echo "$nome não é da minha família".PHP_EOL;
}
