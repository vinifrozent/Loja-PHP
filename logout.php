<?php
	session_start();
	
	session_unset("Logado");
	session_unset("Nome_Completo");
	
	session_destroy();
	
	header("Location:login.php");
	
?>