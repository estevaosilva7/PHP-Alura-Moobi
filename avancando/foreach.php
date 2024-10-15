<?php 

$contasCorrentes = [
    12345678910 => [
        'titular' => 'Paulo',
        'saldo' => '1200'
    ],

    12345678911 => ['titular' => 'Maria',
    'saldo' => '8000'
    ],

    12345678912 =>['titular' => 'Italo',
    'saldo' => '500'
    ]
];


foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . PHP_EOL;
}