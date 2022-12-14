<!--Apaga produtos-->
<?php
	$cod = $_POST["codigo"]; //recebe
	$tabela = $_POST["tabela"]; //recebe
	include("admin/conecta.mysql.inc"); //inclui


	mysql_query("DELETE FROM $tabela WHERE codigo = $cod"); //apaga dados

	header("Location:remove.php"); //retorna a página
?>
<html>
<head>
</head>
<body>

</body>
</html>