<?php
class ContaCorrente
{
    private string $cpfTitular;
    private string $nomeTitular;
    private float $saldo;
    private static $numeroDeContas = 0;

    public function __construct (string $nome, string $cpf)
    {
        $this->nomeTitular = $nome;
        $this->validaTitular($nome);
        $this->cpfTitular = $cpf;
        $this->saldo = 0;

        self::$numeroDeContas++;
    }

    public function __destruct ()
    {
        self::$numeroDeContas--;
    }

    public function saca(float $valorASacar): void
    {
        if ($valorASacar > $this->saldo) {
            echo "Saldo insuficiente.";
        }
        return;
        $this->saldo -= $valorASacar;
        echo "Saque realizado com sucesso.";
    }

    public function deposita(float $valorADepositar): void
    {
        if ($valorADepositar > 0){
            $this->saldo += $valorADepositar;
            echo "Depósito realizado com sucesso.";
        }
        return;
        echo "Digite um valor válido.";
    }

    public function transfere(ContaCorrente $conta, float $valorATransferir): void
    {
        if ($valorATransferir > 0) {
            $this->saca($valorATransferir);
            $conta->deposita($valorATransferir);
            echo "Transferência realizada com sucesso.";
        }
        return;
        echo "Digite um valor válido";
    }

    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }

    public function recuperaCpfTitular(): string
    {
        return $this->cpfTitular;
    }

    public function recuperaNomeTitular(): string 
    {
        return $this->nomeTitular;
    }

    private function validaTitular($nome): void 
    {
        if (strlen($nome) < 5) {
            echo "Um nome válido deve ter pelo menos 5 caracteres.";
        }
    }

    public static function recuperaNumeroDeContas(): int 
    {
        return self::$numeroDeContas;
    }


}