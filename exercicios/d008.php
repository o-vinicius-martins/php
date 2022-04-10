<?php
require_once 'funcoes.php';
//Nova função que altera string
$contasCorrentes = [
    '000.000.000-01' => ['titular' => 'Vinícius', 'saldo' => 1000],
    '000.000.000-02' => ['titular' => 'Marcos', 'saldo' => 800],
    '000.000.000-03' => ['titular' => 'Maria', 'saldo' => 600]
];

titularMaiusculas($contasCorrentes['000.000.000-03']);

foreach ($contasCorrentes as $cpf => $conta) {
    list('titular' => $titular, 'saldo' => $saldo) = $conta;
    exibeMsg("$cpf $titular $saldo");
}
/*foreach ($contasCorrentes as $cpf => $conta) {
    exibeMsg("$cpf {$conta['titular']} R\${$conta['saldo']}");
}*/

//Testando a função unset
exibeMsg("");
unset($contasCorrentes['000.000.000-01']);

foreach ($contasCorrentes as $cpf => $conta) {
    list('titular' => $titular, 'saldo' => $saldo) = $conta;
    exibeMsg("$cpf $titular $saldo");
}