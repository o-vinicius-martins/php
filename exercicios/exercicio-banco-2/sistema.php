<?php

require_once 'autoload.php';

use Banco\Modelo\Conta\Titular;
use Banco\Modelo\Conta\Conta;
use Banco\Modelo\Conta\TipoConta;

$cCorrente = new TipoConta('Corrente');
$cPoupanca = new TipoConta('Poupança');
$cSalario = new TipoConta('Salário');

$titular1 = new Titular('Vinícius', '000.000.000-01');
$titular2 = new Titular('Marcos', '000.000.000-02');
$titular3 = new Titular('Maria', '000.000.000-03');

$conta1 = new Conta($cCorrente, $titular1, 100.0);
$conta2 = new Conta($cPoupanca, $titular2, 500); 
$conta3 = new Conta($cSalario, $titular3, 250.80);
$contasList = [$conta1, $conta2, $conta3];

$conta1->deposita(200);

foreach ($contasList as $conta) {
    $conta->recuperaConta();
}

//$conta2->saldo -= 200;
//echo $conta1->tipo;