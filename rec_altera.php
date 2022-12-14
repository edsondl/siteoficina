<!--atualiza produtos-->
<?php
	include "config/conecta.mysql.inc"; //conecta o banco de dados
	$tabela = $_POST["tabela"]; //recebe
	$coluna = $_POST["tabela2"]; //recebe
	$codigo = $_POST["codigo"]; //recebe
	$novo = $_POST["new"]; //recebe
	$linhas=0;

	$resultado = mysql_query("UPDATE  $tabela SET $coluna = '$novo' WHERE codigo = '$codigo'");//atualiza

	header("Location:altera.php"); //retorna a página 
?>