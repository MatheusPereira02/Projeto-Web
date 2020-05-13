<?php
session_start();
include_once("conexao.php");

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);


//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_usuario = "UPDATE usuarios SET  email='$email',  senha='$senha', modified=NOW() WHERE id='$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_affected_rows($conn)){
	$_SESSION['msg'] = "";
	header("Location: paginainicial.php");
}
