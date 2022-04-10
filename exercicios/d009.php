<?php
require_once 'funcoes.php';
//Iniciando estudos no servidor web local.
$contasCorrentes = [
    '000.000.000-01' => ['titular' => 'Vinícius', 'saldo' => 1000],
    '000.000.000-02' => ['titular' => 'Marcos', 'saldo' => 800],
    '000.000.000-03' => ['titular' => 'Maria', 'saldo' => 600]
];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contas Correntes</title>
</head>
<body>
    <h1>Banco php</h1>
    <h2>Contas Correntes</h2>
    <ul>
        <?php
        foreach ($contasCorrentes as $cpf => $conta) {
        ?>
        <h3><?=$conta['titular'];?></h3>
        <dd><?=$conta['saldo'];?></dd>
        <?php } ?>
    </ul>
</body>
</html>
