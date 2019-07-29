<?php
    //iniciar a sessao
	session_start();
	
	include("layout.php");
    include("conexao.php");

	Inicio();
?>

		<center>
			<hr>
			<h2><i>Cadastro de produto</i></h2>
				<form action='confirmaProduto.php' method="post" enctype="multipart/form-data">
				
					Digite o nome do produto:
					<input type='text' name='nome' size='30' maxlength='100'><br><br>
					Digite o valor do produto:
					<input type='text' name='valor' size='30' maxlength='10'><br><br>
					O produto vai estar em destaque no site?<br><br>
					<input type="radio" name="disponivel" value="S" checked> Sim
  					<input type="radio" name="disponivel" value="N"> Não <br><br>
  					Quantidade de produtos disponivel no estoque:
					<input type="number" name="quantidade" min="1" max="20"><br><br>
					Selecione a categoria do produto:
					<select name="categoria">
					<?php
			    
					    $sql="select * from categorias order by nome";
						$resultado = $conexao->query($sql);
						while($linha = $resultado->fetch_object())
						{
						 echo utf8_encode("<option value='$linha->cod_categoria'>$linha->nome</option>");
						}
					 
					 ?>	
					</select><br><br/>
					Descrição do Produto:
					<input type="text" cols="10" rows="50" style="width:200px; height:50px;" name="descricao"><br><br>
					Insira a foto do produto:<br><br>
					<input type="file" name="foto_principal"><br><br>
					<input type='submit' value='Confirmar' name="submit">
				</form>
			<hr>
		</center>

<?php
	//RODAPÉ
	Fim()
?>