<?php
require_once 'src/ContaCorrente.php';

$conta1 = new ContaCorrente('Vinícius', '000.000.000-01');
$conta2 = new ContaCorrente('Marcos', '000.000.000-02');
$conta3 = new ContaCorrente('Paulo', '000.000.000-03');

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

unset($conta3);

echo ContaCorrente::recuperaNumeroDeContas() . " contas ativas.\n";
