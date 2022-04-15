<?php

namespace Banco\exercicios\Modelo\Conta;

abstract class Conta 
{
    private int $tipo; //1- Conta corrente; 2- Conta poupança; 3- Conta salário
    private int $numero = 0; 
    private Titular $titular;
    protected float $saldo = 0;
    private static int $numeroDeContas = 0;

    public function __construct (int $numTipo, Titular $novoTitular)
    {
        $this->tipo = $numTipo;
        $this->numero++;
        $this->titular = $novoTitular;
        self::$numeroDeContas++;
    }

    public function __distruct()
    {
        self::$numeroDeContas--;
    }

    abstract function selecionaTipo(): int;

    public function recuperaTipo(): void 
    {
        echo $this->tipo . "\t";
    }

    public function recuperaTitular(): void 
    {
        echo $this->titular->recuperaNome() . "\t";
    }

    public function recuperaSaldo(): void 
    {
        echo $this->saldo . "\t";
    }

    public function recuperaNumero(): void 
    {
        echo $this->numero . "\t";
    }

    public function saca(float $valor): void 
    {
        if ($valor >= $this->saldo)
        {
            echo "Saldo indisponível.";
            return;
        }
        $this->saldo -= $valor;
    }

    public function deposita(float $valor): void 
    {
        if ($valor <= 0)
        {
            echo "Digite um valor válido.";
            return;
        }
        $this->saldo += $valor;
    }

    public static function recuperaNumeroDeContas(): int 
    {
        return self::$numeroDeContas;
    }
}