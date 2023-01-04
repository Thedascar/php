<?php

$cpf = '081.075.879-28';

$cpfValido = preg_match('/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}-[0-9]{2}$/',$cpf);


if($cpfValido){
    echo 'válido' . PHP_EOL;
}else {
    echo 'inválido' . PHP_EOL;
}