<?php

session_start(); // Inicia a session

include "config.php";

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
echo $usuario,' - ',$senha,' - ';
if ((!$usuario) || (!$senha)){

echo "Por favor, todos campos devem ser preenchidos! <br /><br />";

include "index.php";

}else{

$senha = md5($senha);
echo $senha;
$sql = mysqli_query($conn,"SELECT * FROM produtores WHERE email_pro='".$usuario."' AND senha_pro='".$senha."'");

$login_check = mysqli_num_rows($sql);

if ($login_check > 0){

while ($row = mysqli_fetch_array($sql)){

foreach ($row AS $key => $val){

$$key = stripslashes( $val );

}

$_SESSION['usuario_id'] = $Cod_pro;
$_SESSION['nome'] = $nome_pro;
//$_SESSION['sobrenome'] = $sobrenome;
//$_SESSION['email'] = $email;
//$_SESSION['nivel_usuario'] = $nivel_usuario;

mysqli_query(

"UPDATE usuarios SET data_ultimo_login = now()
WHERE Cod_pro ='{$usuario_id}'"

);

header("Location: area_restrita.php");

}

}else{

echo "Você não pode logar-se! Este usuário e/ou senha não são válidos!<br />
Por favor tente novamente!<br />";

include "index.php";

}

}

?>