<?php

$numero1 = (int) readline('Informe o primerio número');
$numero2 = (int) readline('Informe o segundo número');

if ($numero1 == $numero2) {
    echo "Os número informados são iguais";
} else {
    echo 'Os números são diferentes';
    if ($numero1 > $numero2) {
        echo "O número {$numero1} é maior que o número {$numero2}";
    } else {
        echo "O número {$numero2} é maior que o número {$numero1}";
    }
}