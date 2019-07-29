<?php
	session_start();

	$ID = $_GET['ID'];
	$i = 0;

	   if(isset($_SESSION['Carrinho']))
   {
      $Indice = $_SESSION['Indice'];
	  $Carrinho = $_SESSION['Carrinho'];
   }
   else
   {
	  //não tem carrinho ainda, cria um vazio
	  $Indice = 0;
	  $Carrinho = "";
	  }

	for($i=0; $i < $Indice; $i++)
		{
			if($Carrinho[$i] == $ID)
			{
				array_splice($Carrinho, $i, 1);
				$Indice--;
				break;
			}
		}
		
	$_SESSION['Indice'] = $Indice;
	$_SESSION['Carrinho'] = $Carrinho;
	header("location:carrinho.php");
?>