<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<meta charset="utf-8">
	
	</head>
	<body background="img/001.jpg" >
	<div class="container">
	<div class="form-signin" style="background: #eeee">
	<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-0 bg-white border-bottom shadow-sm" >
	<img src="img/002.jpg" width="30" height="30" class="d-inline-block left-top">
 	 <h5 class="my-1 mr-md-auto ">QUICK APOSTAS</h5>
	</div>
	<div class="text-center">
	<h1>Cadastrar Jogo</h1>
	</br>

		
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
	
		<form method="POST" action="processaaposta.php">
			<label>Nome: </label></br>
			<input type="text" name="nome" placeholder="XXXX-XXXX" ><br><br>


			<label>Time da Casa: </label></br>
			<input type="text" name="timedacasa" placeholder="Digite o time da casa"><br><br>
			
			<label>Time Visitante: </label></br>
			<input type="text" name="timevisitante" placeholder="Digite o time visitante"><br><br>


			<label>Valor: </label></br>
			<input type="text" name="valor" placeholder="Digite o valor do jogo"><br><br>

			
			<input type="submit" value="Cadastrar"class=" btn btn-primary">
		</form>
	</br>
	</body>
</html>