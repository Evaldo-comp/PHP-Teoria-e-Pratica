<?php

//Construa a tabuada de algum número

$peso = 85;
$altura = 1.62;

$imc = $peso / ($altura * $altura);

echo " Seu imc é $imc";

if ($imc < 18.5){
    echo "você está abaixo do peso\n";
}else if($imc >= 18.5 && $imc < 24.9){
    echo "você está com peso normal\n";
}else if ($imc >= 25 && $imc < 29.9){
    echo"Você está com sebrepeso\n";
}else{
    echo "Você está obeso(a)\n";
}
