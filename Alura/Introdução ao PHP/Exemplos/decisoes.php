<?php

$idade = 19;
$nome ="Evado";

echo "você só pode entrar se tiver mais do que 18 anos" . PHP_EOL;

if ($idade >= 18 && $nome == "Evaldo"){
    echo "Você tem $idade anos $nome. Pode entrar".PHP_EOL;
}else if($idade < 18 && $nome == "Evaldo") {
    echo "Você não tem idade suficiente para entrar $nome ". PHP_EOL;
}else if ($idade >= 18 && $nome != "Evaldo"){
    echo "Seu nome não é $nome". PHP_EOL;
} else{
    echo "Você não pode entrar". PHP_EOL;
}