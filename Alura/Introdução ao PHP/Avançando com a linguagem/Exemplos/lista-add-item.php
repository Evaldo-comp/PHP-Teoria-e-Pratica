<?php


$contasCorrentes = [
    1212121222 => [
        'titular' => 'Evaldo',
        'saldo' => 1000
    ],
    1123132132 => [
        'titular' => 'Ana',
        'saldo' => 10300
    ],
    3332222333 => [
        'titular' => 'Fernando',
        'saldo' => 800
    ]
];

// em array númerico
$lista = [1, 2, 3, 4, 5, 6];

// adicionando com indicação do indice
$lista[7] = 23;

// adicionando indicando o tamanho da lista
$lista [count($lista)] = 23;

// adiconando indicando apenas vazio
$lista[] = 23;


// COM ARRAYS ASSOCIATIVOS
// pode gerar erros 
$contasCorrentes[] = [
    'titular' => 'Gustavo',
    'saldo' => 200
];

// no caso da chave ser uma string, essa chave tem que ser atribuida
$contasCorrentes['00021123112'] = [
    'titular' => 'Patricia',
    'saldo' => 2000
];




foreach ($contasCorrentes as $cpf => $conta){
    echo $cpf." : ".$conta['titular'].PHP_EOL;

}

