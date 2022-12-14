<?php
#receber os dados
include("conecta.mysql.inc"); //inclui
$nome = $_POST["nome"]; //recebe 
$preco = $_POST["preco"]; //recebe 
$detalhes = $_POST["detalhes"]; //recebe 
$imagem = $_FILES["foto"]; //recebe 
$arquivo = isset($imagem) ? $imagem:FALSE; //verifica a existência de imagem
if ($arquivo){
	$nomez=substr(md5(uniqid(time())),0,5); //substr retorna parte de uma string, uniqid gera um ID único
	$nome2=$nomez.".jpg"; //aplica a extensão jpg
	move_uploaded_file($arquivo["tmp_name"], "fotos/".$nome2); //move para a pasta fotos


	mysql_query("INSERT INTO produtos VALUES ('$nome','$detalhes','$peso','$nome2')"); //insere os valores

}

?>