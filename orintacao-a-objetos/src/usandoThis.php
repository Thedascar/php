<?php

require 'Conta.php';

$primeiraConta = new COnta();
$primeiraConta->cpfTitular = '123.456.789.-10';
$primeiraConta->nomeTitular = 'Lucas Ramon';
$primeiraConta->saldo = 258.78;

$segundaConta = new Conta();
$segundaConta->cpfTitular = '789.456.123-01';
$segundaConta->nomeTitular = 'Aline Lima';
$segundaConta->saldo = 387.78;

// Usamo método sacar sendo referênciado pelo $this
// precisamos usar (->) para referênciar os método..
$primeiraConta->sacar(250);

var_dump($primeiraConta) . PHP_EOL;
var_dump($segundaConta) . PHP_EOL;
