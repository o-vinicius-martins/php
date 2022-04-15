<?php

namespace Banco\exercicios\Modelo\Conta;

class ContaSalario extends Conta 
{
    public function selecionaTipo(): int 
    {
        return 3;
    }
}