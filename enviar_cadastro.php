<html>
<head>
<title>Documento sem titulo</title>
<meta charset="utf-8">
</head>

<body>

<div align="center"><font size="1" face="Verdana, Arial, Helvetica, sans-serif">
  <?
//include "configuracao.php";
//$db			=	mysql_connect ($host, $login_db, $senha_db);
//$basedados	=	mysql_select_db($database);


include "config.php";
    mysqli_query($conn,"SET NAMES 'utf8'");
    mysqli_query($conn,'SET character_set_connection=utf8');
    mysqli_query($conn,'SET character_set_client=utf8');
    mysqli_query($conn,'SET character_set_results=utf8');

$pesquisar = mysqli_query($conn, "SELECT * FROM usuarios_vip where login = '".$login."'");



//$pesquisar = mysql_query("SELECT * FROM `$tabela` WHERE login = '$login'", $db);
$contagem = mysqli_num_rows($pesquisar);
echo $contagem;
//if ( $contagem == 1 ) {  $errors = "- O nome de usuario que você escolheu já está cadastrado.<br>";  }

//if ( $senha != $senha2 ) {  $errors = "- As duas senhas não correspondem.<br>";  }
  
if ( $errors == "" ) {
  $cadastrar = mysqli_query("INSERT INTO `$tabela` (nome, nascimento, sexo, tel, cel, email, endereco, bairro, cep, cidade, estado, login, senha)
    VALUES ('$nome','$nascimento','$sexo','$tel','$cel','$email','$endereco','$bairro','$cep','$cidade','$estado','$login','$senha')", $db);

    if ( $cadastrar == 1 ) {
      echo "<font size=1 face=Verdana, Arial, Helvetica, sans-serif><br><br>Olá, $nome !<br><br>Agora você ja pode acessar a área VIP com o seu nome de usuario( $login ) e com sua senha.<br><br>A equipe do (Seu site) agradece e espera poder ajudar sempre que preciso.</font></div>";
      } else {
	    echo "Ocorreu um erro no servidor ao tentar se cadastrar.";
		}
  } else {
    echo "Ocorrram os seguintes erros ao tentar se cadastrar:<br><br>";
	echo $errors;
	}
?>
</font></div>
</body>
</html>
