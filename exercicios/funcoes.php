<?php
//Aprendendo interpolação e require
function exibeMsg(string $msg) 
{
    echo "$msg\n";
}
function depositar(array &$conta, $valorDeposito) 
{
    if ($valorDeposito > 0) {
        $conta['saldo'] += $valorDeposito;       
        exibeMsg("Depósito concluído!");
    } else {
        exibeMsg("Erro! Digite um valor válido");
    }
    exibeMsg("Saldo atual: {$conta['saldo']}");
    return $conta['saldo'];
}
function sacar(array &$conta, $valorSaque) 
{

     if ($valorSaque <= $conta['saldo']) {
         $conta['saldo'] -= $valorSaque;
         exibeMsg("Saque concluído!");
     } else {
         exibeMsg("Saldo insuficiente.");
     }
     exibeMsg("Saldo atual {$conta['saldo']}");
     return $conta['saldo'];
}
function titularMaiusculas(array &$conta)
{
    $conta['titular'] = strtoupper($conta['titular']);
}