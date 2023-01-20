<?php

/**
 * Uma function sub-rotina não precisa ter parâmetro
 */
function exibeOlaMundo(){
    echo 'Óla Mundo';
}


/**
 * Criação de uma função com uma sub-rotina de exibir as mensagens.
 */
function exibeMensagem($mensagem){
    echo $mensagem . PHP_EOL;
}

/**
 * Usamos return para que a função passe a representar o valor.
 */

function adiciona2($x){
   return $x + 2;
}
$resultado = adiciona2(10);
echo $resultado;


/**
 * Função para saque
 */

 function sacar($conta,$valorASacar){
    if($valorASacar > $conta ['saldo'] ){
        exibeMensagem("Você não pode sacar este valor ");
    }else{
        $conta['saldo'] -= 500;
    }
 }



/**
 * Modificando os indices dos arrays.
 */
$contasCorrentes = [
    "123.456.787-10" =>["titular" => "Lucas","saldo" => 1000],
    "123.456.788-11" =>["titular" => "Aline","saldo" => 15000],
    "123.456.789-12" =>["titular" => "Bacon e Bob","saldo" => 500]
];

/**
* Fazendo um saque manual da conta do lucas
*/

if(500 > $contasCorrentes["123.456.787-10"]['saldo'] ){
    exibeMensagem("Você não pode sacar este valor ");
}else{
    $contasCorrentes["123.456.787-10"]['saldo'] -= 500;
}



if(500 > $contasCorrentes["123.456.789-12"]['saldo'] ){
    exibeMensagem("Você não pode sacar este valor ");
}else{  
    $contasCorrentes["123.456.789-12"]['saldo'] -= 400;
}


foreach ($contasCorrentes as $cpf => $conta) {
    ['titular' => $titular,'saldo' => $saldo] = $conta;
    exibeMensagem ("$cpf $titular R$ $saldo");
}
