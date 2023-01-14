<?php

require_once 'src/Carro.php';

$primeirocarro = new Carro('gol','volks','azul');

echo $primeirocarro->getCarro() . PHP_EOL;
echo $primeirocarro->getCor() . PHP_EOL;
echo $primeirocarro->getmarca() . PHP_EOL;
