<?php
session_start();
include_once("conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM usuarios WHERE id = '2'";
$resultado_usuario = mysqli_query($conn, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
  <title>Cadastrar nova senha</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/signin.css" rel="stylesheet">
	</head>
	<body background="img/001.jpg" >
		<div class="container">

		<?php
			
			require 'vendor/autoload.php';

			$from = new SendGrid\Email(null, "quickapostas@hotmail.com");
			$subject = "Quick Apostas - Redefinição de senha";
			$to = new SendGrid\Email(null, "mpg-sg@hotmail.com");
			$content = new SendGrid\Content( "text/html", "Olá Matheus, <br><br><h2>Senha alterada com sucesso!</h2>
			<h3>caso não foi você que trocou  aqui está o link para você cadastrar uma nova sua senha: </br> http://localhost/Projeto-Web/paginacadastrarsenha.php </h3>
			<hr> <br><br><br> <br>");
			$mail = new SendGrid\Mail($from, $subject, $to, $content);
			
			//Necessário inserir a chave
			$apiKey = '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';
			$sg = new \SendGrid($apiKey);
	
			$response = $sg->client->mail()->send()->post($mail);
			?>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
			<body class="text-center">
			<div class="form-signin" style="background:#eeee">
				<img class="mb-10" src="img/002.jpg" alt="" width="200" height="200"><h5 class="my-5 mr-md-auto"><a href="paginainicial.php"class="btn btn-light" role="button" aria-pressed="true" >QUICKAPOSTAS</a></h5>
			<h1 class="h3 mb-3 font-weight-normal">Cadastrar nova senha </h1><br>
			<form method="POST" action="proc_edit_usuario1.php">
			<input type="hidden" name="id" value="<?php echo $row_usuario['id']; ?>">
			<input type="text" id="token" name="token" placeholder="$2y$10$d8Hpwwj/DENEW4sBuUDvUuCw4/2QgEoWvs8YlAXASltHqw5w7vKDm" class="form-control" disabled>
			<input type="email" name="email" placeholder="Digite o seu e-mail" class="form-control">
			<input type="password" name="senha" placeholder="Digite a senha"  class="form-control"><br>
			
			
			<input type="submit" value="Cadastrar nova senha" class="btn btn-primary btn-sm" role="button" aria-pressed="false">
		</form>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>