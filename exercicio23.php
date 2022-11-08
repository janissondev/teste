<?php

$numero = (int) readline('Informe um número');

if ($numero > 80) {
    echo "O numero {$numero} é maior que 80";
} else if ($numero < 25) {
    echo "O número {$numero} é menor que 25";
} else if ($numero == 40) {
    echo "O número é 40";
} else {
    echo 'número não reconhecido';
}