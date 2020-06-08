
<?php
  include_once("conexao.php");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Minhas Apostas</title>
    
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
  <a class="btn btn-outline-primary" href="administrativo.php">Pagina Inicial </a>
  </div>

  <div class="ui container" style="margin-top: 60px;margin-bottom: 60px;">
  <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-0 bg-white border-bottom shadow-sm" >
    <div class="ui large header"> <p class="font-weight-bolder"> MINHAS APOSTAS </div>
    </div>
    
    <div class="card">
    <div class="column" style="display: flex;  justify-content: space-around;">
           
            <img src="img/flamengo.png" width="180" height="100">
            <img src="img/vasco.png" width="180" height="100">

            <?php
		
		$pagina_atual = filter_input(INPUT_GET,'pagina', FILTER_SANITIZE_NUMBER_INT);		
		$pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
		
		
		$qnt_result_pg = 1;
		
		$inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;
		
		$result_usuarios = "SELECT * FROM usercadastrojogos LIMIT $inicio, $qnt_result_pg";
		$resultado_usuarios = mysqli_query($conn, $result_usuarios);
		while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
			echo "Campeonato: " . $row_usuario['campeonato'] . "<br>";
			echo "Timedacasa: " . $row_usuario['timedacasa'] . "<br>";
			echo "Timevisitante: " . $row_usuario['timevisitante'] . "<br>";
			echo "Local Jogo: " . $row_usuario['localjogo'] . "<br>";
			echo "Data do Jogo: " . $row_usuario['datajogo'] . "<br>";
			echo "Horário: " . $row_usuario['horario'] . "<br>";
			echo "valor: " . $row_usuario['valor'] . "<br></br>";
		}
		?>		
    

          </div>
          
          <?php

          
$result_usuario = "SELECT * FROM userregistroaposta limit 1";
$resultado_usuario = mysqli_query($conn, $result_usuario);
if(($resultado_usuario) AND ($resultado_usuario->num_rows != 0)){
	?>
	<table class="table table-striped table-bordered table-hover">
		<thead>
				
				
				<th>FLAMENGO</th>
				<th>VASCO</th>
				<th>Aposta</th>
				<th>Valor </th>
			
		</thead>
		<tbody>
			<?php
			while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){
				?>
				<tr>
					<td><?php echo $row_usuario['timedacasa']; ?></td>
					<td><?php echo $row_usuario['timedefora']; ?></td>
					<td><?php echo $row_usuario['numero']; ?></td>
					<td><?php echo $row_usuario['total']; ?></td>
					
				

				</tr>
				<?php
			}?>
		</tbody>
	</table>
<?php
}else{
}
	?>
        

    <div class="card">
    <div class="column" style="display: flex;  justify-content: space-around;">
           
            <img src="img/fluminense.jpg" width="180" height="100">
            <img src="img/botafogo.jpg" width="180" height="100">

            <?php
		
		$pagina_atual = filter_input(INPUT_GET,'pagina', FILTER_SANITIZE_NUMBER_INT);		
		$pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
		
		
		$qnt_result_pg = 1;
		
		$inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;
		
		$result_usuarios = "SELECT * FROM usercadastrojogos WHERE id = '2' LIMIT $inicio, $qnt_result_pg";
		$resultado_usuarios = mysqli_query($conn, $result_usuarios);
		while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
			echo "Campeonato: " . $row_usuario['campeonato'] . "<br>";
			echo "Timedacasa: " . $row_usuario['timedacasa'] . "<br>";
			echo "Timevisitante: " . $row_usuario['timevisitante'] . "<br>";
			echo "Local Jogo: " . $row_usuario['localjogo'] . "<br>";
			echo "Data do Jogo: " . $row_usuario['datajogo'] . "<br>";
			echo "Horário: " . $row_usuario['horario'] . "<br>";
			echo "valor: " . $row_usuario['valor'] . "<br></br>";
		}
		?>		
    

          </div>
          
          <?php

          
$result_usuario = "SELECT * FROM userregistroaposta WHERE id = '14'";
$resultado_usuario = mysqli_query($conn, $result_usuario);
if(($resultado_usuario) AND ($resultado_usuario->num_rows != 0)){
	?>
	<table class="table table-striped table-bordered table-hover">
		<thead>
				
				
				<th>FLUMINENSE</th>
				<th>BOTAFOGO</th>
				<th>Aposta</th>
				<th>Valor </th>
			
		</thead>
		<tbody>
			<?php
			while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){
				?>
				<tr>
					<td><?php echo $row_usuario['timedacasa']; ?></td>
					<td><?php echo $row_usuario['timedefora']; ?></td>
					<td><?php echo $row_usuario['numero']; ?></td>
					<td><?php echo $row_usuario['total']; ?></td>
					
				

				</tr>
				<?php
			}?>
		</tbody>
	</table>
