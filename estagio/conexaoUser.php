<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro de usuario</title>
</head>
<body>

<?php

//conexão com a parte de cadastro usuario
session_start();

$host= "localhost";
$user= "root";
$pass= "";
$banco = "cadastro";
$link = mysqli_connect($host, $user, $pass, $banco);

$nome= filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email= filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$matricula= filter_input(INPUT_POST, 'matricula', FILTER_SANITIZE_STRING);
$senha= filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);



$result_usuario = "INSERT INTO cadastrouser(nome, email, matricula, senha) VALUES ('$nome', '$email', '$matricula', '$senha')";

$resultado_usuario = mysqli_query($link, $result_usuario);

if (mysqli_insert_id($link)){
	$_SESSION['msg'] = "<p style='color:green;'> Usuário cadastrado com sucesso </p>";

	header ("Location: index.php");
}else{

	$_SESSION['msg'] = "<p style='color:red;'> Usuário não foi cadastrado com sucesso </p>";
	header ("Location: cadastre.php");
}




?>

</body>
</html>
