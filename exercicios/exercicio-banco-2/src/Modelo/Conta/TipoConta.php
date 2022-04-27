<?php

namespace Banco\Modelo\Conta;

class TipoConta extends Conta
{
    private string $tipo;

    public function __construct(string $tipoEscolhido, Titular $titularEscolhido, float $saldoInicial)
    {   
        $this->tipo = $tipoEscolhido;

        parent::__construct($titularEscolhido, $saldoInicial);

        if ($tipoEscolhido != 'Corrente' && $tipoEscolhido != 'Poupança' && $tipoEscolhido != 'Salário') {
            echo "Escolha entre conta Corrente, Poupança ou Salário.\n";
            return;
        }
    }

    public function recuperaTipo(): string 
    {
        return $this->tipo;
    }
    
    public function recuperaConta(): void 
    {
        echo
        $this->recuperaNumero() . "\t" .
        $this->recuperaTipo() . "\t" .
        $this->recuperaTitular()->recuperaNome() . "\t" . 
        $this->recuperaTitular()->recuperaCPF() . "\t" . 
        $this->recuperaSaldo() . "\n";
    }
}