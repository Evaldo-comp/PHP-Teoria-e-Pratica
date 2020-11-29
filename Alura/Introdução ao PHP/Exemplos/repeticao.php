<?php

$contador = 1;

// while 

while($contador <= 15){
    echo "#$contador". PHP_EOL;
    $contador++;
}

// for

for ($contador = 1 ; $contador <= 15;  $contador++){
    if ($contador == 13)continue;  // pula para a próxima iteração
    echo "#$contador do for".PHP_EOL;
   
    
}