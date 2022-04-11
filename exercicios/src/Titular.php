<?php
class Titular
{
    private string $nome;
    private string $cpf;

    public function __construct($nome, $cpf)
    {
        $this->nome = $nome;
        $this->validaNome($nome);
        $this->cpf = $cpf;
    }

    private function validaNome(string $nome)
    {
        if (strlen($nome) < 5) {
            echo "Nomes válidos devem ter pelo menos 5 caracteres.\n";
        }
    }

    public function recuperaCpf(): string 
    {
        return $this->cpf;
    }

    public function recuperaNome(): string 
    {
        return $this->nome;
    }
}