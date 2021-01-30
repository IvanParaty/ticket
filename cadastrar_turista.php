<?php
session_start(); // Inicia a session
include "functions.php"; // arquivo de funções.
//session_checker(); // chama a função que verifica se a session iniciada da acesso à página.
$nome = $_SESSION['nome'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
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
#apDiv2 {
	position: absolute;
	left: 247px;
	top: 29px;
	width: 146px;
	height: 19px;
	z-index: 1;
	background-color: #FFF;
}
#titulo {
	text-align: center;
	position: relative;
	bottom: 70px;
	font-size: 24px;
	background-color: #CCFF33;
}
</style>
<body>
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
$errors = ""; 
$cadastrar = 0;
$usuario = $nome;
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$nascimento = $_POST['nascimento'];
$tel = $_POST['tel'];
$cel = $_POST['cel'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$cep = $_POST['cep'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$cpf = $_POST['cpf'];
$chegada = $_POST['chegada'];
$saida = $_POST['saida'];
$visitantes = $_POST['visitantes'];
$dtcad = date('d/m/Y');

include "config.php";

    mysqli_query($conn,"SET NAMES 'utf8'");
    mysqli_query($conn,'SET character_set_connection=utf8');
    mysqli_query($conn,'SET character_set_client=utf8');
    mysqli_query($conn,'SET character_set_results=utf8');

//$pesquisar = mysqli_query($conn, "SELECT * FROM usuarios_vip where login = '".$cpf."' ");

//$contagem = mysqli_num_rows($pesquisar);
//echo $contagem;
//if ( $contagem == 1 ) {  $errors = "- O nome de usuario que você escolheu já está cadastrado.<br>";  }

//if ( $senha != $senha2 ) {  $errors = "- As duas senhas não correspondem.<br>";  }
//  echo $errors;
if ( $errors == "" ) {
  $cadastrar = mysqli_query($conn,"insert into usuarios_vip(nome,sobrenome, nascimento, tel, cel, email, endereco, bairro, cep, cidade, estado, cpf, chegada, saida, visitantes,op,dtcad,status) VALUES ('".$nome."','".$sobrenome."','".$nascimento."','".$tel."','".$cel."','".$email."','".$endereco."','".$bairro."','".$cep."','".$cidade."','".$estado."','".$cpf."','".$chegada."','".$saida."','".$visitantes."','".$usuario."','".$dtcad."','AGUARDANDO')");

    if ( $cadastrar == 1 ) {
      echo "<font size=3 face=Verdana, Arial, Helvetica, sans-serif><br><br>Visitante cadastrado!</font></div>";
      } else {
	    echo "Ocorreu um erro no servidor ao tentar se cadastrar.";
		}
  } else {
    echo "Ocorrram os seguintes erros ao tentar se cadastrar:<br><br>";
	echo $errors;
	}
?>
  <form action="area_tomador.php?nome=<?php echo $usuario ?>" method="post" name="" id="">

<input type="submit" name="Submit" value="Voltar">
</font></div>
</body>
</html>