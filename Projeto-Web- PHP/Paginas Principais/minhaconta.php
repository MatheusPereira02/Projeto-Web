<?php
include_once("protect.php");
protect();
include_once("conexao.php");

?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	</head>
    <title>Minha Conta</title>
	<body background="img/001.jpg" >
	<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-0 bg-white border-bottom shadow-sm" >
	<img src="img/002.jpg" width="30" height="30" class="d-inline-block left-top">
	<h5 class="my-1 mr-md-auto ">QUICK APOSTAS</h5>
	<a class="btn btn-outline-primary" href="administrativo.php">Pagina Inicial </a>
	
    </div>
    

    <body background="img/001.jpg">
    <div class="container">
	<div class="form-signin" style="background:#eee">			
	<div class="text-center"><h2>MINHA CONTA </h2></div><br>
				

	 <?php
$result_usuario = "SELECT * FROM usuarios WHERE id = '1'";
$resultado_usuario = mysqli_query($conn, $result_usuario);
if(($resultado_usuario) AND ($resultado_usuario->num_rows != 0)){
	?>
	<table class="table table-striped table-bordered table-hover">
		<thead>
				
				<th>Nome</th>
				<th>E-mail</th>
				<th>Senha</th>
				<th>Usuario</th>
				<th>Cpf</th>
				<th>Celular</th>
		</thead>
		<tbody>
			<?php
			while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){
				?>
				<tr>
					<td><?php echo $row_usuario['nome']; ?></td>
					<td><?php echo $row_usuario['email']; ?></td>
					<td><?php echo $row_usuario['senha']; ?></td>
					<td><?php echo $row_usuario['usuario']; ?></td>
					<td><?php echo $row_usuario['cpf']; ?></td>
					<td><?php echo $row_usuario['celular']; ?></td></br>
					<td><?php echo "<a href='edit_usuario.php?id=" . $row_usuario['id'];?> "'>Editar</a><br><hr></td>

				</tr>
				<?php
			}?>
		</tbody>
	</table>
<?php
}else{
	echo "<div class='alert alert-danger' role='alert'>Nenhum usuário encontrado!</div>";
}
	?>
		
	</div>
	</div>
	</body>
</html>