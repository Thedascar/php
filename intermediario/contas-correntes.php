<?php

/**
 * Arrays associativos.
 * definimos os índices.
 */

$conta1 = ["titular" => "Lucas","saldo" => 1000];

$conta2 = ["titular" => "Aline","saldo" => 15000];

$conta3 = ["titular" => "Bacon e Bob","saldo" => 400];

/**
 * Arrays de arrays.
 */
$contasCorrentes = [$conta1,$conta2,$conta3];

for ($i=0; $i < count($contasCorrentes); $i++) { 
    echo $contasCorrentes[$i]["titular"]." tem saldo de R$ ".$contasCorrentes[$i]["saldo"] . PHP_EOL;
} 