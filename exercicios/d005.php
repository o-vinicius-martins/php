<?php
//Declarar 3 arrays associativos para contas correntes.
$conta1 = ['titular' => 'Vinícius', 'saldo' => 1000];
$conta2 = ['titular' => 'Marcos', 'saldo' => 800];
$conta3 = ['titular' => 'Maria', 'saldo' => 600];
//echo "{$conta1['titular']} {$conta1['saldo']}";

//Armazenando os arrays associativos em um array simples.
$contasCorrentes = [$conta1, $conta2, $conta3];
echo "Lista de contas:\n";
for ($i = 0; $i < count($contasCorrentes); $i++) {
    echo "{$contasCorrentes[$i]['titular']} {$contasCorrentes[$i]['saldo']}\n";
}

//Repetindo o exercício com foreach.
$contasCorrentes2 = [
    '000.000.000-01' => ['titular' => 'Vinícius', 'saldo' => 1000],
    '000.000.000-02' => ['titular' => 'Marcos', 'saldo' => 800],
    '000.000.000-03' => ['titular' => 'Maria', 'saldo' => 600]
];
echo "\nLista de contas:\n";
foreach ($contasCorrentes2 as $cpf => $conta) {
    echo "$cpf {$conta['titular']} {$conta['saldo']}\n";
}

//Opcional: Criar um array que mapea placa de carro, sendo o carro também um array com marca e modelo.
$veiculos = [
    'ABC-0001' => ['marca' => 'VW', 'modelo' => 'Golf'],
    'DEF-0002' => ['marca' => 'Fiat', 'modelo' => 'Uno'],
    'GHI-0003' => ['marca' => 'Chevrolet', 'modelo' => 'Trail Blazer']
];
echo "\nLista de carros:\n";
foreach ($veiculos as $placa => $marcaEModelo) {
    echo "$placa {$marcaEModelo['marca']} {$marcaEModelo['modelo']}\n";
}