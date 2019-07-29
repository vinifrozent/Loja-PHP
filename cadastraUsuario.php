			<?php
		session_start();
		include("layout.php");
		Inicio();
		echo"
		<center>
		<hr>
		<h2><i>Cadastro de Usuário</i></h2>
		<form action='confirmaUsuario.php' method='post'>
		
			Digite seu nome:
			<input type='text' name='nome' size='30' maxlength='100'><br><br>
			Digite o Login:
			<input type='text' name='login' size='30' maxlength='20'><br><br>
			Digite a senha:
			<input type='password' name='senha' size='30' maxlength='20' ><br><bt>
			<input type='submit' value='Confirmar'>

		</form>
		<hr>
		</center>";
		Fim();

		?>