<?php

$list = ['bebida' => ['liquido' => 'café' , 'substancia' => 'cafeina'
]];


foreach ($list as $key => $lista) {
    ['liquido' => $liquido,'substancia' => $substancia] = $lista;
   echo "$key de $liquido tem $substancia" . PHP_EOL;
}