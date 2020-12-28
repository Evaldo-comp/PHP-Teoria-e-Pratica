<?php

require_once 'Conta.php';
require_once 'Titular.php';

$primeiraConta = new Conta(new Titular('123.456.789-10', 'Francisco Evaldo') );
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperarSaldo() . PHP_EOL;;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;;


Conta::recuperaNumeroDeContas();