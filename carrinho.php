<?php
   session_start();
   include("layout.php");
   
   Inicio();
   include("conexao.php");
   //Verifica se a sessao existe.
    if(isset($_SESSION['Carrinho']))
    {
		$Indice = $_SESSION['Indice'];
		$Carrinho = $_SESSION['Carrinho'];
		$subTotal = 0;
						for($i=0; $i < $Indice; $i++)
				{
				   $ID = $Carrinho[$i];
				   $sql = "select * from produtos 
						   where  cod_produto ='$ID'";	   
					$resultado = $conexao->query($sql);
					$linha = $resultado->fetch_object();

				$subTotal = $subTotal +  (float) $linha->valor;}
		echo "<div class=\"panel panel-default\">
		<div class=\"panel-heading\">Produtos</div>
		<div class=\"panel-body\">";
		
		echo "<table border='1' width='96%' align='center'>";
		echo "<table>
			<caption>Carrinho de Compras</caption>
			<thead>
				  <tr>
					<th width='244'>Produto</th>
					<th width='89'>Preço</th>
					<th width='104'>Remover</th>
					<th width='200'>SubTotal: R$ ". number_format((float)$subTotal, 2, '.', '') ." </th>
				  </tr>
			</thead>
			<form action='?acao=up' method='post'>
				<tfoot>";

				for($i=0; $i < $Indice; $i++)
				{
				   $ID = $Carrinho[$i];
				   $sql = "select * from produtos 
						   where  cod_produto ='$ID'";	   
					$resultado = $conexao->query($sql);
					$linha = $resultado->fetch_object();

					$subTotal = $subTotal +  (float) $linha->valor;
					echo "
					<tr>
					  <td><img src='./produtos/$linha->foto_principal' class='foto_carrinho'></td>
					  <td>$linha->valor</td>
					 
					  <td colspan='5'><a href='dlt_carrinho.php?ID=$linha->cod_produto'>Deletar Item</a></td>
				    </tr>";
				}//fecha o for

			echo "</tfoot>
			</form>
				</table>";

			 echo "</table>";
		
		echo "</table>";				

		echo "<center><td colspan='5'><a href='index.php'>Continuar Comprando</a></td></center>";
		echo "</div>
			</div>
			</div>";
	}
	else
	{
	   echo "Não há itens no carrinho";
	}
    Fim();
	
?>