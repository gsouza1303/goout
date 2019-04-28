<?php
$titulo = "Login";
include("header.php");
?>
<form class="form-signin" action="autentica.php" method="post">
  <h1 class="h3 mb-3 font-weight-normal text-center">Faça o login.</h1>
  <label for="inputId" class="sr-only">Id</label>
  <input name="id" type="number" id="inputId" class="form-control" placeholder="Id" required autofocus>
  <label for="inputPassword" class="sr-only">Senha</label>
  <input name="senha" type="password" id="inputPassword" class="form-control" placeholder="Senha" required>
  <button class="btn btn-lg btn-dark btn-block" type="submit">Logar</button>
</form>
<?php include("footer.php"); ?>
