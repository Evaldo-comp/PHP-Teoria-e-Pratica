<?php

$conta1 = [
    'titular' => 'Evaldo',
    'saldo' => 1000
];

$conta2 = [
    'titular' => 'Ana',
    'saldo' => 10300
];

$conta3 = [
    'titular' => 'Fernando',
    'saldo' => 800
];

$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contasCorrentes); $i++){
    echo $contasCorrentes[$i]['titular'].PHP_EOL;
}

