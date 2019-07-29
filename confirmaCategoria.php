<?php
	session_start();
	include("layout.php");
	Inicio();
	include("conexao.php");
//ler as variaveis que vieram do cliente
	$nome = trim($_POST['nome']);
	
	$sql = "insert into categorias (nome)
			values ('$nome')";
			
	$resultado = $conexao->query($sql);
	if($resultado)
	{
		echo "cadastrado com sucesso!!";
	}
	else	
	{
		echo "Erro ao cadastrar!!";
	}
	echo "<br>";
	echo "<center><a href='cadastracategoria.php'>voltar</a></center>";
	Fim();
?>