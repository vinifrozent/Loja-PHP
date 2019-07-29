<?php
	include("layout.php");
	include("conexao.php");
	
	Inicio();
	
	$ID = $_GET['ID'];
	
	$sql = "select * from produtos where cod_produto='$ID'";
	$resultado = $conexao->query($sql);
	$linha = $resultado->fetch_object();
	
	echo "<h1> $linha->nome</h1>";
	echo "<img src='./produtos/$linha->foto_principal'>";
	echo "$linha->descricao";
	echo "<br>";
	echo "<a href='add_carrinho?ID=$linha->cod_produto'>Adicionar no Carrinho</a>";
	
	Fim();

?>