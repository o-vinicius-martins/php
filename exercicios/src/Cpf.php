<?php
class Cpf 
{
    private string $numero;

    public function __construct($num)
    {
        $this->numero = $num;
    }

    public function recuperaCpf(): string 
    {
        return $this->numero;
    }
}