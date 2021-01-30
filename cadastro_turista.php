<?php
session_start(); // Inicia a session
include "functions.php"; // arquivo de funções.
session_checker(); // chama a função que verifica se a session iniciada da acesso à página.
$nome = $_SESSION['nome'];
?>
<html>
<head>
<title>Documento sem t&iacute;tulo</title>
<meta charset="utf-8">
<script language="JavaScript">
function valida()
{
  if (document.cadastro.nome.value=="" || document.cadastro.nascimento.value=="" || document.cadastro.sexo.value=="" || document.cadastro.tel.value=="" || document.cadastro.email.value=="" || document.cadastro.endereco.value=="" || document.cadastro.bairro.value=="" || document.cadastro.cep.value=="" || document.cadastro.cidade.value=="" || document.cadastro.estado.value=="" || document.cadastro.login.value=="" || document.cadastro.senha.value=="" || document.cadastro.senha2.value=="")
  {
  alert("Todos os campos com asterisco são de preenchimento obrigatório!")
  return(false)
  }
  else
  {
  //document.form1.ok.value="sim"
  return(true)
  }
}

</script>
<style>
body {
font-family: 'Open Sans', sans-serif;
}
#header {
background-color: #000880;
}

#header-logo {
	padding-left: 10px;
	padding-top: 10px;
}
#titulo {
	text-align: center;
	position: relative;
	bottom: 70px;
	font-size: 24px;
	background-color: #CCFF33;
}
#apDiv2 {
	position: absolute;
	left: 247px;
	top: 29px;
	width: 146px;
	height: 19px;
	z-index: 1;
	background-color: #FFF;
}

</style>
</head>

<body>
	<div id="header">
		<div id="header-logo">
		  <img src="http://178.62.248.205/imagens/Bandeira de Paraty.GIF" width="191" height="113" />
		  <h4>.
          </h4>
	  </div>
	</div>
	<h1 id="titulo" name="titulo">FAÇA O CADASTRO DO VISITANTE!</h1>
        <div id="apDiv2">
           	<?php echo 'Usuario : ' , $nome ?><br />
           	<br />
	      </div>

<div align="center">
  <form action="cadastrar_turista.php" method="post" name="" id=""  onSubmit="return valida();">
    <table width="522" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="20" colspan="2"><p align="left"><strong>           DADOS DO VISITANTE</strong><br></font></p></td>
      </tr>
      <tr>
        <td width="145" height="20">Nome :<font color="#FF0000">*</font></font></td>
        <td width="377" height="20"><input name="nome" type="text" id="nome" size="20" maxlength="40"> (max. 40 digitos) </font></td>
      </tr>
       <tr>
        <td width="145" height="20">Sobrenome :<font color="#FF0000">*</font></font></td>
        <td width="377" height="20"><input name="sobrenome" type="text" id="nome" size="20" maxlength="40"> (max. 40 digitos) </font></td>
      </tr>

      <tr>
        <td height="20">Nascimento:<font color="#FF0000">*</font></font></td>
        <td height="20"><input name="nascimento" type="text" id="nascimento" value="DD/MM/AAAA" size="20" maxlength="10">  max. 10 digitos) </font></td>
      </tr>
      <tr>
        <td height="20">Telefone:<font color="#FF0000">*</font></font></td>
        <td height="20"><input name="tel" type="text" id="tel" value="(DDD) TELEFONE" size="20" maxlength="15"> (max. 15 digitos) </font></td>
      </tr>
      <tr>
        <td height="20">Celular:</font></td>
        <td height="20"><input name="cel" type="text" id="cel" value="(DDD) CELULAR" size="20" maxlength="15"> (max. 15 digitos) </font></td>
      </tr>
      <tr>
        <td height="20">Email:<font color="#FF0000">*</font></font></td>
        <td height="20"><input name="email" type="text" id="email" value="nome@site.com.br" size="20" maxlength="40"> (max. 40 digitos) </font></td>
      </tr>
      <tr>
        <td height="20">Endere&ccedil;o:<font color="#FF0000">*</font></font></td>
        <td height="20"><input name="endereco" type="text" id="endereco" size="20" maxlength="50">  (max. 50 digitos) </font></td>
      </tr>
      <tr>
        <td height="20">Bairro:<font color="#FF0000">*</font></font></td>
        <td height="20"><input name="bairro" type="text" id="bairro" size="20" maxlength="30"> (max. 30 digitos) </font></td>
      </tr>
      <tr>
        <td height="20">CEP:<font color="#FF0000">*</font></font></td>
        <td height="20"><input name="cep" type="text" id="cep" size="20" maxlength="20"> (max. 20 digitos) </font></td>
      </tr>
      <tr>
        <td height="20">Cidade:<font color="#FF0000">*</font></font></td>
        <td height="20"><input name="cidade" type="text" id="cidade" size="20" maxlength="30"> (max. 30 digitos) </font></td>
      </tr>
      <tr>
        <td height="20">Estado:<font color="#FF0000">*</font></font></td>
        <td height="20"><select name="estado" id="estado" type="text">
            <option value="AC" selected>AC
            <option value="AL">AL
            <option value="AM">AM
            <option value="AP">AP
            <option value="BA">BA
            <option value="CE">CE
            <option value="DF">DF
            <option value="ES">ES
            <option value="GO">GO
            <option value="MA">MA
            <option value="MG">MG
            <option value="MS">MS
            <option value="MT">MT
            <option value="PA">PA
            <option value="PB">PB
            <option value="PE">PE
            <option value="PI">PI
            <option value="PR">PR
            <option value="RJ">RJ
            <option value="RN">RN
            <option value="RS">RS
            <option value="RO">RO
            <option value="RR">RR
            <option value="SC">SC
            <option value="SP">SP
            <option value="SE">SE
            <option value="TO">TO
          </select>
        </font></td>
      </tr>
      <tr>
        <td height="20">CPF:<font color="#FF0000">*</font></font></td>
        <td height="20"><input name="cpf" type="text" id="cpf" size="20" maxlength="15"> (max. 15 digitos) </font></td>
      </tr>
      <tr>
        <td height="20">Chegada:<font color="#FF0000">*</font></font></td>
        <td height="20"><input name="chegada" type="text" id="chegada" value="DD/MM/AAAA" size="20" maxlength="10"> (max. 10 digitos) </font></td>
      </tr>
      <tr>
        <td height="20">Saida:<font color="#FF0000">*</font></font></td>
        <td height="20"><input name="saida" type="text" id="chegada" value="DD/MM/AAAA" size="20" maxlength="10"> (max. 10 digitos) </font></td>
      </tr>
        <td height="20">Visitantes:<font color="#FF0000">*</font></font></td>
        <td height="20"><select name="visitantes" id="estado" type="text">
            <option value="1" selected>1
            <option value="2">2
            <option value="3">3
            <option value="4">4
            <option value="5">5
            <option value="6">6
            <option value="7">7
            <option value="8">8
            <option value="9">9
            <option value="10">10
            <option value="11">11
            <option value="12">12
            <option value="13">13
          </select>
        </font></td>
      </tr>
      <tr>
      
      <tr>
      <tr>
        <td height="20">&nbsp;</td>
        <td height="20"><input type="submit" name="Submit" value="Enviar">
            <input type="reset" name="Submit2" value="Limpar">
            <input type="button"  value="Voltar" onclick="history.go(-1);">
        </td>
      </tr>
    </table>
  </form>
</div>
</body>
</html>
