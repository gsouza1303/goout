<?php
session_start();
if(isset($_SESSION["id"])) {
  header("location: autentica.php");
} else {
  header("location: admin.php");
}
?>
