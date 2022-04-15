<?php

namespace Banco\exercicios\Modelo\Conta;

class Titular
{
    private string $nome;
    private string $cpf;

    public function __construct(string $nomeInformado, string $cpfInformado)
    {
        $this->nome = $nomeInformado;
        $this->cpf = $cpfInformado;
    }

    function recuperaNome(): string 
    {
        return $this->nome . "\t";
    }

    function recuperaCPF(): string
    {
        return $this->cpf . "\t";
    }
}