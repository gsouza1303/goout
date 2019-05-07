<?php 
	session_start();
	include('conexao.php');
	$titulo = "Cadastrar";
	if(isset($_SESSION['id'])){
?>	
<?php include('header.php');?>
	<div class="container">
		<div class="row">
			<div id="preview" class="col-md-6 col-sm-6 col-xs-12">
				<h1 id="nome_preview"></h1>
				<div id="data_inicial_preview"></div>
				<div id="data_final_preview"></div>
				<div id="valor_preview"></div>
				<div id="publico_alvo_preview"></div>
				<div id="descricao_preview"></div>
				<div id="foto_principal_preview"></div>
				<div id="situacao_preview"></div>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<form method = 'post' action = ''>
					<div class="form-group">
						<label for = 'id_e'>Id do Evento:</label>
						<input class="form-control" id="id_e" type = 'number' required = 'required' name = 'id' />
					</div>
					<div class="form-group">
						<label for = 'nome'>Nome do Evento:</label>
						<input class="form-control" type = 'text' name = 'nome' />
					</div>
					<div class="form-group">
						<label for = 'di'>Data inicial:</label>
						<input class="form-control" type = 'date' name = 'data' />
					</div>
					<div class="form-group">
						<label for = 'df'>Data final:</label>
						<input class="form-control" type = 'date' name = 'data_f' />
					</div>
					<div class="form-group">
						<label for = 'valor'>Valores:</label>
						R$<input class="form-control" type = 'number' name = 'valor' />
					</div>
					<div class="form-group">
						<label for = 'pa'>Público Alvo:</label>
						<input class="form-control" type = 'text' name = 'pa' />
					</div>
					<div class="form-group">
						<label for = 'd'>Descrição:</label>
						<textarea class="form-control" name = 'd'/></textarea>	
					</div>
					<div class="form-group">
						<label for = 'fp'>Foto principal:</label>
						<input class="form-control" type = 'text' name = 'fp' />	
					</div>
					<div class="form-group">
						<label for = 'S'>Situação:</label>
						<input class="form-control" type = 'number' name = 's' />
					</div>
					<input type = 'submit' value = 'Cadastrar!'/>
				</form>
			</div>
		</div>
		<button><a href = 'logout.php'>Logout</a></button>
	</form>
	<script>
	$(document).ready(function() {
		$("input[name='nome']").keyup(function() {
			var valor = $(this).val();
			$("#nome_preview").text(valor);
		});
		$("input[name='data']").change(function() {
			var valor = $(this).val();
			$("#data_inicial_preview").text(valor);
		});
		$("input[name='data_f']").change(function() {
			var valor = $(this).val();
			$("#data_final_preview").text(valor);
		});
		$("input[name='valor']").keyup(function() {
			var valor = $(this).val();
			$("#valor_preview").text(valor);
		});
		$("input[name='pa']").keyup(function() {
			var valor = $(this).val();
			$("#publico_alvo_preview").text(valor);
		});
		$("textarea[name='d']").keyup(function() {
			var valor = $(this).val();
			$("#descricao_preview").text(valor);
		});
		$("input[name='fp']").keyup(function() {
			var valor = $(this).val();
			$("#foto_principal_preview").text(valor);
		});
		$("input[name='s']").keyup(function() {
			var valor = $(this).val();
			$("#situacao_preview").text(valor);
		});
	});	
	</script>
<?php 
		if(isset($_POST['id'])){
			$id = $_POST['id']; $nome = $_POST['nome']; $di = $_POST['data']; $df = $_POST['data_f']; $v = $_POST['valor']; $pa = $_POST['pa']; $d = $_POST['d']; $fp = $_POST['fp']; $s = $_POST['s'];
			$insercao = "INSERT INTO evento(id_evento,nome_evento,data_hora_inicial,data_hora_final,valores,publico_alvo,descricao,foto_principal,situacao)
						 VALUES('$id','$nome','$di','$df','$v','$pa','$d','$fp','$s')";
			$sql_salvo = mysqli_query($conexao,$insercao);
		}
?>
<?php include('footer.php');?>
<?php 
	}else{
		echo 'Erro! Realize o login antes de acessar essa página!';
	}
?>