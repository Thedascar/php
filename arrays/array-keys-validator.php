<?php

$notas = [
    'Lucas' => null,
    'Aline' => 8,
    'Bob' => 9,
    'Bacon' => 7,
    'Zé nimguem' => 10 // Ex '10' mesmo sendo string o php consegue reconhecer como número.
];

ksort($notas);
var_dump($notas);

if (is_array($notas)){
    echo 'É um array_is_array :' . PHP_EOL; 
}
var_dump(array_is_list($notas));

/**
 * Aqui usamos a funcão array_key_exists, para fazer uma validação
 * que está key existe, e retorna um true.
 */
var_dump(array_key_exists('Lucas',$notas));
/**
 * Também temos o iseet() que verifica se um valor ou variável está
 * definida
 * verifica em um array se o indice existe e se ele não e nulo -- null
 */
echo 'Lucas fez a prova: ' . PHP_EOL;
var_dump((isset($notas['Lucas'])));

/**
 * Usamos in_array() para verificar se um valor da chave existe.
 * O php transforma as strings em inteiro '10' == 10.
 * caso precise que o php reconheça string como string,
 * então colocar um strict como true na função.
 */
echo 'Alguém tirou 10?' . PHP_EOL;
var_dump(in_array(10,$notas,true));

/**
 * Podemos faer uma pesquisa no array usando array_search(),
 * podemos achar a chave do array buscando pelo seu valor. atribuido.
 * se for inexistênte o php retorna o valor false a função.
 */
echo 'Quem tirou 10?' .PHP_EOL;
var_dump(array_search('10',$notas,true));
