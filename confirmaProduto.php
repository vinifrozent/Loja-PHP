<?php
	session_start();
	include("layout.php");
	include("conexao.php");

	Inicio();
	
	//ler as variaveis que vieram do cliente

	$target_dir = "produtos/";
	$target_name = mt_rand(1,1000) . basename($_FILES["foto_principal"]["name"]);
	$target_file = $target_dir . $target_name;
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
	    $check = getimagesize($_FILES["foto_principal"]["tmp_name"]);
	    if($check !== false) {
	        $uploadOk = 1;
	    } else {
	        echo "O arquivo não é uma imagem.";
	        $uploadOk = 0;
	    }
	}
	// Check if file already exists
	if (file_exists($target_file)) {
	    echo "Desculpé, arquivo já existente.";
	    $uploadOk = 0;
	}
	// Check file size
	if ($_FILES["foto_principal"]["size"] > 500000) {
	    echo "Desculpe, seu arquivo é muito grande.";
	    $uploadOk = 0;
	}
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
	    echo "Desculpe, apenas arquivo do tipo JPG, JPEG, PNG & GIF  são aceitos.";
	    $uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	    echo "Desculpe, seu arquivo não foi enviado.";
	// if everything is ok, try to upload file
	}  else {
	    if (move_uploaded_file($_FILES["foto_principal"]["tmp_name"], $target_file)) {
	        echo "O arquivo ". basename( $_FILES["foto_principal"]["name"]). " foi enviado usado";
	    } else {
	        echo "Desculpe, existe algum erro ao enviar seu arquivo.";
	    }
	}
    
    echo"<br/>";
    //ler as variaveis que vieram do cliente
	$nome = trim($_POST['nome']);
	$valor = $_POST['valor'];
	$destaque = trim($_POST['disponivel']);
	$quantidade = trim($_POST['quantidade']);
	$categoria = trim($_POST['categoria']);
	$descricao = trim($_POST['descricao']);
	
	$sql = "insert into produtos (cod_categoria, nome, valor, destaque, foto_principal, quantidade, descricao, disponivel)
			values ('$categoria','$nome','$valor','$destaque','$target_name', '$quantidade', '$descricao', 'S')";
		
	$resultado = $conexao->query($sql);
	if($resultado)
	{
		echo "produto cadastrado com sucesso!!";
	}
	else	
	{
		echo "Erro ao cadastrar!!";
	}
	echo "<br>";
	echo "<center><a href='cadastraproduto.php'>voltar</a></center>";
	
	Fim();

?>