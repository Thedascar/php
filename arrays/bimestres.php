<?php

$notasBimestres = [
    'Lucas' => 10,
    'Aline' => 8,
    'Bob' => 9,
    'Bacon' => 7,
    'Zé nimguem' => 5,
];


$notasBimestres2 = [
    'Aline' => 8,
    'Bob' => 9,
    'Bacon' => 5,
];

/**
 * Retorna um novo array com todos os elementos do 1 parametro
 * que não estejam nos proximos arrays.
 * no caso do array_diff() o resultado e baseado pelp valor.
 * para array_diff_key() retornamos as chaves.
 * array_diff_assoc() - associative compara a chave e valor.
 */

var_dump(array_diff_key($notasBimestres,$notasBimestres2));

/**
 * Podemos também pesquisar por valor e chave
 * 
 * Neste caso fazemos a diferençao por chave e depois atribuimos a um novo
 * arrays os nomes dos alunos.
 */

 $alunoFaltantes = array_diff_key($notasBimestres,$notasBimestres2);
 var_dump(array_keys($alunoFaltantes));
 /**
  * Podemos também pegar todos os valores e colocar em um novo array.
  */
var_dump(array_values( $alunoFaltantes));