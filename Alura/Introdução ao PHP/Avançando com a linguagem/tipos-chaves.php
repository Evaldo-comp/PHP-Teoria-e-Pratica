<?php
$array = [
    1 => 'a',
    '1' => 'b', //converte para numeral 1
    1.5 => 'c', // arredonda para baixo 1
    true => 'd' // converte para o equivaçente inteiro 1
];

foreach ($array as $item){
    echo $item.PHP_EOL;
}