<?php
}else{
}
	?>


<div class="card">
    <div class="column" style="display: flex;  justify-content: space-around;">
           
            <img src="img/avaí.jpg" width="180" height="100">
            <img src="img/fortaleza.png" width="180" height="100">

            <?php
		
		$pagina_atual = filter_input(INPUT_GET,'pagina', FILTER_SANITIZE_NUMBER_INT);		
		$pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
		
		
		$qnt_result_pg = 1;
		
		$inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;
		
		$result_usuarios = "SELECT * FROM usercadastrojogos WHERE id = '3' LIMIT $inicio, $qnt_result_pg";
		$resultado_usuarios = mysqli_query($conn, $result_usuarios);
		while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
			echo "Campeonato: " . $row_usuario['campeonato'] . "<br>";
			echo "Timedacasa: " . $row_usuario['timedacasa'] . "<br>";
			echo "Timevisitante: " . $row_usuario['timevisitante'] . "<br>";
			echo "Local Jogo: " . $row_usuario['localjogo'] . "<br>";
			echo "Data do Jogo: " . $row_usuario['datajogo'] . "<br>";
			echo "Horário: " . $row_usuario['horario'] . "<br>";
			echo "valor: " . $row_usuario['valor'] . "<br></br>";
		}
		?>		
    

          </div>
          
          <?php

          
$result_usuario = "SELECT * FROM userregistroaposta WHERE id = '15'";
$resultado_usuario = mysqli_query($conn, $result_usuario);
if(($resultado_usuario) AND ($resultado_usuario->num_rows != 0)){
	?>
	<table class="table table-striped table-bordered table-hover">
		<thead>
				
				
				<th>AVAÍ</th>
				<th>FORTALEZA</th>
				<th>Aposta</th>
				<th>Valor </th>
			
		</thead>
		<tbody>
			<?php
			while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){
				?>
				<tr>
					<td><?php echo $row_usuario['timedacasa']; ?></td>
					<td><?php echo $row_usuario['timedefora']; ?></td>
					<td><?php echo $row_usuario['numero']; ?></td>
					<td><?php echo $row_usuario['total']; ?></td>
					
				

				</tr>
				<?php
			}?>
		</tbody>
	</table>
<?php
}else{
}
	?>

    
<div class="card">
    <div class="column" style="display: flex;  justify-content: space-around;">
           
            <img src="img/gremio.png" width="180" height="100">
            <img src="img/corinthians.png" width="180" height="100">

            <?php
		
		$pagina_atual = filter_input(INPUT_GET,'pagina', FILTER_SANITIZE_NUMBER_INT);		
		$pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
		
		
		$qnt_result_pg = 1;
		
		$inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;
		
		$result_usuarios = "SELECT * FROM usercadastrojogos WHERE id = '4' LIMIT $inicio, $qnt_result_pg";
		$resultado_usuarios = mysqli_query($conn, $result_usuarios);
		while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
			echo "Campeonato: " . $row_usuario['campeonato'] . "<br>";
			echo "Timedacasa: " . $row_usuario['timedacasa'] . "<br>";
			echo "Timevisitante: " . $row_usuario['timevisitante'] . "<br>";
			echo "Local Jogo: " . $row_usuario['localjogo'] . "<br>";
			echo "Data do Jogo: " . $row_usuario['datajogo'] . "<br>";
			echo "Horário: " . $row_usuario['horario'] . "<br>";
			echo "valor: " . $row_usuario['valor'] . "<br></br>";
		}
		?>		
    

          </div>
          
          <?php

          
$result_usuario = "SELECT * FROM userregistroaposta WHERE id = '16'";
$resultado_usuario = mysqli_query($conn, $result_usuario);
if(($resultado_usuario) AND ($resultado_usuario->num_rows != 0)){
	?>
	<table class="table table-striped table-bordered table-hover">
		<thead>
				
				
				<th>GREMIO</th>
				<th>CORINTHIANS</th>
				<th>Aposta</th>
				<th>Valor </th>
			
		</thead>
		<tbody>
			<?php
			while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){
				?>
				<tr>
					<td><?php echo $row_usuario['timedacasa']; ?></td>
					<td><?php echo $row_usuario['timedefora']; ?></td>
					<td><?php echo $row_usuario['numero']; ?></td>
					<td><?php echo $row_usuario['total']; ?></td>
					
				

				</tr>
				<?php
			}?>
		</tbody>
	</table>
<?php
}else{
}
	?>

   
                          


  </body>
  </html>