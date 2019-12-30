<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> cadastro</title>
</head>
<body>

<?php

session_start();

$host= "localhost";
$user= "root";
$pass= "";
$banco = "cadastro";
$link = mysqli_connect($host, $user, $pass, $banco);

$nome= filter_input(INPUT_POST, 'Nome_Completo', FILTER_SANITIZE_STRING);

$email= filter_input(INPUT_POST, 'Email', FILTER_SANITIZE_EMAIL);

$matricula= filter_input(INPUT_POST, 'Matricula', FILTER_SANITIZE_STRING);

$senha= filter_input(INPUT_POST, 'Senha', FILTER_SANITIZE_STRING);

$result_usuario = "INSERT INTO usuarios (Nome_Completo, Email, Matricula, Senha) VALUES ('$nome', '$email', '$matricula', '$senha')";

$resultado_usuario = mysqli_query($link, $result_usuario);


if (mysqli_insert_id($link)){
	$_SESSION['msg'] = "<p style='color:green;'> Usuário cadastrado com sucesso </p>";

	header ("Location: login.php");
}else{

	$_SESSION['msg'] = "<p style='color:red;'> Usuário não foi cadastrado com sucesso </p>";
	header ("Location: login.php");
}


?>

<a href="index.php">Menu Inicial</a>


</body>
</html>

