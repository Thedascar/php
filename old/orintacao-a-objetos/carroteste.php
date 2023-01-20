<?php

require_once 'src/Carro.php';
require_once 'src/Placa.php';


$primeirocarro = new Carro('Gol','Volks','Azul',new Placa('azx-147'));

echo $primeirocarro->getModelo() . PHP_EOL;
echo $primeirocarro->getCor() . PHP_EOL;
echo $primeirocarro->getMarca() . PHP_EOL;
echo $primeirocarro->getPlaca() . PHP_EOL;
