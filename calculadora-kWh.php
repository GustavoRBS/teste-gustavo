<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    if (!is_numeric($_GET['qtdDias']) || !is_numeric($_GET['qtdHoras']) || !is_numeric($_GET['potencia'])) {
        throw new Exception('Não foi possível interpretar a requisição. Verifique a sintaxe das informações enviadas.');
    }
    if (!$_GET['qtdDias']) {
        throw new Exception('Quantidade de dias não pode estar vazia.');
    }
    if (!$_GET['qtdHoras']) {
        throw new Exception('Quantidade de horas não pode estar vazia.');
    }
    if (!$_GET['potencia']) {
        throw new Exception('Potencia não pode estar vazia.');
    }

    $valorKHw = 1.10;
    $valorTotal = ($_GET['potencia'] * ($_GET['qtdHoras'] * $_GET['qtdDias'])) / 1000 * $valorKHw;

    $data[] = array(
        'valorTotal' => $valorTotal
    );
    echo (json_encode($data));
} else {
    echo 'Ocorreu um erro.';
}
