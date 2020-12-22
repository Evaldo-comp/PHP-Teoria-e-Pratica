<?php

class Conta
{
    private string $cpfTitular;
    private string $nomeTitular;
    private float $saldo= 0;

    public function  sacar(float $valorASacar){
        if($valorASacar > $this-> saldo){
            echo "Saldo indisponível\n";
            return;
        }
        $this -> saldo -= $valorASacar;
        
    }

    public function depositar(float $valorADepositar):void {
        if($valorADepositar < 0){
            echo "Valor precisa ser positivo\n";
            return;
        }
        $this->saldo+=$valorADepositar;
        
    }

    public function transferir(float $valorATransferir, Conta $contaDestino):void
    {
        if ($valorATransferir > $this->saldo){
            echo "saldo Indisponível\n";
            return;
        }

        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);

        
    }

    public function recuperarSaldo(): float{
        return $this->saldo;
    }

    public function defineCpfTitular(string $cpf):void{
        $this->cpfTitular = $cpf;
    }

    public function recuperaCpfTitular(): string{
        return $this->cpfTitular;
    }

    public function defineNomeTitular(string $nome){
        $this->nomeTitular = $nome;
    }

    public function recuperaNomeTitular():string{
        return $this->nomeTitular;
    }
}