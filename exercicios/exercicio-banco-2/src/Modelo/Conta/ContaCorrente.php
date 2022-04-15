<?php

namespace Banco\exercicios\Modelo\Conta;

class ContaCorrente extends Conta
{

    public function transfere(float $valorATransferir, Conta $contaDeDestino): void 
    {
        if ($valorATransferir > $this->saldo)
        {
            echo "Saldo insuficiente.";
            return;
        }

        $this->saca($valorATransferir);
        $contaDeDestino->deposita($valorATransferir);
    }

    public function selecionaTipo(): int 
    {
        return 1;
    }
}