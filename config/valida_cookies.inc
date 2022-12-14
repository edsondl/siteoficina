<?php 
if(isset($_COOKIE["nome_usuario"]))
{ //se existe usuário
	$nome_usuario = $_COOKIE["nome_usuario"]; //atribui
}
if(isset($_COOKIE["senha_usuario"]))
{ //se existe senha
	$senha_usuario = $_COOKIE["senha_usuario"]; //atribui
}
if(isset($nome_usuario) and isset($senha_usuario))
{
	include "conecta.mysql.inc"; //conecta o banco de dados
				
	$resultado = mysql_query("SELECT * FROM usuarios WHERE username='$nome_usuario'"); //selecionar usuário
	$linhas = mysql_num_rows($resultado); //obtém o número de linhas retornadas
	
		if($linhas==0) //testa se a consulta retornou algum registro
		{
			echo"<html><body>";
			echo"<p align=\"center\"><font color='red'>Usuário não encontrado!!!</font></p>";
			header("Location: login.html");
			echo"</body></html>";
		}

		else 
		{
			if ($senha_usuario != mysql_result($resultado, 0, "senha"))//confere senha
			{
				echo"<html><body>";
				echo"<p align=\"center\"><font color='red'>A senha está incorreta!!!</p>";
				echo"<p align=\"center\"><a href='login.html'><font color='green'>Voltar</font></a></p>";
				echo"</body></html>";
			}

		}
}

else
{
		setcookie("nome_usuario");
		setcookie("senha_usuario");
		echo "<font color='red'>Você não efetuou o LOGIN!!!</font>";
		header("Location:login.html");
					
					
}
?>