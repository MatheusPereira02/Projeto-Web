<?php
session_start();
include_once("conexao/conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$campeonato = filter_input(INPUT_POST, 'campeonato', FILTER_SANITIZE_STRING);
$timedacasa = filter_input(INPUT_POST, 'timedacasa', FILTER_SANITIZE_STRING);
$timevisitante = filter_input(INPUT_POST, 'timevisitante', FILTER_SANITIZE_STRING);
$localjogo = filter_input(INPUT_POST, 'localjogo', FILTER_SANITIZE_STRING);
$valor = filter_input(INPUT_POST, 'valor', FILTER_SANITIZE_STRING);
$datajogo = filter_input(INPUT_POST, 'datajogo', FILTER_SANITIZE_STRING);
$horario = filter_input(INPUT_POST, 'horario', FILTER_SANITIZE_STRING);



$result_usuario = "INSERT INTO usercadastrojogos (nome,campeonato, timedacasa,timevisitante,localjogo,valor,datajogo, horario, created) VALUES ('$nome', '$campeonato','$timedacasa','$timevisitante','$localjogo','$valor','$datajogo','$horario', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "";
	header("Location: listajogoscad.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Jogo não foi cadastrado com sucesso</p>";
	header("Location: cadastrarjogo.php");
}
