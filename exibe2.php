
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel ="stylesheet" href="config/projeto3Mod.css" type="text/css"/>
<title>exibe produtos</title>

</head>
<body>
<div id="conteiner">




			<div id="leo">	      
	        <a href="pagina_inicial.php"><img src="imagens/logo.png" width="990" height="250" alt="Home" title="Clique aqui e volte ao menu inicial do site!!!"></a>  
  			</div> <!-- Fecha div leo -->
        
        
        
        
 
    
    
    
<div id="barra_menu">
 
 
 <div id="itens">
 	<li><a href="projeto5a.php" alt="serviços" title="Clique aqui e conheça nossos serviços!!!"><img src="imagens/SERVICOS.png"> </a>
	</li>
 </div><!--fecha div itens-->
	
	
	
<div id="itens">					
  <li><a href="projeto7a.php" alt="acessórios" title="Clique aqui e conheça nossos acessórios!!!"><img src="imagens/ACESSORIOS.png"></a>
  </li>
</div>

	
<div id="itens">
						
	  <li><a href="projeto6a.php" alt="peças" title="Clique aqui e conheça nosso conjunto de peças de reposição!!!"><img src="imagens/PECAS.png"></a>
	  </li>
</div>
                    
  <div id="itens">	
	
			<li><a href="projeto4a.php" alt="contato" title="Clique aqui e entre em contato conosco!!!"><img src="imagens/CONTATO.png"></a>
			</li>
        
        
  </div>
					
    
   <div id="itens">
   
			<li> <a href="login.html"	 alt="Área Privada" title="Área privada"><img src="imagens/admin.png" width="177" height="50"></a>
			</li>
   
   </div>
   
    </div>
		</ul>
        	<div id="esquerdo_geral">
           
           <div id='menu_adm'>Bem-vindo: <font color="green" size="+1"><b> <?php echo $_COOKIE['nome_usuario']; ?></b> </font>| <a href="incluir.php"> Incluir Produtos </a>  | <a href="remove.php"> Remover Produtos </a> | <a href="altera.php"> Alterar Produtos </a> | <a href="exibe.php"> Exibir Produtos </a> | <a href="logout.php">SAIR</a> | </div>
            <ul>
            <li> <div id="busca"><form action="exibe2.php" method="get" enctype="multipart/form-data">
           <table>
					<tr>
						   <td>Escolha a Tabela:</td>
						   <td><select name="tabela">
						   <option value="acessorios">Acessórios</option>
						   <option value="pecas">Peças</option>
						   <option value="servico">Serviços</option>      
						   </select></td>
						   <td><input type="submit"  value="buscar"/></td>
					</tr>
           </table>
  </form>
         </div> </li>
		<ul>
       <?php 
	   		include("admin/conecta.mysql.inc"); //conecta o banco de dados
			$tabela = $_GET['tabela']; //pega de tabela e coloca em $tabela
			$resultado = mysql_query("SELECT * FROM $tabela"); //seleciona todos de $tabela
			$linhas = mysql_num_rows($resultado); //obtém o número de linhas retornadas 
				echo"<br><br><table border='1px'>
					<tr>
						<td width='50px'>CÓDIGO</td>
						<td>NOME</td>
						<td>DETALHES</td>
						<td>PREÇO</td>
					</tr>$tabela";
			for ($i=0; $i<$linhas;$i++)
			{
				$reg=mysql_fetch_row($resultado); //armazena a linha atual do resultado em um array
				echo"<tr>
						<td>$reg[0]</td>
						<td>$reg[1]</td>
						<td>$reg[2]</td>
						<td>$reg[3]</td>
					</tr>";
			}
				echo"</table>";
?>
        </ul>
           
		</div>
		<div id="rodape"><img src="imagens/rodape.png" width="997" height="184">
		</div> 
		</div>
</body>
</html>
	