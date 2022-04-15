<?php

require_once 'autoload.php';

use Banco\exercicios\Modelo\Conta\Conta;
use Banco\exercicios\Modelo\Conta\ContaCorrente;
use Banco\exercicios\Modelo\Conta\ContaPoupanca;
use Banco\exercicios\Modelo\Conta\ContaSalario;
use Banco\exercicios\Modelo\Conta\Titular;

$contaCorrente1 = new ContaCorrente(1, new Titular('Vinícius', '000.000.000-01'));
$contaCorrente2 = new ContaCorrente(1, new Titular('Maria', '000.000.000-02'));

$contaPoupanca1 = new ContaPoupanca(2, new Titular('Carlos', '000.000.000-03')); 
$contaPoupanca2 = new ContaPoupanca(2, new Titular('Marcela', '000.000.000-04'));

$contaSalario1 = new ContaSalario(3, new Titular('Maurício', '000.000.000-05'));
$contaSalario2 = new ContaSalario(3, new Titular('Viviane', '000.000.000-06'));

echo Conta::recuperaNumeroDeContas() . " contas ativas\n";
echo $contaCorrente1->recuperaTipo() . $contaCorrente1->recuperaNumero() . $contaCorrente1->recuperaTitular() . $contaCorrente1->recuperaSaldo . "\n";

