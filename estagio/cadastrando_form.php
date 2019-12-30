<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> cadastro de form</title>
</head>
<body>

<?php

session_start();

$host= "localhost";
$user= "root";
$pass= "";
$banco = "cadastro";
$link = mysqli_connect($host, $user, $pass, $banco);





$cnpj= filter_input(INPUT_POST, 'txtcnpj', FILTER_SANITIZE_STRING);
$nome_empresa= filter_input(INPUT_POST, 'txtRazaoSocial', FILTER_SANITIZE_STRING);
$setor_estagio= filter_input(INPUT_POST, 'txtSetorEstagio', FILTER_SANITIZE_STRING);
$nome_supervisor= filter_input(INPUT_POST, 'txtNomeSupervisor', FILTER_SANITIZE_STRING);
$email_supervisor= filter_input(INPUT_POST, 'txtEmailSupervisor', FILTER_SANITIZE_STRING);
$telefone_supervisor= filter_input(INPUT_POST, 'txtTelefoneSupervisor', FILTER_SANITIZE_STRING);
$cargo_supervisor= filter_input(INPUT_POST, 'txtCargoSupervisor', FILTER_SANITIZE_STRING);
$valor_bolsa= filter_input(INPUT_POST, 'txtValorBolsa', FILTER_SANITIZE_STRING);



$result_user = "INSERT INTO formulario(cnpj, nome_empresa, setor_estagio, nome_supervisor,email_supervisor, telefone_supervisor, cargo_supervisor, valor_bolsa) VALUES ('$cnpj', '$nome_empresa', '$setor_estagio', '$nome_supervisor', '$email_supervisor', '$telefone_supervisor', '$cargo_supervisor', '$valor_bolsa')";

$resultado_user = mysqli_query($link, $result_user);


if (mysqli_insert_id($link)){
	$_SESSION['msg'] = "<p style='color:green;'> Usuário cadastrado com sucesso </p>";

	header ("Location: form_estagio2.php");
}else{

	$_SESSION['msg'] = "<p id='erro' style='color:red;'> Usuário não foi cadastrado com sucesso </p>";
	header ("Location: form_estagio.php");
}


?>



</body>
</html>