<html>
<head>
<link rel ="stylesheet" href="config/projeto3Mod.css" type="text/css"/>
<title>Exibe mensagens</title>
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
           
            <div id='menu_adm'>Bem-vindo: <font color="green" size="+1"><b> <?php echo $_COOKIE['nome_usuario']; ?></b> </font><a href="mensagens.php"> Mensagens </a> | <a href="incluir.php"> Incluir Produtos </a>  | <a href="remove.php"> Remover Produtos </a> | <a href="altera.php"> Alterar Produtos </a> | <a href="exibe.php"> Exibir Produtos </a> | <a href="logout.php">SAIR</a> | </div> 
            <br>
            <a name="alto"><font color="blue">Início</font></a>&nbsp&nbsp<a href="#baixo"><font color="red">Para o fim</font></a>
			<br><br>  
                    <?php 
	   		include("admin/conecta.mysql.inc"); //conecta o banco de dados
		  
			$resultado = mysql_query("SELECT * FROM contato"); //seleciona todos contatos
			$linhas = mysql_num_rows($resultado); //obtém o número de linhas retornadas
			echo "<br>
				  <br>
						<table border='1px' width='100%'>
						<tr>
							<td width='50px'>CÓDIGO</td>
							<td>NOME</td><td>EMAIL</td>
							<td width='200'>ASSUNTO</td>
							<td>COMENTÁRIO</td>
						</tr>";
			for ($i=0; $i<$linhas;$i++)
			{
			$reg=mysql_fetch_row($resultado); //armazena a linha atual do resultado em um array
			echo"<p><tr>
						<td>$reg[0]</td>
						<td>$reg[1]</td>  
						<td>$reg[2]</td>
						<td>$reg[3]</td>
						<td>$reg[4]</td>
					</tr>
				 </p>";
			}
			    	echo"</table>";

?>
           
                   
            </div>
    	
  
 <div id="rodape"><img src="imagens/rodape.png" width="997" height="184"></div>
</div>
<a href="#alto"><font color="red">Para o início</font></a>&nbsp&nbsp<a name="baixo"><font color="blue">Fim</a>  
		
</body>
</html>


