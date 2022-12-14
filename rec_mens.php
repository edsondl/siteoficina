<!--recebe os dados da mensagem-->
<?php 
	$nome = $_POST['nome']; //recebe
	$email = $_POST['email']; //recebe
	$assunto = $_POST['assunto']; //recebe
	$comentario = $_POST['comentario']; //recebe
	echo $nome,$email,$assunto	,$comentario; //recebe
	include "admin/conecta.mysql.inc";//inclui 
#insere 
	$resultado = mysql_query("INSERT INTO contato VALUES ('','$nome','$email','$assunto','$comentario')"); //insere dados

	header("Location:projeto4a.php"); //retorna a página
?>