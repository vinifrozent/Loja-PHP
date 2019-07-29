<html>
<head>
</head>
<body>

<?php


   function Inicio($isHome = "false")
   {
    //iniciar a sessao
	
	
		//ler a variavel de sessão
		if(isset($_SESSION['Carrinho']))
		{
			$total = $_SESSION['Indice'];
		}
		else
		{
			$total = 0;
		}

?>
	<html>
   <head>
	<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style>
	.carousel-inner > .item > img,
	.carousel-inner > .item > a > img 
	{
		width: 90%;
		margin: auto;
	}
	</style>
	
     <link rel="stylesheet" href="styles.css">
     <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
     <script src="script.js"></script>
    
	<link href="estilo.css" type="text/css" rel="stylesheet" />
   </head>
   <body>
    <div id="topo">
		<div id="topo_esq">
			<img id="img_topo" src="./images/logo_re.jpg">
		</div>
		<div id="topo_dir">
		Olá, você possui <?php echo $total; ?> item(s) no seu carrinho. 
		<a href="carrinho.php"><img src="./images/cesta.png" valign="absmiddle" width="80px" height="60px"></a>
		</div>
	</div>
	<div id="menu">
		<div id='cssmenu'>
		<ul>
		   <li class='Active'><a href='index.php'><span>Home</span></a></li>
		   <li class='has-sub' style="z-index: 1"><a href='#'><span>Categorias</span></a>
	  		<ul>
			 <?php
			    
			    include("conexao.php");
			    $sql="select * from categorias order by nome";
				$resultado = $conexao->query($sql);
				while($linha = $resultado->fetch_object())
				{
				 echo utf8_encode("<li><a href='index.php?cat=$linha->cod_categoria'><span>$linha->nome</span></a></li>");
				}
			 
			 ?>	
			 </ul>
		   </li>

<?php
			if(isset($_SESSION['ID']) && $_SESSION['ID'] == '1')
			{   
				echo "<li class='has-sub' style='z-index: 1'><a href='#'><span>Configurações</span></a>";
					echo "<ul>";
						echo "<li><a href='cadastraproduto.php'><span>Cadastrar Produto</span></a></li>";
						echo "<li><a href='cadastracategoria.php'><span>Cadastrar Categoria</span></a></li>";
					echo "</ul>";
				echo "</li>";	
			}

			if(isset($_SESSION["Nome_Completo"]))
			{
				echo "<li ><a href=''><span class='glyphicon glyphicon-user'></span>";
				echo " Olá ".$_SESSION['Nome_Completo'];
				echo "</a></li>";
				echo '<li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>';
			}
			else
			{
				echo "<li><a href='login.php'><span class='glyphicon glyphicon-user'></span>";
				echo " Login";
				echo "</a></li>";
			} 
			
?>	
		</ul>
		</div>
      </ul>

     
	</div>
	
	


<?php
	if($isHome == 'true')
	{
?>
		<div id="slide">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
			  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			  <li data-target="#myCarousel" data-slide-to="1"></li>
			  <li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
			  <div class="item active">
				<img id="img_banners" src="./banner/banner-atacado.jpg" width="999" height="437">
			  </div>

			  <div class="item">
				<img id="img_banners" src="./banner/slide-lateral-pagseguro.jpg" width="999" height="437">
			  </div>
			
			  <div class="item">
				<img src="./banner/banner_3.jpg" width="999" height="437">
			  </div>

			  
			</div>

			<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			  <span class="sr-only">Anterior</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			  <span class="sr-only">Próximo</span>
			</a>

		  </div>
		</div>
<?php
	}
?>

	<div id="conteudo">

<?php
}

   function Fim()
   {

?>
		</div>
		<div id="rodape"> <div id="pdr"> All rights reserved - Vinícius Augusto </div> </div>
		
		</div>
	   </body>
	</html>
<?php

   }

?>
</body>
</html>