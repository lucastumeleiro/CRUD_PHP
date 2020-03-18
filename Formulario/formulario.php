<HTML>
<HEAD>
 <TITLE>aula</TITLE>
 <link href="estilo.css" rel="stylesheet" type="text/css">
<script>
function Verifica()
	{
		if (document.form.cidade.value=='')
			{
				alert('Favor preencher o campo Cidade');
				document.form.cidade.focus();
				return false;
			}
		if (document.form.email.value=='')
			{
				alert('Favor preencher o campo Email');
				document.form.email.focus();
				return false;
			}
		if (document.form.senha.value=='')
			{
				alert('Favor preencher o campo Senha');
				document.form.senha.focus();
				return false;
			}
		if (document.form.nome.value=='')
			{
				alert('Favor preencher o campo Nome');
				document.form.nome.focus();
				return false;
			}
		if (document.form.endereco.value=='')
			{
				alert('Favor preencher o campo Endere�o');
				document.form.endereco.focus();
				return false;
			}
		if (document.form.numero.value=='')
			{
				alert('Favor preencher o campo N�mero');
				document.form.numero.focus();
				return false;
			}
		if (document.form.bairro.value=='')
			{
				alert('Favor preencher o campo Bairro');
				document.form.bairro.focus();
				return false;
			}
		if (document.form.fone.value=='')
			{
				alert('Favor preencher o campo Telefone');
				document.form.fone.focus();
				return false;
			}
		
	}

function hidestatus(){
window.status=''
return true
}
</script>
</HEAD>
<BODY>
<table border="0" align="center" cellpadding="10" cellspacing="0" >
       <form name="form" method="post" action="formulario2.php">
          <tr>
            <td><b><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Nome:</font></b></td>
            <td><input type="text" name="nome" size ="60" class="campo"></td>
          </tr>
                  <tr>
            <td><b><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Endereco:</font></b></td>
            <td><input type="text" name="endereco" size ="30" class="campo"></td>
          </tr>
          <tr>
            <td><b><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Numero:</font></b></td>
            <td><input type="text" name="numero" size ="10" class="campo"></td>
          <tr>
          <tr>
            <td><b><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Bairro:</font></b></td>
            <td><input type="text" name="bairro" size ="15" class="campo"></td>
          <tr>
          <tr>
            <td><b><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Telefone:</font></b></td>
            <td><input type="text" name="fone" size ="15" class="campo"></td>
          <tr>
          <tr>
            <td valign="top"><div align="left"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><b>Cidade:</b></font></div></td>
                 <td><input type="text" name="cidade" size ="15" class="campo"></td>
            </td>
          </tr>
          <tr>
            <td><b><font size="2" face="Verdana, Arial, Helvetica, sans-serif">E-Mail:</font></b></td>
            <td><input type="text" name="email" size ="30" class="campo"></td>
          <tr>
          <tr>
            <td><b><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Senha:</font></b></td>
            <td><input type="password" name="senha" size ="10" class="campo">
            </td>
          <tr>
          <tr>
            <td></td>
            <td><input type="submit" name="enviar" Value="Enviar" onclick='return Verifica();' class="botao"></td>
          <tr> </table>
              </table>
</TABLE>
</BODY>
</HTML>
