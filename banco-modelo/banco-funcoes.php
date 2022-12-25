<?php


/**
 * Criação de uma função com uma sub-rotina de exibir as mensagens.
 */
function exibeMensagem(string $mensagem) : void
{
    echo $mensagem . PHP_EOL;
}

/**
 * Função para saque.
 * Colocamos no parâmetro o float
 * para dizer ao php que queremos apenas números
 * 
 * também precisamos definir o tipo da $conta e do retorno
 * 
 * neste caso retornamos um elemento array
 */

 function sacar(array $conta,float $valorASacar) : array
 {
    if($valorASacar > $conta ['saldo'] ){
        exibeMensagem("Você não pode sacar este valor ");
    }else{
        $conta['saldo'] -= $valorASacar;
    }
    return $conta;
 }
 /**
* Função Deposito
*/
function depositar(array $conta,float $valorADepositar) : array
{
    if($valorADepositar > 0){
        $conta['saldo'] += $valorADepositar;
    }else{
        exibeMensagem('Valor não pode ser negativo');
    }
    return $conta;
}


/**
 * indices dos arrays.
 */
$contasCorrentes = [
    "123.456.787-10" => ["titular" => "Lucas","saldo" => 1000],
    "123.456.788-11" =>["titular" => "Aline","saldo" => 15000],
    "123.456.789-12" =>["titular" => "Bacon e Bob","saldo" => 500]
];

/**
* Fazendo saque com a funcao sacar
*/

$contasCorrentes["123.456.787-10"] = sacar($contasCorrentes["123.456.787-10"],500);
$contasCorrentes["123.456.788-11"] = sacar($contasCorrentes["123.456.788-11"],500);
$contasCorrentes["123.456.789-12"] = sacar($contasCorrentes["123.456.789-12"],500);
/**
 * Fazendo um deposito
 */
$contasCorrentes["123.456.787-10"] = depositar($contasCorrentes["123.456.787-10"],385.89);
$contasCorrentes["123.456.788-11"] = depositar($contasCorrentes["123.456.788-11"],427.87);
$contasCorrentes["123.456.789-12"] = depositar($contasCorrentes["123.456.789-12"],1589.56);

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem($cpf . " " .$conta["titular"]." tem saldo de ".$conta["saldo"]);
}
