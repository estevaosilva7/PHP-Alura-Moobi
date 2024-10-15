<?php

$conta1 = [
    'titular' => 'Paulo',
    'saldo' => '1200'
];

$conta2 = ['titular' => 'Maria',
    'saldo' => '8000'
];

$conta3 = ['titular' => 'Italo',
    'saldo' => '500'
];

$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contasCorrentes); $i++) {
    echo $contasCorrentes[$i] ['titular'] . PHP_EOL;
}