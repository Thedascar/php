<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/CPF.php';



$lucas = new Titular(new CPF('123.456.789-10'),'Lucas Ramon');
$primeiraConta = new Conta($lucas);
$aline = new Titular(new CPF('456.789.456-45'),'Aline');
$segundaConta = new Conta($aline);
$dog = new Titular(new CPF('456.487.456-78'),'bob e bacon');
$outra = new Conta($dog);

$segundaConta->depositar(1500);
$segundaConta->transferir(1000,$primeiraConta);
$primeiraConta->depositar(300);
$primeiraConta->sacar(200); // isso é ok
//$primeiraConta->saldo -=300; // isso não é ok


echo $primeiraConta->getNomeTitular() . PHP_EOL;
echo $primeiraConta->getCpfTitular() . PHP_EOL;


echo $segundaConta->getNomeTitular() . PHP_EOL;
echo $segundaConta->getCpfTitular() . PHP_EOL;


echo $outra->getNomeTitular() . PHP_EOL;
echo $outra->getCpfTitular() . PHP_EOL;


