<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$timedacasa = filter_input(INPUT_POST, 'timedacasa', FILTER_SANITIZE_STRING);
$timedefora = filter_input(INPUT_POST, 'timedefora', FILTER_SANITIZE_STRING);
$total = filter_input(INPUT_POST, 'total', FILTER_SANITIZE_STRING);
$numero = filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_STRING);



$result_usuario = "INSERT INTO userregistroaposta (nome, timedacasa, timedefora,total,numero, created) VALUES ('$nome', '$timedacasa','$timedefora','$total','$numero', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Aposta registrada com sucesso!</p>";
	header("Location: apostar.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Aposta não registrada com sucesso!</p>";
	header("Location: apostar.php");
}
