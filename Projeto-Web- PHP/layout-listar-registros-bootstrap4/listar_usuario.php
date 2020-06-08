<?php
include_once "conexao.php";

//consultar no banco de dados
$result_usuario = "SELECT * FROM usuarios ORDER BY id DESC";
$resultado_usuario = mysqli_query($conn, $result_usuario);


//Verificar se encontrou resultado na tabela "usuarios"
if(($resultado_usuario) AND ($resultado_usuario->num_rows != 0)){
	?>
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				
				<th>Nome</th>
				<th>E-mail</th>
				<th>Senha</th>
				<th>Usuario</th>
				<th>Cpf</th>
				<th>Celular</th>
			</tr>
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
					<td><?php echo $row_usuario['celular']; ?></td>

				</tr>
				<?php
			}?>
		</tbody>
	</table>
<?php
}else{
	echo "<div class='alert alert-danger' role='alert'>Nenhum usuário encontrado!</div>";
}
