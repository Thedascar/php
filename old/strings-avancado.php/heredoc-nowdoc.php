<?php

// um novo jeito de fazer uma string com varias linhas
// podemos colocar qualquer nome neste delimitador
$string = <<<FINAL
uma linha
duas linhas
três linhas
FINAL;

echo $string . PHP_EOL;

//-----------------------------------------------------------------

// função void sem nenhum retorno..
function gerarEmail(string $nome,string $motivo,string $assinatura) : void
{
    // com heredoc podemos ter variáveis..<<< "" duplas
    // com nowdoc apenas represnta a string.. '' simples
    $conteudoEmail = <<<"FINAL"
    Olá, $nome!"

    Estamos entrando em contato para
    {$motivo}

    {$assinatura}
    
    FINAL;

    echo $conteudoEmail;
}

gerarEmail('Lucas','Aula de php','lcs_demais');