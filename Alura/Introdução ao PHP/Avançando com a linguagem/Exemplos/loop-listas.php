<?php

$idadeList = [1, 3, 44, 54, 22, 11]; // declaração de um array
$titulares = ["Titular 1", "Titular 2"];
$saldos = [100, 1000];

// retorna o tamanho da lista 
$tam = count($idadeList);

// for para percorrer a lista
for($i = 0; $i < $tam; $i++){
    echo $idadeList[$i].PHP_EOL;
}
