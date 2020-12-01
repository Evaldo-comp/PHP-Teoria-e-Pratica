<?php


$contasCorrentes = [
    1212121222 => [
        'titular' => 'Evaldo',
        'saldo' => 1000
    ],
    1123132132 => [
        'titular' => 'Ana',
        'saldo' => 10300
    ],
    3332222333 => [
        'titular' => 'Fernando',
        'saldo' => 800
    ]];

foreach ($contasCorrentes as $cpf => $conta){
    echo $cpf." : ".$conta['titular'].PHP_EOL;
}


