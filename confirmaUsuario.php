<?php
	session_start();
	include("layout.php");
	Inicio();
	include("conexao.php");
//ler as variaveis que vieram do cliente
	$nome = trim($_POST['nome']);
	$login = trim($_POST['login']);
	$senha = trim($_POST['senha']);
	
	$sql = "insert into usuario (nome, login, senha, situacao)
			values ('$nome','$login','$senha','Ativo')";
			
	$resultado = $conexao->query($sql);
	if($resultado)
	{
		echo "cadastrado com sucesso!!";
	}
	else	
	{
		echo"<center>";
		echo "Erro ao cadastrar!!<br><br>";
		echo "Nome de login já está sendo usado";
		echo"</center>";
	}
	echo "<br>";
	echo "<center><a href='login.php'>voltar</a></center>";
	Fim();
?>