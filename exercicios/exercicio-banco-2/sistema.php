<?php

require_once 'autoload.php';

use Banco\Modelo\Conta\Titular;
use Banco\Modelo\Conta\Conta;
use Banco\Modelo\Conta\TipoConta;

$titular1 = new Titular('Vinícius', '000.000.000-01');
$titular2 = new Titular('Marcos', '000.000.000-02');
$titular3 = new Titular('Maria', '000.000.000-03');

$cCorrente = new TipoConta('Corrente', $titular1, 200);
$cPoupanca = new TipoConta('Poupança', $titular2, 500);
$cSalario = new TipoConta('Salário', $titular3, 800);

//var_dump($cCorrente);
/*echo $cCorrente->recuperaTipo(); //OK
echo $cCorrente->recuperaNumero(); //OK
echo $cCorrente->recuperaSaldo(); //OK
echo $cCorrente->recuperaTitular()->recuperaNome(); //OK
echo $cCorrente->recuperaTitular()->recuperaCPF(); //OK
echo $cCorrente->recuperaNumeroDeContas();// OK*/
$contasList = [$cCorrente, $cPoupanca, $cSalario];
foreach ($contasList as $conta) {
    $conta->recuperaConta();
}

echo $cCorrente->recuperaNumeroDeContas();

//$conta2->saldo -= 200;
//echo $conta1->tipo;