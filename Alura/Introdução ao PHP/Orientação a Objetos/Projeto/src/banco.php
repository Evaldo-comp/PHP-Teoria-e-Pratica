<?php

require_once 'Conta.php';

$primeiraConta = new Conta();
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);
$primeiraConta->defineCpfTitular("123.456.789-10");
$primeiraConta->recuperaCpfTitular();
$primeiraConta->defineNomeTitular("Evaldo");
$primeiraConta->recuperaNomeTitular;
//$primeiraConta ->nomeTitular = "Evaldo";
echo $primeiraConta->recuperarSaldo()."\n";
