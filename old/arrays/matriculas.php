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
 * Usamos o array_merge() para unir os arrays
 * não preserva a chave, o novo array atribui chaves novas.
 * 
 * se a chave for uam string a uma lista com mesma cheva sobre-escreve o valor
 * se a chave dor numerica ela e incrementada.
 */
$alunos2023 = array_merge($alunos2022,$novosAlunos);
var_dump($alunos2023);

/**
 * Podemos também unir com operador +
 * apenas funciona para arrays ordenados de 1,2,3,4.....
 * quando contatena com + ele ignora os valores das chaves
 * já existentes.
 */
$alunos2023B = $alunos2022 + $novosAlunos;
var_dump($alunos2023B);