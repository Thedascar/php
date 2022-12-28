<?php

/**
 * Array multidimensional
 * array dentro de array
 */
$notas = [
    [
        'aluno' => 'Lucas',
        'nota' => 10,
    ],
    [
        'aluno' => 'Aline',
        'nota' => 6,
    ],
    [
        'aluno' => 'bacon',
        'nota' => 9,
    ],
];

/**
 * Função de ordenar Notas.
 * inteiro negativo (< 0) se o priemiro elemento precisar vir primeiro.
 * vai retornar (0) zero se nao importar a ordem.
 * e inteiro posito (> 0) se o primeiro elemento precisar vir depos.
 */

function ordenaNotas(array $nota1, array $nota2): int
{
    /**
     * Operador de espaço nave
     * faz a verificação e ja atribui os valores de -1 0 e 1;
     * 
     * 
     */
    return $nota2['nota'] <=> $nota1['nota'];
      
}
/**
 * Usamos a função usort com parâmetro de função para dizer
 * como queremos ordenar esta lista em php.
 * passamos o nome da função como string.
 */
usort($notas,'ordenaNotas');
var_dump($notas);

