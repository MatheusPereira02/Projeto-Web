<!DOCTYPE html>
<html lang="pt-br">
	<head>
  <title>Redefinição da senha</title>
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

			session_start();
			if(!empty($_SESSION['id'])){
			  echo "" .$_SESSION['email']."</br><!---->0,00 BRL<!----> </br>";
			}
			$from = new SendGrid\Email(null, "mpg-sg@hotmail.com");
			$subject = "Quick Apostas - Redefinição de senha";
			$to = new SendGrid\Email(null, "quickapostas@hotmail.com");
			$content = new SendGrid\Content( "text/html", "Olá Matheus, <br><br><h2>Senha alterada com sucesso!</h2>
			<h3>caso não foi você que trocou  aqui está o link para você cadastrar uma nova sua senha: </br> http://localhost/paginaredefini%C3%A7%C3%A3osenha.php </h3>
			<hr> <br><br><br> <br>");
			$mail = new SendGrid\Mail($from, $subject, $to, $content);
			
			//Necessário inserir a chave
			$apiKey = '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';
			$sg = new \SendGrid($apiKey);
	
			$response = $sg->client->mail()->send()->post($mail);
			?>
				<body class="text-center">
				<?php
					if(isset($_SESSION['msg'])){
						echo $_SESSION['msg'];
						echo $_SESSION['msg'];
						
					}
          ?>
				<div class="form-signin" style="background:#000000;">
				<img class="mb-10" src="img/002.jpg" alt="" width="200" height="200"><h5 class="my-5 mr-md-auto"><a href="paginainicial.php"class="btn btn-light" role="button" aria-pressed="true" >QUICKAPOSTAS</a></h5>
				<h1 class="h3 mb-3 font-weight-normal">Redefinição de senha </h1><br>
				<form method="POST" action="paginaredefiniçãosenha.php">
				<input type="text" id="token" name="token" placeholder="$2y$10$d8Hpwwj/DENEW4sBuUDvUuCw4/2QgEoWvs8YlAXASltHqw5w7vKDm" class="form-control" disabled>
				<input type="text" name="email"  id="email" placeholder="Digite o e-mail" class="form-control" maxlength="50"  required>
                <input type="password" id="senha" name="senha" placeholder="Digite sua senha" class="form-control"></br>
                <input type="submit" value="Cadastrar nova senha " class="btn btn-primary btn-sm" role="button" aria-pressed="false">
					
					
				</form>
				</div>
			</div>			
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>