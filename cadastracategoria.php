<?php
    //iniciar a sessao
	session_start();
	
	include("layout.php");
    include("conexao.php");

	Inicio();
?>

		<center>
			<hr>
			<h2><i>Cadastro de categorias</i></h2>
				<form action='confirmaCategoria.php' method='post'>
				
					Digite o nome da categoria:
					<input type='text' name='nome' size='30' maxlength='100'><br><br>
					<input type='submit' value='Confirmar'>
				</form>
			<hr>
		</center>

<?php
	//RODAPÉ
	Fim()
?>