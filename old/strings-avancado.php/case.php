<?php

$email = 'Lucás@hotmail.com';
$senha = 'wefhiweegriuweg';


echo strlen($senha) . PHP_EOL;

if(strlen($senha) < 8 ){
echo 'Senha incorreta'. PHP_EOL;
}

$posicaoDOArroba = strpos($email,'@',);

$usuario = substr($email,0,$posicaoDOArroba);

//para deixar tudo maiúsculo usamos strtoupper()..
echo strtoupper($usuario).PHP_EOL;
// temos também para minúscula strtolower()...
echo strtolower($usuario).PHP_EOL;
echo substr($email,$posicaoDOArroba + 1).PHP_EOL;

