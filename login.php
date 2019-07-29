<?php
    //iniciar a sessao
	session_start();
	
	include("layout.php");
    include("conexao.php");

	Inicio();
?>


	<center>
		<form action="confirmalogin.php" method="post">
	
			<h2>Autenticação de Usuário</h2>
			
			<hr><br>
			
			<b>Login:<b>
			<input type="text" name="login" id="Login">
			
			<br><br>
			
			<b>Senha:<b>
			<input type="password" name="senha" id="Senha" >
			<br><br>
			
			<input type="submit" value="Login">
			<a href="cadastraUsuario.php"><input type="button" value="Cadastrar"></a>
			<br><hr>
		</form>
	</center>


<?php
	//RODAPÉ
	Fim()
?>
