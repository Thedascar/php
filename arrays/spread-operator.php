<?php

$alunos2022 = [
    'Lucas',
    'Aline',
    'Bob',
    'Bacon',
    'Zé nimguem',
];

$novosAlunos =[
     'Patricia',
     'Nico',
     'Kilderson',
     'Daiane',
     'Quinto nome',
     'Patricia',
     'Nico',
     'Kilderson',
     'Daiane',
];


/**
 * Aqui utilizamos array unpacking
 * usamos ... para desempacotar o array em um array novo
 */

$alunos2023 =[...$alunos2022,'Ramon',...$novosAlunos];
var_dump($alunos2023);


/**
 * Spread operator passa cada item do array 
 * para cada parâmetro da função.
 * neste caso com spread o
 * 3 vai para $a 
 * 1 vao para $b
 * 5 vai para $c
 */

funcao(...[3,1,5]);
function funcao(int $a,int $b,int $c)
{
    $saldo =  $a + $b + $c;
    echo $saldo;

}
