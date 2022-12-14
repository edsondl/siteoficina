<html>
<head>
<link rel ="stylesheet" href="config/projeto3Mod.css" type="text/css"/>
<title>login</title>

</head>
<body>
<div id="conteiner">




			<div id="leo">	      
	        <a href="pagina_inicial.php"><img src="imagens/logo.png" width="990" height="250" alt="Home" title="Clique aqui e volte ao menu inicial do site!!!"> </a>  
  			</div> <!-- Fecha div leo -->
        
        
        
        
 
    
    
    
<div id="barra_menu">
 
 
 <div id="itens">
 	<li><a href="projeto5a.php" alt="serviços" title="Clique aqui e conheça nossos serviços!!!"><img src="imagens/SERVICOS.png"> </a></li>
 </div><!--fecha div itens-->
	
	
	
<div id="itens">					
  <li><a href="projeto7a.php" alt="acessórios" title="Clique aqui e conheça nossos acessórios!!!"><img src="imagens/ACESSORIOS.png"></a></li>
</div>

	
<div id="itens">
						
	  <li><a href="projeto6a.php" alt="peças" title="Clique aqui e conheça nosso conjunto de peças de reposição!!!"><img src="imagens/PECAS.png"></a></li>
</div>
                    
  <div id="itens">	
	
		<li><a href="projeto4a.php" alt="contato" title="Clique aqui e entre em contato conosco!!!"><img src="imagens/CONTATO.png"></a></li>
        
        
  </div>
					
    
   <div id="itens">
   
   		<li> <a href="login.html"	 alt="Área Privada" title="Área privada"><img src="imagens/admin.png" width="177" height="50"></a></li>
   
   </div>
   
    </div>
</ul>

        	<div id="esquerdo_geral">
			
			
<?php
#recebe os dados
include "config/conecta.mysql.inc"; 
$username = $_POST["usuario"];
$senha = $_POST["senha"];

$resultado = mysql_query("SELECT * FROM usuarios WHERE username='$username'"); //seleciona os usuários
$linhas = mysql_num_rows($resultado); //obtém o número de linhas retornadas
if($linhas==0) //testa se a consulta retornou algum registro
{
	echo"<html><body>";
	echo"<p align=\"center\"><font color='red'>Usuário não encontrado!!!</font></p>";
	echo"<p align=\"center\"><a href=\"login.html\"><font color='green'>Voltar</font></a></p>";
	echo"</body></html>";
}

else{
	if ($senha != mysql_result($resultado, 0, "senha")) //confere senha
	{
		echo"<html><body>";
		echo"<p align=\"center\"><font color='red'>A senha está incorreta!!!</font></p>";
		echo"<p align=\"center\"><a href='login.html'><font color='green'>Voltar</a></font></p>";
		echo"</body></html>";
		
	}
	else //usuário e senha conrretos. Vamos criar os cookies
	{
		setcookie("nome_usuario",$username);
		setcookie("senha_usuario",$senha);
		
		//direciona para a página inicial dos usuários cadastrados
		header ("Location: admin.php");
		
	}
}
mysql_close($conexao); //encerra conexão


?>
