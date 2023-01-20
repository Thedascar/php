<?php
/**
 * Continue - continua o loop
 */
for($contador ; $contador <= 15 ; $contador++){
    if($contador == 13){
        continue;
    }
    echo " fora do if com Continue $contador". PHP_EOL; 
}   

/**
 * Break; quebra o loop
 */
for($contador2 ; $contador2 <= 15 ; $contador2++){
    if($contador2 == 13){
        break;
    }
    echo " fora do if Break $contador2". PHP_EOL; 
}   