<html lang = 'PT-BR'> 
	<head>
		<meta charset = 'UTF-8'>
		<title>Admin GO OUT</title>
	</head>
	<body>
		<form method = 'post' action = 'autentica.php' />
		
		<label for = 'id'>ID:
			<input type = 'text' name = 'id' id = 'id' max_lenght = '250' required = 'required' />
		</label>
		<label for = 'senha'>Senha:
			<input type = 'password' name = 'senha' id = 'senha' required = 'required' />
		</label>
		
		<input type = 'submit' name = 'enviar' value = 'Login!' />
		
		</form>
	</body>
</html>
