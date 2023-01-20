<?php

 $dados = [
    'nome' => 'Lucas',
    'nota' => 10,
    'idade' => 27,
];
//list('nome' => $nome, 'nota' => $nota, 'idade' => $idade) = $dados2;

/**
 * Usamos a função extract() para transformar as chaves do array
 * em variáveis válidas.
 * não usar váriaveis da url e get ou files.
 */
extract($dados);
var_dump($nome,$nota,$idade);

/**
 * o compact() faz ao contrário pegar várias váriaveis e transforma
 * em um array, passamos o nome da $váriavel como string
 */
echo 'abaixo é o compact()' . PHP_EOL;
var_dump(compact('nome','nota','idade'));