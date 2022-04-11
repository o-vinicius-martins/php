<?php
require_once 'src/ContaCorrente.php';
require_once 'src/Titular.php';
require_once 'src/Cpf.php';

$conta1 = new ContaCorrente(new Titular('Vinícius', new Cpf('000.000.000-01')));
$conta2 = new ContaCorrente(new Titular('Marcos', new Cpf('000.000.000-02')));
$conta3 = new ContaCorrente(new Titular('Maria', new Cpf('000.000.000-03')));

echo $conta1->recuperaNomeTitular() . "\t";
echo $conta1->recuperaCpfTitular() . "\t\t";
echo $conta1->recuperaSaldo() . "\n";

echo $conta2->recuperaNomeTitular() . "\t\t";
echo $conta2->recuperaCpfTitular() . "\t\t";
echo $conta2->recuperaSaldo() . "\n";

echo $conta3->recuperaNomeTitular() . "\t\t";
echo $conta3->recuperaCpfTitular() . "\t\t";
echo $conta3->recuperaSaldo() . "\n";

echo ContaCorrente::recuperaNumeroDeContas() . " contas ativas.\n";
