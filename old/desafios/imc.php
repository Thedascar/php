<?php

$peso = 78;
$altura = 1.65;
$imc = $peso / ($altura ** 2);

if($imc < 18.5){
    echo "seu imc é $imc e está desnutrido";
}elseif($imc > 18.5 && $imc < 24.9){
    echo "seu imc é $imc e está normal";
}elseif($imc > 25.0 && $imc  < 29.9){
    echo "seu imc é $imc e está com sobrepeso";
}elseif($imc > 30.0 && $imc < 39.9){
    echo "seu imc é $imc e está obesidade";
}else{
    echo "seu imc é $imc e está obesidade grave";
}
