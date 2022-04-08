<?php
//Calculadora de IMC
$peso = 80;
$altura = 1.73;
$imc = $peso / ($altura**2);

echo "Seu IMC é $imc.\n";
if ($imc < 18.5) {
    echo "Você está abaixo do peso ideal.";
} else if ($imc >= 18.5 && $imc <= 24.9) {
    echo "Você está em seu peso normal.";
} else if ($imc > 24.9 && $imc <= 29.9) {
    echo "Você está com sobrepeso.";
} else if ($imc >29.9 && $imc <= 39.9) {
    echo "Você está obeso.";
} else {
    echo "Você está com obesidade grave.";
}