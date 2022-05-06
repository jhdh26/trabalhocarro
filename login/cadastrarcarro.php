<?php
session_start();
include_once ("conexao.php");

$nome = filter_input (INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$ano = filter_input (INPUT_POST, 'ano', FILTER_SANITIZE_EMAIL);
$km = filter_input (INPUT_POST, 'km', FILTER_SANITIZE_EMAIL);
$preco = filter_input (INPUT_POST, 'preco', FILTER_SANITIZE_EMAIL);
$stats = filter_input (INPUT_POST, 'stats', FILTER_SANITIZE_EMAIL);

$result_carro = "INSERT INTO tab_carros (nome, ano, km, preco, stats) VALUES ('$nome', '$ano', '$km', '$preco', '$stats')";
$resultado_carro = mysqli_query($mysqli, $result_carro);

if(mysqli_insert_id($conexao)) {
    $_SESSION['msg'] = "Usuario cadastrado com sucesso";
    header("Location: paineladmin.php");
}else{
    header("Location: paineladmin.php");
}

?>