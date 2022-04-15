<?php

namespace Banco\exercicios\Modelo\Conta;

class Tipo
{
    private int $tipo;

    public function __construct(int $numTipo)
    {
        if ($numTipo != 1 || $numTipo != 2 || $numTipo != 3)
        echo "Digite um valor válido.";
        return;
        $this->tipo = $numTipo;
    }

    public function recuperaTipo(): int 
    {
        return $this->tipo;
    }
}
