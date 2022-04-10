<?php
require_once 'funcoes.php';

//Repetindo exercício de saques e depósitos.
$contasCorrentes = [
    '000.000.000-01' => ['titular' => 'Vinícius', 'saldo' => 1000],
    '000.000.000-02' => ['titular' => 'Marcos', 'saldo' => 800],
    '000.000.000-03' => ['titular' => 'Maria', 'saldo' => 600]
];

sacar($contasCorrentes['000.000.000-01'], 950.25);
depositar($contasCorrentes['000.000.000-02'], 500.25);
depositar($contasCorrentes['000.000.000-03'], 450);
exibeMsg("");

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMsg("$cpf {$conta['titular']} R\${$conta['saldo']}");
}