<?php
session_start(); // Inicia a session
include "functions.php"; // arquivo de funções.
session_checker(); // chama a função que verifica se a session iniciada da acesso à página.
//$nome = $_POST["nome"];
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
	padding: 20px;
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
#nav ul li { 
	display: inline;
	size:30px;
	 }
	 
#nav ul li a {
	alignment-adjust:central;
	padding: 4px 5px 4px 5px;
	display: inline-block;
	width: 200px;
	height: 20px;
	size: 14px;
	text-align: center;
	text-decoration: none;
	border: 3px solid #EE0;
	font-weight: bold;
	margin: 0px 4px 0px 4px;
	alignment-adjust: middle;
	background-color: #006;
	color: #FFFFFF;
}
nav ul li a:link {
	color:#FF0000;
}
nav ul li a:active {
	color:#EEEE00;
}
#camposCadastro {
	width: 70%;
	margin: 0 auto;
}


#camposCadastro input {
	padding: 10px;
	width: 15%;
	border-style: none;
	box-shadow: 0px 0.5px #888888;
}
	</style>
</head>
<body>
<form action="lista_visitantes.php" method="post" name="" id="">
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
<h1 id="titulo" name="titulo">Area do Prestador de serviço</h1>
</div>
<?php
include "config.php";
//$data = $_POST['dataevento'];
//$dataf = $_POST['dataeventof'];

$qry = mysqli_query($conn, "select * from agentes" );
//$resultado = mysqli_query($conn, "SELECT sum(visitantes) from usuarios_vip");

$linhas = mysqli_num_rows($qry);
//Montando o cabeçalho da tabela
$soma = 0;
$table = '<table border="1"><tr>';

	$table .= '<th width="460px">'."Agente".'</th>';
	$table .= '<th width="140px">'."Usuario".'</th>';
	$table .= '<th width="80px">'."Comissão".'</th>';
	$table .= '<th width="150px">'."Data Cadas.".'</th>';
	$table .= '<th width="200px">'."Telefone".'</th>';
	$table .= '<th width="100px">'."Status".'</th>';
	$table .= '<th width="420px">'."Email".'</th>';
	
$num_fields = mysqli_num_fields($qry);//Obtém o número de campos do resultado

//Montando o corpo da tabela
$table .= '<tbody>';
while($r = mysqli_fetch_assoc($qry)){
	$soma = $soma + 1;
	$table .= '<tr>';
	
	$table .= '<td>'.$r['nome_age'].'</td>';
	$table .= '<td>'.$r['usuario'].'</td>';
	$table .= '<td>'.$r['comissao_age'].'</td>';
	$table .= '<td>'.$r['data_cadastro'].'</td>';
	$table .= '<td>'.$r['telefone_age'].'</td>';
	$table .= '<td>'.$r['status'].'</td>';
	$table .= '<td>'.$r['email'].'</td>';
	
	$table .= '</tr>';
//echo 'soma ', $linhas['sum(vendidos)'], $resultado;
 }

//echo 'soma', $linhas;

//	$table .= '<tr>';
	
	$table .= '<td>'.'Total de Visitantes - '. $soma.'</td>';
//	$table .= '<td>'.$r['Data_evento'].'</td>';
//	$table .= '<td>'.$r['hora_evento'].'</td>';
//	$table .= '<td>'.$r['capacidade'].'</td>';
//	$table .= '<td>'.$soma.'</td>';
//	$table .= '<td>'.$r['tipo'].'</td>';
//	$table .= '<td>'.$r['valor_evento'].'</td>';
//	$table .= '<td>'.$r['situacao'].'</td>';
	
//	$table .= '</tr>';


//Finalizando a tabela
$table .= '</tbody></table>';

//Imprimindo a tabela
echo $table;
echo $soma;


// echo 'dataevento'

?>
  </div>
</div>
	<div id="footer">
	  <p>Projeto Ivan © 2020</p>
</div>

	</div>
</body>
</html>
