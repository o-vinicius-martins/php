<?php
//Criar um programa que exiba, na tela do usuário, todos os números ímpares de 0 até 100.
for ($num = 1; true; $num++) {
    if ($num % 2 !=0 && $num <= 100) {
        echo $num . "\n";
    }
    continue;
}