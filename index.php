<?php
    //iniciar a sessao
	session_start();
	
	include("layout.php");
    include("conexao.php");

	Inicio("true");
?>


<?php
	//DIV CONTEUDO

	$sql = "select * from produtos 
			where disponivel='S'";

	if(isset($_GET['cat']))
	{
		$sql .= " and cod_categoria = " . $_GET['cat'];
	}else{
		$sql .= " and destaque='S' ";
	}
	
	$resultado   = $conexao->query($sql);
	
	while($linha = $resultado->fetch_object())
	{
	    echo "<div class='produto'>";
		echo "<a href='detalhes.php?ID=$linha->cod_produto'><img src='./produtos/$linha->foto_principal' class='img_produto'></a>";
		echo "<h3> $linha->nome  </h3>";
		echo "<span class='valor'>R$ $linha->valor</span>";
		echo "<br>";
		echo "<br>";
		echo "<a href='add_carrinho.php?ID=$linha->cod_produto'><img src='./images/btn_comprar.png'></a>";
		echo "</div>";
	}
?>

<?php
	//RODAPÉ
	Fim()
?>
