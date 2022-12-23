<?php

/**
 * Modificando os indices dos arrays.
 */
$contasCorrentes = [
    "123.456.787-10" => ["titular" => "Lucas","saldo" => 1000],
    "123.456.788-11" =>["titular" => "Aline","saldo" => 15000],
    "123.456.789-12" =>["titular" => "Bacon e Bob","saldo" => 400]
];
/**
 * Adicionando mais um item na lista já com a chave
 */
$contasCorrentes["123.456.789-13"] = 
    ["titular" => "Claudia","saldo" => 2000
];

$contasCorrentes["123.456.789-14"] = 
    ["titular" => "Claudia2","saldo" => 2002
];

foreach ($contasCorrentes as $conta) {
    echo $conta["titular"]." tem saldo de R$ ".$conta["saldo"] . PHP_EOL;
}

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . " " .$conta["titular"] . PHP_EOL;
}