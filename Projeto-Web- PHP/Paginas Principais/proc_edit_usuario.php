<?php
session_start();
include_once("conexao.php");

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$celular = filter_input(INPUT_POST, 'celular', FILTER_SANITIZE_NUMBER_INT);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_NUMBER_INT);

$result_usuario = "UPDATE usuarios SET  email='$email',  celular='$celular', cpf='$cpf', modified=NOW() WHERE id='$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_affected_rows($conn)){
	$_SESSION['msg'] = "";
	header("Location: minhaconta.php");
}else{
	$_SESSION['msg'] = "";
	header("Location: minhaconta.php?id=$id");
}
