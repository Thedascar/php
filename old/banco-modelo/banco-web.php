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
 * Usamos ?> para fechar o nosso arquivo do php
 * e tudo que vem abaixo, é considerado texto.
 */    
?>

<!DOCTYPE html>
<html lang="pr-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco</title>
</head>
<body>
    <h1>Contas Correntes</h1>

    <dl>
        <?php foreach($contasCorrentes as $cpf => $conta) { ?>
        <dt>
            <h3><?php echo $conta['titular'] ?> - <?php echo $cpf?></h3> 
        </dt>
        <dd>
            <?php echo "Saldo: " . $conta['saldo']?>
        </dd>
        <?php } ?>
    </dl>
</body>
</html>