	
		function pergunta()
		{
		d = confirm ("Deseja salvar as alterações?");
		if (d == true)
		{
			verificar();
		}
		}
			function verificar()
			{
		if (document.getElementById('nome').value=="")
		{
				alert("Campo nome não preenchido!!!");
		}
		
		else if (document.getElementById('email').value=="")
		{
				alert("Campo e-mail não preenchido!!!");
		}
		
		else if (document.getElementById('comentario').value=="")
		{
				alert("Campo comentário não preenchido!!!");
		}
		else
		{
				alert("Documento enviado com sucesso!!!");
		}
		}		

		
		function nomeusuario(){
         var camponome = document.getElementById('nome').value;
         if (camponome =="" || camponome.length<8){
            document.getElementById('n').innerHTML=
            "<strong><font color=red>Campo incorreto!!! Mínimo 8 caracteres!!!</font></strong>";
            }
            else
            {
                document.getElementById('n').innerHTML=
                "<strong><font color=green> OK!</font></strong>";
            }
             }
            
         function nomemail(){
         var campoemail = document.getElementById('email').value;
         if (campoemail =="" || campoemail.length<8 || campoemail.indexOf('@')==-1){
            document.getElementById('e').innerHTML=
            "<strong><font color=red>Campo incorreto!!! Mínimo 8 caracteres!!!</font></strong>"; }
            else
            {
                document.getElementById('e').innerHTML=
                "<strong><font color=green> OK!</font></strong>";
            }
             }
			 
			 function nomeassunto(){
         var campoassunto = document.getElementById('assunto').value;
         if (campoassunto ==""){
            document.getElementById('a').innerHTML=
            "<strong><font color=red>Campo incorreto!!! Não preenchido!!!</font></strong>"; }
            else
            {
                document.getElementById('a').innerHTML=
                "<strong><font color=green> OK!</font></strong>";
            }
             }