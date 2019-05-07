<?php 
	session_start();
	$id = $_POST['id'];
	$senha = $_POST['senha'];
	$conexao = mysqli_connect("localhost", "root", "usbw","goout") or die ('Sem conexão');
	$sql = "SELECT *
			FROM admin
			WHERE id = $id AND senha = '$senha'";
	$salva = mysqli_query($conexao,$sql);
	if(mysqli_num_rows($salva)>0){
		$_SESSION['id'] = $id;
		$_SESSION['senha'] = $senha;
	//função para verificar se existe o login dado pelo usuário em nosso sistema//

?>
<?php
$titulo = "Login";
include("header.php");
?>
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
<main role="main" class="inner cover">
    <h1 class="cover-heading text-center">Bem vindo!</h1>
	<button><a href = 'cadastra_e.php'>Cadastrar Evento</a></button>
	<button><a href = 'logout.php'>Logout</a></button>
</main>
</div>
<?php include("footer.php"); ?>
<?php
	}
	else{
		header('location: admin.php');
	}
?>
