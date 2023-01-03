<?php

$nome = 'Lucas Ramon Campos';
$email = 'Lucas@hotmail.com ';
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

// função explode explode a string em varias string diferentes..
// a funçao explode divide a string e trasnforma em um array
list( $nome,$sobrenome,$ultimoNome) = explode(' ' , $nome);
echo 'Nome : ' . $nome . PHP_EOL;
echo 'Sobrenome: '. $sobrenome . PHP_EOL;
echo 'Último nome : '. $ultimoNome . PHP_EOL;

// podemos decidor que tipo de separador usar como ex usamos espaço e depos virgula
$csv = 'Lucas Ramon,24,Lucasramoncampos@hotmail.com.br';
var_dump(explode(',',$csv));

//Usamos a fumção trim() <-- aparar , para remover espaços vazios

echo trim($email) . PHP_EOL;