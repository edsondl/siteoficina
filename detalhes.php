<html>
<head>
<link rel ="stylesheet" href="config/projeto3Mod.css" type="text/css"/>
<title>Detalhes</title>

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
           <ul> 
            
            
           <li><?php
		include("config/conecta.mysql.inc"); 
		$resultado = mysql_query("SELECT * FROM produtos"); //seleciona todos acessórios
		$linhas = mysql_num_rows($resultado); //obtém o número de linhas retornadas
		if($linhas >0)
		{
			for ($i=0; $i<$linhas;$i++)
			{

			$reg=mysql_fetch_row($resultado); //armazena a linha atual do resultado em um array
			echo"<li><div id='produto'>
  				
				<a href='detalhes.php'>
					<div id='titu'> $reg[1]</div>
					
 						<div id='interna'>
						
						<div id='interna2'>
  							<div id='fotos'><img src='admin/fotos/$reg[4]' width='100' height='100'></div>
							</a>
   					 	 <br><font color='#FF0000'>R$ $reg[3] </font>
							</div>
							<a href='detalhes.php'><img src='imagens/detalhes.png'></a>
							</div>
                 	</div>
					</li>
				 ";
			}
		}
		else
		{
			echo "<font color='red'>Nenhum detalhe encontrado!!!</font>";
		}
			?> </li> 
                  
         
            </ul>
                   
                   
			</div>
    	
  
 <div id="rodape"><img src="imagens/rodape.png" width="997" height="184"></div>
</div>

</body>
</html>