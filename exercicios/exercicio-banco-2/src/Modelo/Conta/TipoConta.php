<?php

namespace Banco\Modelo\Conta;

class TipoConta
{
    private string $tipo;

    public function __construct(string $tipoEscolhido)
    {
        if ($tipoEscolhido != 'Corrente' && $tipoEscolhido != 'Poupança' && $tipoEscolhido != 'Salário') {
            echo "Escolha entre conta Corrente, Poupança ou Salário.\n";
            return;
        }
        $this->tipo = $tipoEscolhido;
    }

    public function recuperaTipo(): string 
    {
        return $this->tipo;
    }
}