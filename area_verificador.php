<hr />
<?php
session_start(); // Inicia a session
include "functions.php"; // arquivo de funções.
session_checker(); // chama a função que verifica se a session iniciada da acesso à página.
$nome = $_GET["nome"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
<head>
	<title></title>
<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/reset.css">

	<style>
body {
	font-family: 'Open Sans', sans-serif;
	font-size: 14px;
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

#enviar {
	margin-left: 43%;
	padding: 15px;
	background-color: #b4bb07;
	border-style: none;
	border-radius: 4px;
	width: 15%;
	height: 50px;
	color: white;
	box-shadow: 1px 1px 1px #888888;
}

#footer {
	background-color: #e0e80d;
	margin-top: 303px;
	padding: 50px;
	display: flex;
	justify-content: center;
}
 #apDiv1 {
	position: absolute;
	left: 45%;
	top: 263px;
	width: 146px;
	height: 48px;
	z-index: 1;
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
<!--	<div id="apDiv2"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"> - <a href="cadastro.php">Cadastro</a></font></p></div> -->
	<div id="header">
		<div id="header-logo">
		  <img src="imagens/Bandeira de Paraty.GIF" width="191" height="113" />
		  <h4>.
          </h4>
        <div id="apDiv2">
           	<?php echo 'Usuario : ' , $nome ?><br />
           	<br />
	      </div>
	  </div>
	</div>
<h1 id="titulo" name="titulo">Area do Verificador</h1>
</div>

<div class="entra cpf">Entre com cpf a ser Verificado!
<input name="buscacpf" type="text" size="20" maxlength="20" />
<input name="buscacpf" type="button" value="Busca CPF"/>
</div>
<p>&nbsp;</p>
<br /><br />

</body>
</html>
