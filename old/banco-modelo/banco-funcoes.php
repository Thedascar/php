<?php

/**
 * Include para chamar uma funcao em outra pagina
 * include 'funcoes-banco.php';
 * 
 * Usamos para fazer a importação com mensagem de erro caso,
 * nome do arquivo esteja errado usamos
 * require
 * 
 * require_once para atualizar os dados
 */

 require_once 'funcoes-banco.php';

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

titularComLetrasMaiusculas($contasCorrentes[
    "123.456.787-10"]);

/**
 * A função unset remove uma variavel da memoria
 */

 unset($contasCorrentes["123.456.788-11"]);
 
foreach ($contasCorrentes as $cpf => $conta) {
    /**
     * Usamos a função list ou [] para atribuir um indice a uam variavel
     */
        ['titular' => $titular,'saldo' => $saldo] = $conta;
        exibeMensagem ("$cpf $titular R$ $saldo");
    
}
