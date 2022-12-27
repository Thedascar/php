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
 * mb_strtoupper() deixar tudo em maiusculo.
 * ou para não precisar usar libs se usa strtoupper
 * usamos o & comercial para passar a refêrencia e não mais copiar seu 
 * valor.
 */
function titularComLetrasMaiusculas(array &$conta){
    $conta['titular'] = mb_strtoupper($conta['titular']);
}

function exibeConta(array $conta){
    ['titular' => $titular,'saldo' => $saldo] = $conta;
    echo "<li>Titular: $titular  saldo : $saldo</li>";
}