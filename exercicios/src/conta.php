<?php
function criarConta(string $cpf, string $titular, float $saldo): array
{
    return [$cpf => [
        'titular' => $titular, 
        'saldo' => $saldo
        ]
    ];
}