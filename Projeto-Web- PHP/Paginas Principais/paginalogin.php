<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
  <title>Pagina Login</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/signin.css" rel="stylesheet">
	</head>
	<body background="img/001.jpg" >
		<div class="container">
			<div class="form-signin" style="background:#eeee">
				<?php
					if(isset($_SESSION['msg'])){
						echo $_SESSION['msg'];
						unset($_SESSION['msg']);
					}
					if(isset($_SESSION['msgcad'])){
						echo $_SESSION['msgcad'];
						unset($_SESSION['msgcad']);
						
					}
				?>
				<body class="text-center">
				<img class="mb-10" src="img/002.jpg" alt="" width="200" height="200"> <h5 class="my-5 mr-md-auto font-weight-normal"><b>QUICK APOSTAS</b></h5><br>
				<h1 class="h3 mb-3 font-weight-normal">LOGIN</h1><br>
				<form method="POST" action="paginavalida.php">
					<!--<label>Usuário</label>-->
					<input type="text" name="usuario" placeholder="Digite o seu usuário" class="form-control" maxlength="25" autofocus="" required=""><br>

					<!--<label>Senha</label>-->
					<input type="password" name="senha" placeholder="Digite a sua senha" class="form-control">
					
					<input type="checkbox" value="remember-me">Lembre-me<br><br>

					<input type="submit" name="btnLogin" value="Logar" class="btn btn-primary btn-sm">

					<a href="paginaesqueciminhasenha.php"class="btn btn-primary btn-sm" role="button" aria-pressed="true" >Esqueci minha senha</a>

					
					
				</form>
			</div>
		</div>			
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>