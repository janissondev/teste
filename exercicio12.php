<?php

$valorFabrica = (float) readline('Informe o valor de fabrica do carro');

$percentualDistribuidor = 0.28;
$impostos = 0.45;

function calcularCustos($valorFabrica, $percentualDistribuidor, $impostos) {
    $custoParcial = $valorFabrica * $impostos + $valorFabrica;
    $custoFinal = $custoParcial * $percentualDistribuidor + $custoParcial;
    return $custoFinal;
}

echo "O custo final é de R$ ". '' .calcularCustos($valorFabrica, $percentualDistribuidor, $impostos);