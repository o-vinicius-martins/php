<?php

namespace Banco\Modelo\Conta;

class Titular
{
    private string $nome;
    private string $cpf;

    public function __construct(string $nomeEscolhido, string $cpfEscolhido)
    {
        $this->nome = $nomeEscolhido;
        $this->cpf = $cpfEscolhido;
    }

    public function recuperaNome(): string 
    {
        return $this->nome;
    }

    public function recuperaCPF(): string 
    {
        return $this->cpf;
    }
}