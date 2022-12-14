<!--Insere produtos da tabela-->
<?php
	include("admin/conecta.mysql.inc"); //conecta o banco de dados
	$nome = $_POST["nome"]; //recebe os dados enviados
	$preco = $_POST["preco"]; //recebe os dados enviados
	$detalhes = $_POST["detalhe"]; //recebe os dados enviados
	$tabela = $_POST["tabela"]; //recebe os dados enviados
	$imagem = $_FILES["foto"]; //recebe os dados enviados
	$arquivo = isset($imagem) ? $imagem:FALSE; //verifica a existência de imagem
	if ($arquivo){
	$nomez=substr(md5(uniqid(time())),0,5); //substr retorna parte de uma string, uniqid gera um ID único
	$nome2=$nomez.".jpg"; //atribui extensão
	move_uploaded_file($arquivo["tmp_name"], "admin/fotos/".$nome2); //move a imagem para a pasta fotos

	echo $tabela; //mostra 
	#insere
	$resultado = mysql_query("INSERT INTO $tabela VALUES ('','$nome','$detalhes','$preco','$nome2')"); //insere os valores nos campos

	}
	header("Location:incluir.php"); //retorna a página
?>
<html>
<head>
</head>
<body>

</body>
</html>