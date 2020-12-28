<?php

class Conta
{
    private string $titular;
    private string $nomeTitular;
    private float $saldo= 0;
    private static $numeroDeContas =0;

    public function __construct(Titular $titular){

        $this->titular = $titular;
        $this->validaNomeTitular($nome);
        $this->saldo = 0;

        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

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

    
    

   

   

    public static function recuperaNumeroDeContas():int
    {
        return self::$numeroDeContas;
    }
}