<?php
// fazemos a chamada da classe....
require 'src/Conta.php';
// criando uma nova conta... um novo objeto..
// Utilizando a forma criada.. ultilizamos a palavra new
$primeiraConta = new Conta();
// em php usamos (->) para aportar para o objeto feito...
// utilizamos para acessar os atributos..
$primeiraConta->saldo = 200.75;
$primeiraConta->cpfTitular = '123.456.789-10';
$primeiraConta->nomeTitular = 'Lucas Ramon';
var_dump($primeiraConta) . PHP_EOL;

// criação da segunda conta...
$segundaConta = new Conta();
$segundaConta->saldo = 587.89;
$segundaConta->cpfTitular = '749.549.259-79';
$segundaConta->nomeTitular = 'Aline Lima';
var_dump($segundaConta);