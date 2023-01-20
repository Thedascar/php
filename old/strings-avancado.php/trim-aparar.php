<?php

$csv = ',Lucas Ramon,24,..';

// Utilizamos o trim() e selecionamos oque queremos
// remover da string...

echo $csv . PHP_EOL;
echo trim($csv,',.') . PHP_EOL;
//Aparar somente o começo da string ltrim()
echo ltrim($csv,',.') . PHP_EOL;
//Aparar somente o final da string ltrim()
echo rtrim($csv,',.') . PHP_EOL;
