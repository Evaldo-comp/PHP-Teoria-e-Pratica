<?php

//função executa e retorna algo
function sacar($conta, $valorASacar){
    if ($valorASacar > $conta['saldo']){
        exibeMensagem("Você não pode sacar");
    }else{
        $conta['saldo']-= $valorASacar;
    }
    return $conta;

}
// subrotina executa sem retornar nada
function exibeMensagem ($mensagem){
    echo $mensagem. '<br>';
}

function deposito($conta, $valorDeposito){
    if ($valorDeposito > 0){
        $conta['saldo'] += $valorDeposito;
    }else{
        $conta['saldo'] += 0;
    }
    return $conta;

}

function titularLetrasMaiusculas(array &$conta)
{
    $conta['titular'] = strtoupper($conta['titular']);
}

function exibeConta(array $conta)
{
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li>Titular: $titular . Saldo: $saldo</li>";
}

