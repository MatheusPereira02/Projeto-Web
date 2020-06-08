<?php
session_start();
include_once("protect.php");
protect();
include_once("conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM usuarios WHERE id = '$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		
		<title>Editar Minha Conta</title>		
	</head>

	<body background="img/001.jpg" >
	<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-0 bg-white border-bottom shadow-sm" >
	<img src="img/002.jpg" width="30" height="30" class="d-inline-block left-top">
    <h5 class="my-1 mr-md-auto ">QUICK APOSTAS</h5>
	</div>
	<div class="container">
	<div class="form-signin" style="background: #eeee">
	<div class="text-center">
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="proc_edit_usuario.php">
			<input type="hidden" name="id" value="<?php echo $row_usuario['id']; ?>">
			
			<label>Nome: </label>
			<input type="text" name="nome"  disabled value="<?php echo $row_usuario['nome']; ?>"><br><br>
			
			<label>E-mail: </label>
			<input type="email" name="email"   value="<?php echo $row_usuario['email']; ?>"><br><br>

			<label>Senha:</label>
			<input type = "password" name= "senha"  disabled value="<?php echo $row_usuario['senha']; ?>"><br><br>

			<label>Usuário:</label>
			<input type = "text" name= "usuario" disabled value="<?php echo $row_usuario['usuario']; ?>"><br><br>

			<label>Cpf:</label>
			<input type = "text" name= "cpf"  value="<?php echo $row_usuario['cpf']; ?>"><br><br>


			<label>Celular:</label>
			<input type = "text" name= "celular" value="<?php echo $row_usuario['celular']; ?>"><br><br>
			
			<input type="submit" value="Editar">
		</form>
	</body>
</html>