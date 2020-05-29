<?php
 
  include_once("protect.php");
  protect();
  include_once("conexao/conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Administração Site Apostas</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	</head>

<body>

	<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-0 bg-white border-bottom shadow-sm" >
	<img src="img/002.jpg" width="30" height="30" class="d-inline-block left-top">
    <h5 class="my-1 mr-md-auto ">QUICK APOSTAS</h5>
     

  <div class="container d-flex flex-column flex-md-row justify-content-between">
	<a class="py-2 d-none d-md-inline-block" href="usuarios.php">Usuarios</a>
	<a class="py-2 d-none d-md-inline-block" href="usuariosadm.php">Usuarios Adm</a>
    <a class="py-2 d-none d-md-inline-block" href="cadastrarjogo.php">Cadastrar Jogos</a>
    <a class="py-2 d-none d-md-inline-block" href="listajogoscad.php">Jogos Cadastrados</a>
    <a class="py-2 d-none d-md-inline-block" href="apostar.php">Cadastrar Aposta</a>
    <a class="py-2 d-none d-md-inline-block" href="listaposta.php">Aposta Cadastradas</a>
  </div>
  <?php
  echo "ADM ".$_SESSION['usuarioNome'];
 
?>
  <a class="btn btn-outline-primary" href="sairadm.php">Sair</a>

  
</div>    
</div>

 
</body>
</html>

