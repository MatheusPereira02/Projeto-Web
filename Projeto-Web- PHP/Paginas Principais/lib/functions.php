<?php
	function verifica_dados($con){
		if(isset($_POST['env']) && $_POST['env'] == "form"){
			$email = addslashes($_POST['email']);
			$sql = $con->prepare("SELECT * FROM usuarios WHERE email = ?");
			$sql->bind_param("s", $email);
			$sql->execute();
			$get = $sql->get_result();
			$total = $get->num_rows;

			if($total > 0){
				$dados = $get->fetch_assoc();
				add_dados_recover($con, $email);
			}else{

			}
		}
	}

	function add_dados_recover($con, $email){
		$rash = md5(rand());
		$sql = $con->prepare("INSERT INTO recover_solicitation (email, rash) VALUES (?, ?)");
		$sql->bind_param("ss", $email, $rash);
		$sql->execute();

	}

	
?>