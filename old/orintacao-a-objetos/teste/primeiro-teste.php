<?php
// fazemos a chamda de uma função via require....
// devemos ultilizar o caminho completo..
require 'conta.php';
// criamos e atribuimos a $conta uma nova conta com a função...
$conta = criarConta('123.456.789-10','Lucas Ramon',548);
var_dump($conta); 

// aqui fazemos um saque e declaramos a conta - ela mesma...
$conta = $conta['123.456.789-10']['saldo'] -= 2548;
var_dump($conta);