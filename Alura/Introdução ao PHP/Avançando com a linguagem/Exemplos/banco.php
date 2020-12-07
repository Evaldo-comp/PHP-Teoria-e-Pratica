<?php

require_once 'funcoes.php';

$contasCorrentes = [
    22222222222 => [
        'titular' => 'Evaldo',
        'saldo' => 1000
    ],
    33333333333 => [
        'titular' => 'Ana',
        'saldo' => 10300
    ],
    3332222333 => [
        'titular' => 'Fernando',
        'saldo' => 800
    ]
];

$contasCorrentes[22222222222] = sacar($contasCorrentes[22222222222], 800);
$contasCorrentes[22222222222] = deposito($contasCorrentes[22222222222], 1800);



titularLetrasMaiusculas($contasCorrentes[22222222222]);

unset($contasCorrentes[22222222222]); // remove um item de um array


echo "<ul>";

foreach ($contasCorrentes as $cpf => $conta){
   // ['titular' => $titular, 'saldo' => $saldo] = $conta;
    exibeConta($conta);
    //echo "$cpf {$conta['titular']} {$conta['saldo']}".PHP_EOL;
}

echo "</ul>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contas Correntes</h1>

    <dl>
        <?php foreach($contasCorrentes as $cpf => $conta) { ?>
        <dt>
            <h3><?= $conta['titular'];?>  - <?= $cpf;?></h3>
        </dt>
        <dd>
            Saldo: <?= $conta['saldo']; ?>
        </dd>
        <?php } ?>   
    </dl>

    
</body>
</html>