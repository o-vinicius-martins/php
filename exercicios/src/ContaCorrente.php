<?php
class ContaCorrente
{
    private Titular $titular;
    private float $saldo;
    private static int $numeroDeContas = 0;

    public function __construct (Titular $titular)
    {
        $this->titular = $titular;
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

    public function recuperaNomeTitular(): string 
    {
        return $this->titular->recuperaNome();
    }

    public function recuperaCpfTitular(): string 
    {
        return $this->titular->recuperaCpfNumero();
    }

    public static function recuperaNumeroDeContas(): int 
    {
        return self::$numeroDeContas;
    }


}