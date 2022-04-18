<?php

require_once 'src/Modelo/Conta/Conta.php';
use Banco\Modelo\Conta\Conta;

$conta1 = new Conta('Corrente', '000.000.000-01', 'Vinícius', 100.0);
$conta2 = new Conta('Poupança', '000.000.000-02', 'Marcos', 500); 
$conta3 = new Conta('Salário', '000.000.000-03', 'Maria', 250.80);
$contasList = [$conta1, $conta2, $conta3];

$conta1->transfere(20, $conta2);

foreach ($contasList as $conta) {
    $conta->recuperaConta();
}

//$conta2->saldo -= 200;
//echo $conta1->tipo;