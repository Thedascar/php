<?php
/**
 * Tuplas em php
 */
 $dados = ['Lucas',10,27];
 //Tem esse método....
 //$nome = $dados[0];
 //$nota = $dados[1];
 //$idade = $dados[2];
 /**
  *Ou podemos usa a função list();
  *a função fica do lado esquerdo do operador de atribuição
  *criando novas variáveis
  */
list($nome,$nota,$idade) = $dados;
var_dump($nome,$nota,$idade);
/**
 * Caso o arrays ja tenha chaves também podemos atribuir as váriaveis
 * com list()
 */

 $dados2 = [
    'nome' => 'Lucas',
    'nota' => 10,
    'idade' => 27,
];
list('nome' => $nome, 'nota' => $nota, 'idade' => $idade) = $dados2;
var_dump($nome,$nota,$idade);
