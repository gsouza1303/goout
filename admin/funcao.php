<?php
	function autentica (){
		session_start();
		$id = $_POST['id'];
		$senha = $_POST['senha'];
		$conexao = mysqli_connect("localhost", "usbw", "root","goout");
		$sql = "SELECT *
				FROM admin
				WHERER 'id' = $id AND 'senha' = '$senha'";
		$salva = mysqli_query($conexao,$sql);
		if(mysql_num_rows($salva)>0){
			$_SESSION['id'] = $id;
			$_SESSION['senha'] = $senha;
			header('location: autentica.php');
		}
		else{
			unset($_SESSION['id']);
			unset($_SESSION['senha']);
			header('location: admin.php');
		}

	}//função para verificação de login//
?>
