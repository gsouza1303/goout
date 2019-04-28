<?php 
	session_start();
	$id = $_POST['id'];
	$senha = $_POST['senha'];
	$conexao = mysqli_connect("localhost", "root", "usbw","goout") or die ('Sem conexão');
	$sql = "SELECT *
			FROM admin
			WHERE login = '$id' AND senha = '$senha'";
	$salva = mysqli_query($conexao,$sql);
	if(mysqli_num_rows($salva)>0){
		$_SESSION['id'] = $id;
		$_SESSION['senha'] = $senha;
	//função para verificar se existe o login dado pelo usuário em nosso sistema//


?>
		<html lang = 'PT-BR'> 
			<head>
				<meta charset = 'UTF-8'>
				<title>Autenticação</title>
			</head>
			<body>
				<?='Bem vindo '. $_SESSION['id'] . '!';?>
			</body>
		</html>
<?php
	}
	else{
		header('location: admin.php');
	}
?>
