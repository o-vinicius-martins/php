<?php
//Primeiros contatos com listas.
$listaIdades = [15, 18, 22, 35, 44, 80];
$umaIdade = $listaIdades[2];
//echo $umaIdade . "\n";

//Programa que imprime a lista de idades.
echo "Lista de idades:\n";
for ($i = 0; $i < count($listaIdades); $i++) {
    echo $listaIdades[$i] . "\n";
}
echo "\n";

//Programa que imprime uma lista de nomes.
//Teste de outra maneira de declarar array.
$nomes = array('João', 'Maria', 'Clara', 'Vinícius');
//echo $nomes[3];
echo "Lista de nomes:\n";
for ($i = 0; $i < count($nomes); $i++) {
    echo "$nomes[$i]\n";
}