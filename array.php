<?php

$dados = [
    'nome' => 'Pedro',
    'estado' => 'Bahia',
    'idade' => '25',
];

$dados2 = [
    
    'profissão' => 'Engenheiro',
    'nacionalidade' => 'Brasileira',
];


$dadosCompletos = array_merge($dados, $dados2);

var_dump($dadosCompletos);



