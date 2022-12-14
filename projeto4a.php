<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="projeto4a.js">
</script>

<title>Formulário de contato php</title>
<link rel ="stylesheet" href="config/projeto3Mod.css" type="text/css"/>
</head>
<body>
<div id="conteiner">




			<div id="leo">	      
	        <a href="pagina_inicial.php"><img src="imagens/logo.png" width="990" height="250"> </a>  
  			</div> <!-- Fecha div leo -->
        
        
        
        
 
    
    
    
<div id="barra_menu">
 
 
 <div id="itens">
 	<li><a href="projeto5a.php" alt="Home" title="Venha desfrutar da velocidade e conforto de uma moto!!!"><img src="imagens/SERVICOS.png"> </a></li>
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
   
   		<li> <a href="login.html" alt="Área Privada" title="Área privada"><img src="imagens/admin.png" width="177" height="50"></a></li>
   
   </div>
   
    </div>
</ul>

        	<div id="esquerdo_geral">
           <ul> 
            
            
           <li>

<form id="todoform" name="nomedoform" action="rec_mens.php" method="post">
<table width="100%" height="100%">
<tr>
	<th colspan="3">Formul&aacute;rio de contato</th>
</tr>
<tr>
	<td>*Nome</td>
	<td><input name="nome" id="nome" type="text" size="50" maxlength="50" onFocus="javascript: this.style.border= '2px solid #fff770'"
                          onBlur="nomeusuario();         javascript: this.style.border= '2px solid #000'"></td>
</tr>
<tr>
	
	<td id="n" name="n"></td>
</tr>
<tr>
	<td>Sexo</td>
	<td>Masculino:<input type="radio" id="sexo" name="sexo" value="M">
	&nbsp Feminino:<input type="radio" id="sexo" name="sexo" value="F"></td>
</tr>
<tr>
	<td>Ocupação</td>
	<td>
	<select name="ocupacao">
	<option value="estudante">Estudante</option>
	<option value="engenheiro">Engenheiro</option>
	<option value="administrador">Administrador</option>
	<option value="secretaria">Secretária</option>
	<option value="serv">Serviços Gerais</option>
	<option value="comerciario">Comerciário</option>
	<option value="advogado">Advogado</option>
	<option value="desempregado">Desempregado</option>
	<option value="outras">Outras</option>
	</select>
</td>
</tr>
<tr>
	<td>*e-mail</td>
	<td><input name="email" type="text" id="email" size="50" maxlength="50" onFocus="javascript: this.style.border= '2px solid #fff770'"
                         onBlur="nomemail(); javascript: this.style.border= '2px solid #000'"/></td>
</tr>
<tr>
	<td id="e" name="e"></td>
</tr>
<tr>
	<td>*Assunto</td>
	<td><input name="assunto" id="assunto" type="text" size="50" maxlength="50" onFocus="javascript: this.style.border= '2px solid #fff770'"
                         onBlur="nomeassunto(); javascript: this.style.border= '2px solid #000'"/></td>
</tr>
<tr>	
	<td id="a" name="a"></td>
</tr>
<tr>
	<td>*Coment&aacute;rios</td>
	<td><textarea name="comentario" id="comentario" cols="70" rows="20" onFocus="javascript: this.style.border= '2px solid #fff770'"
                         onBlur="nomecomentario(); javascript: this.style.border= '2px solid #000'"/></textarea></td>
</tr>
<tr>	
	<td id="c" name="c"></td>
</tr>
<tr>
	<td><input id="mit" name="mit" type="submit" value="Enviar" class="botao" onClick="pergunta()"></td>
	<td>*Campos de preenchimento obrigatório</td>
</tr>
</table>
</form>
</li> 
                  
         
            </ul>
                   
                   
			</div>
    	
  
 <div id="rodape"><img src="imagens/rodape.png" width="997" height="184"></div>
</div>

</body>
</html>




