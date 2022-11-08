<?php

$numero = (int) readline('Informe um número');

if ($numero >= 100 && $numero <= 200) {
    echo "O número {$numero} está entre 100 e 200";
} else {
    echo "O número {$numero} não está entre 100 e 200";
}