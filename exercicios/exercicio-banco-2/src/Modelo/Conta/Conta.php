<?php

namespace Banco\Modelo\Conta;

abstract class Conta 
{
    private int $numero;
    private Titular $titular;
    protected float $saldo;
    private static int $numeroDeContas = 0;
    
    public function __construct (Titular $titular, float $saldo)
    {
        $this->numero = self::$numeroDeContas + 1;
        $this->titular = $titular;
        $this->saldo = $saldo;
        self::$numeroDeContas++;
    }

    public function __distruct()
    {
        self::$numeroDeContas--;
    }

    public function recuperaNumero(): int 
    {
        return $this->numero;
    }

    public function recuperaSaldo(): float 
    {
        return $this->saldo;
    }

    public function recuperaTitular(): Titular 
    {
        return $this->titular;
    }

    public function recuperaNumeroDeContas(): int 
    {
        return self::$numeroDeContas;
    }

    /*public function recuperaConta(): void 
    {
        echo
        $this->numero . "\t" .
        $this->tipo->recuperaTipo() . "\t" .
        $this->recuperaTitular()->recuperaNome() . "\t" . 
        $this->recuperaTitular()->recuperaCPF() . "\t" . 
        $this->saldo . "\n";
    }*/

    public function saca($valorASacar): void 
    {
        if ($this->saldo < $valorASacar or $valorASacar < 0) {
            echo "Saldo indisponível ou valor inválido.\n";
            return;
        }
        $this->saldo -= $valorASacar;
    }

    public function deposita($valorADepositar): void 
    {
        if ($valorADepositar < 0) {
            echo "ERRO! Valor inválido.\n";
            return;
        }
        $this->saldo += $valorADepositar;
    }

    public function transfere($valorATransferir, $contaDeDestio): void 
    {
        if ($this->saldo < $valorATransferir || $valorATransferir < 0) {
            echo "Saldo indisponível ou valor inválido.\n";
            return;
        }

        if ($this->tipo->recuperaTipo() != "Corrente") {
            echo "Só é possível realizar transferências por uma Conta Corrente.\n";
            return;
        }
        
        $this->saca($valorATransferir);
        $contaDeDestio->deposita($valorATransferir);
    }
}