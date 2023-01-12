<?php

require_once 'src/Conta.php';

$primeiraConta = new Conta('123.456.789-10','Lucas Ramon');
$segundaConta = new Conta('456.789.456-45','Aline Lima');
$segundaConta->depositar(1500);
$segundaConta->transferir(1000,$primeiraConta);
$primeiraConta->depositar(300);
$primeiraConta->sacar(200); // isso é ok
//$primeiraConta->saldo -=300; // isso não é ok

echo $primeiraConta->getSaldo() . PHP_EOL;
echo $primeiraConta->getCpfTitular() . PHP_EOL;
echo $primeiraConta->getNomeTitular() . PHP_EOL;