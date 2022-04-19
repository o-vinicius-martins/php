<?php

namespace Banco\Modelo\Conta;

class Conta 
{
    private TipoConta $tipo;
    private int $numero;
    private Titular $titular;
    private float $saldo;
    private static int $numeroDeContas = 0;
    
    public function __construct (TipoConta $tipo, Titular $titular, float $saldo)
    {
        $this->tipo = $tipo;
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

    public function recuperaNumeroDeContas(): int 
    {
        return self::$numeroDeContas;
    }

    public function recuperaConta(): void 
    {
        echo
        $this->numero . "\t" .
        $this->tipo->recuperaTipo() . "\t" .
        $this->titular->recuperaNome() . "\t" . 
        $this->titular->recuperaCPF() . "\t" . 
        $this->saldo . "\n";
    }

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
        $this->saca($valorATransferir);
        $contaDeDestio->deposita($valorATransferir);
    }
}