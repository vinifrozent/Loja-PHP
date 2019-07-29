<?php
 
   function Inicio()
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
    <meta charset="utf-8">
	
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
		   <li class='has-sub'><a href='#'><span>Categorias</span></a>
			  <ul>
			  <?php
			    include("conexao.php");
			    $sql="select * from categorias order by nome";
				$resultado = mysql_query($sql, $conexao);
				while($linha = mysql_fetch_object($resultado))
				{
				 echo "<li><a href='#'><span>$linha->nome</span></a></li>";
				}
				?>
			  </ul>
		   </li>
		   <li><a href='#'><span>Nossa Loja</span></a></li>
		   <li class='last'><a href='#'><span>Contato</span></a></li>
		   <?php 
		
				if(isset($_SESSION["Nome_Completo"]))
				{
					echo '<li ><a href=""><span class="glyphicon glyphicon-user"></span>';
					echo " Olá ".$_SESSION['Nome_Completo'];
					echo '</a></li>';
				}
				else
				{
					echo '<li><a href="logito.php"><span class="glyphicon glyphicon-user"></span>';
					echo " Login";
					echo '</a></li>';
				} 
				?> 
				
				<li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
		</ul>
		</div>
      </ul>
	</div>
		