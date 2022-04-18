<?php

namespace Banco\Modelo\Conta;

class Conta 
{
    private string $tipo;
    private int $numero;
    private string $cpf;
    private string $nome;
    private float $saldo;
    private static int $numeroDeContas = 0;
    
    public function __construct (string $tipo, string $cpf, string $nome, float $saldo)
    {
        $this->tipo = $tipo;
        $this->numero = self::$numeroDeContas + 1;
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->saldo = $saldo;

        self::$numeroDeContas++;
    }

    public function recuperaTipo(): string 
    {
        return $this->tipo;
    }

    public function recuperaNumero(): int 
    {
        return $this->numero;
    }

    public function recuperaCPF(): string 
    {
        return $this->cpf;
    }

    public function recuperaNome(): string 
    {
        return $this->nome;
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
        $this->tipo . "\t" .
        $this->numero . "\t" . 
        $this->cpf . "\t" . 
        $this->nome . "\t" . 
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