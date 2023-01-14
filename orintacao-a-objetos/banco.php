<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';

$primeiraConta = new Conta(new Titular('123.456.789-10','Lucas Ramon'));
$segundaConta = new Conta(new Titular('456.789.456-45','Aline'));
$outra = new Conta(new Titular('456.487.456-78','bob e bacon'));

$segundaConta->depositar(1500);
$segundaConta->transferir(1000,$primeiraConta);
$primeiraConta->depositar(300);
$primeiraConta->sacar(200); // isso é ok
//$primeiraConta->saldo -=300; // isso não é ok


echo $primeiraConta->getNomeTitular() . PHP_EOL;
echo $primeiraConta->getCpfTitular() . PHP_EOL;
var_dump($primeiraConta);

