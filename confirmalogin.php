
		<center>
		<?php
			include("layout.php");
			if (isset($_POST['login']) && isset($_POST['senha']))
			{
				$login = trim($_POST['login']);
				$senha = trim($_POST['senha']);
				
				include("conexao.php");
				
				$SQL = "Select id, nome, senha from usuario where situacao='Ativo' and login='$login'";
				
				$resultado = $conexao->query($SQL);
					if(mysqli_num_rows($resultado) == 1)
					{
						$linha = $resultado->fetch_object();
						$ID = $linha->id;
						$Nome_Completo = $linha->nome;
						$SenhaBD = $linha->senha;
						
						if($senha == $SenhaBD)
						{
							session_start();
							$_SESSION['ID'] = $ID;
							$_SESSION["Nome_Completo"] = $Nome_Completo;
							$_SESSION["Logado"] = "sim";
							
							header("Location:index.php");
						}
						else
						{
							/*include("layout.php");
							echo "<br>";
							echo "<h2>Senha Incorreta!</h2> <br>";
							echo "<br><br>";
							echo "<a href='login.php'>Tentar novamente!</a>";*/
							header("Location:senhaIncorreta.php");
						}
					}
					else
					{	
						/*echo "<br>";
						echo "<h2>Usuário Incorreto!</h2>";
						echo "<br><br>";
						echo "<a href='login.php'>Tentar novamente!</a>";*/
						header("Location:usuarioIncorreto.php");
						
					}	
			}
			else
			{
				header("Location:index.php");
			}
		?>
		</center>
