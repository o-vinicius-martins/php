<?php
//Primeiro contato com funções.
$contasCorrentes = [
    '000.000.000-01' => ['titular' => 'Vinícius', 'saldo' => 1000],
    '000.000.000-02' => ['titular' => 'Marcos', 'saldo' => 800],
    '000.000.000-03' => ['titular' => 'Maria', 'saldo' => 600]
];

function exibeMsg(string $msg) {
    echo "$msg\n";
}
 function depositar(array &$conta, $valorDeposito) {
    if ($valorDeposito > 0) {
        $conta['saldo'] += $valorDeposito;       
        exibeMsg("Depósito concluído!");
    } else {
        exibeMsg("Erro! Digite um valor válido");
    }
    exibeMsg("Saldo atual: {$conta['saldo']}");
    return $conta['saldo'];
 }

 function sacar(array &$conta, $valorSaque) {
     if ($valorSaque <= $conta['saldo']) {
         $conta['saldo'] -= $valorSaque;
         exibeMsg("Saque concluído!");
     } else {
         exibeMsg("Saldo insuficiente.");
     }
     exibeMsg("Saldo atual {$conta['saldo']}");
     return $conta['saldo'];
 }

depositar($contasCorrentes['000.000.000-02'], 100);
sacar($contasCorrentes['000.000.000-01'], 500);

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMsg("$cpf {$conta['titular']} {$conta['saldo']}");
}