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
 * Podemos também combinar arrays, escolhendo oque queremos colocar
 * como chave e também como valor.
 */

 $alunoFaltantes = array_diff($notasBimestres,$notasBimestres2);
 $nomesAluno = array_keys($alunoFaltantes);
 $notasAluno = array_values($alunoFaltantes);
 /**
  * Usamos o array_combine()
  * para executar corretamente é preciso que os dois arrays
  * tenham o mesmo tamanho.
  */
  var_dump(array_combine($notasAluno,$nomesAluno));
  // O array_flip() faz essa inversao de chave para valor e vice versa.
  var_dump(array_flip($alunoFaltantes));