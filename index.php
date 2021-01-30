<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
<head>
	<title></title>
<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<style>
body {
font-family: 'Open Sans', sans-serif;
}
#header {
	background-color: #990000;
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
	left: 45%;
	top: 392px;
	width: 146px;
	height: 19px;
	z-index: 1;
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
	  </div>
	</div>
	<h1 id="titulo" name="titulo">FAÇA SEU LOGIN !</h1>


</div>
<div>
<p>&nbsp;</p>
<br /><br />

<form action="verifica_usuario.php" method="post" name="" id="">
<div id="apDiv1">
Usuario<br />
<input name="usuario" type="text" id="usuario" /><br />
Senha<br />
<input name="senha" type="password" id="senha" /><br />
<input style="margin-left:50px; margin-top:10px" type="submit" name="Submit" value="Logar" />
<br />
</div>

</form>


</body>
</html>
