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


<?php

session_start();

if (!isset($_REQUEST['logmeout'])){

echo "Você realmente deseja sair da área restrita?<br />";
echo "<a href=\"logout.php?logmeout\">Sim</a> | ";
echo "<a href=\"javascript:history.go(-1)\">Não</a>";

}else{

session_destroy();


header( "location:index.php");

}



?>
</body>
