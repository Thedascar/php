<?php

$telefones = ['(42) 99999 - 9999','(42) 88888 - 8888','(42) 77777 - 7777'];

// a função implode serve para transformar os arrays em strings
// serve apra unir esses arrrays e retornar uam string
// VVV aqui se ultilizou prâmetro nomeados.
echo implode(array: $telefones, separator: ',') . PHP_EOL;