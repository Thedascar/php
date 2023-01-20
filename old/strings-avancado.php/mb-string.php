<?php
// caracteres com acento utilizam 2 bytes...
$string = 'Testes de integração com PHP';

// para que possamos utilizar o uppercase ou lowercase em palavras com acento
// devemos utilizar e habiliatar a função mb-- mb_string..
echo mb_strlen($string) . PHP_EOL;
echo mb_strtoupper($string). PHP_EOL;
echo mb_strtolower($string). PHP_EOL;
