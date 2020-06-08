<?php
  session_start();
  header("Location: ../Pagina Administrativa/administração.php")
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
  <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/signin.css" rel="stylesheet">

    <title>Area Restrita</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
  </head>

  <body>

    <div class="container">
    <body class="text-center">
			<img class="mb-10" src="img/002.jpg" alt="" width="200" height="200"> <h5 class="my-5 mr-md-auto font-weight-normal"><b>QUICK APOSTAS</b></h5><br>
      <form class="form-signin" method="POST" action="validaloginadm.php">
        <h2 class="form-signin-heading">Área Administrativa</h2>
        <label for="inputEmail" class="sr-only">Usuário</label>
        <input type="email" name="txt_usuario" id="inputEmail" class="form-control" placeholder="Usuário" required autofocus></br>
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" name="txt_senha" id="inputPassword" class="form-control" placeholder="Senha" required></br>
        <button class="btn btn-lg btn-danger btn-block" type="submit">Acessar</button>
        
		<p class="text-center text-danger">
			<?php if(isset($_SESSION['loginErro'])){
				echo $_SESSION['loginErro'];
				unset ($_SESSION['loginErro']);
			}?>
		</p>
		<p class="text-center text-success">
			<?php if(isset($_SESSION['loginDeslogado'])){
				echo $_SESSION['loginDeslogado'];
				unset ($_SESSION['loginDeslogado']);
			}?>
		</p>
      </form>
    </div> 
  </body>
</html>
