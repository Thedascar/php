<?php

$texto = 'Texto com qualquer coisa poxa e caramba';
// Utilizamos str_replace() para substituir alguns dados...
// para utilizarmos com mais palavras transformamos em [] um array...
echo str_replace(
    ['poxa','caramba'],
    ['p','c'],
    $texto
) . PHP_EOL;

// traduz de um caractere para outro...
// essa opção subtitui por letras e não palavras...
echo strtr($texto,'poxa','***') . PHP_EOL;
// variação
echo strtr($texto,['poxa' => 'p','caramba' => 'c']) . PHP_EOL;
