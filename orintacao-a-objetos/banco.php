<?php

require_once 'src/Conta.php';

$primeiraConta = new COnta();
$primeiraConta->depositar(300);
$primeiraConta->sacar(200); // isso é pk
//$primeiraConta->saldo -=300; // isso não é ok
$primeiraConta->defineCpfTitular('123.456.789-10');
$primeiraConta->defineNomeTitular('Lucas Ramon');

echo $primeiraConta->recuperarSaldo() . PHP_EOL;
echo $primeiraConta->recuperarCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperarNomeTitular() . PHP_EOL;