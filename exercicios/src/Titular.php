<?php
class Titular
{
    private string $nome;
    private Cpf $cpf;

    public function __construct($nome, Cpf $cpf)
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

    public function recuperaNome(): string 
    {
        return $this->nome;
    }

    public function recuperaCpfNumero(): string 
    {
        return $this->cpf->recuperaCpf();
    }
}