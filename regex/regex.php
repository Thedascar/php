<?php

$telefones = ['(42) 99999 - 9999', '(42) 98888 - 8888', '(42) 97777 - 7777'];

foreach($telefones as $telefone){
// aqui com pred_match podemos usar expressões regulares para fazer válidações..
    $telefoneValido = preg_match('/^(\([0-9]{2}\)) 9?[0-9]{4} - [0-9]{4}$/',
    $telefone,
    $verificacoes,
);

    var_dump($verificacoes);
    if($telefoneValido){
        echo 'Telefone válido' . PHP_EOL;
    }else {
        echo 'Telefone inválido' . PHP_EOL;
    }

    echo preg_replace(
        '/^\(([0-9]{2})\) (9?[0-9]{4} - [0-9]{4})$/',
        '(XX) \2',
        $telefone
    ) . PHP_EOL;
}