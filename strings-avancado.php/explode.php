<?php

$array = '1 2 3 4';

// o limit limita a saída do programa neste caso ele usa o 1 e adicio o resto no ultimo parâmetro
var_dump(explode(' ',$array, limit:2));