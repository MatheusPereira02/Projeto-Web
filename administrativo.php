<?php
session_start();
if(!empty($_SESSION['id'])){
	echo "Bem vindo ".$_SESSION['nome']."<br>";
	
	echo "<a href='pag1.php'>Clique aqui </a>";
}else{
	$_SESSION['msg'] = "<div class='alert alert-danger'>Área restrita!</div>";
	header("Location: login.php");	
}
