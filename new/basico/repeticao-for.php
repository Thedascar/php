<?php

for ($i=10; $i >= 0; $i--) { 
    if($i == 8){
        continue;
    }
    echo "# com continue $i" . PHP_EOL;
}

for ($i2=0; $i2 <= 10; $i2++) { 
    if($i2 == 8){
        break;
    }
    echo "# com break $i2" . PHP_EOL;
}