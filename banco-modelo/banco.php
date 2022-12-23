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
* Fazendo um saque manual da conta do lucas
*/

if(500 > $contasCorrentes["123.456.787-10"]['saldo'] ){
    echo "Você não pode sacar este valor " . PHP_EOL;
}else{
    $contasCorrentes["123.456.787-10"]['saldo'] -= 500;
}



if(500 > $contasCorrentes["123.456.789-12"]['saldo'] ){
    echo "Você não pode sacar este valor " . PHP_EOL;
}else{
$contasCorrentes["123.456.789-12"]['saldo'] -= 500;
}


foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . " " .$conta["titular"]."tem saldo de ".$conta["saldo"] . PHP_EOL;
}