<?php

namespace Banco\exercicios\Modelo\Conta;

class ContaPoupanca extends Conta
{
    public function selecionaTipo(): int 
    {
        return 2;
    }
}