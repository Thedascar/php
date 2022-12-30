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



$alunos2023 =[...$alunos2022,'Ramon',...$novosAlunos];
/**
 * Adicionando novos itens com array_push();
 * é passado por referência.
 */
array_push($alunos2023,'Jose','Alice','Jhonas');
/**
 * Podemos fazer direto da variavel,
 * mas adicona apenas um por vez.
 */
$alunos2023[] = 'Giosuan';
/**
 * Podemos adicinar um novo array no inicio da lista
 * com array_unshift()
 */
echo array_unshift($alunos2023,'Stephen','Laurence').PHP_EOL;
/**
 * Array_shift() remove o primeiro item da lista e reorganiza ela
 * retorna o valor retirado.
 */
echo array_shift($alunos2023).PHP_EOL;
/**
 * Temos o array pop que remove o último array, e retorna o elemento removido
 */
echo array_pop($alunos2023).PHP_EOL;
var_dump($alunos2023).PHP_EOL;

