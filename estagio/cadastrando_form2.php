<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Plano de Atividades</title>
</head>
<body>

	<?php
		session_start();

$host= "localhost";
$user= "root";
$pass= "";
$banco = "cadastro";
$link = mysqli_connect($host, $user, $pass, $banco);
		
		$dia1= filter_input(INPUT_POST, 'dia1', FILTER_SANITIZE_STRING);
		$mes1= filter_input(INPUT_POST, 'mes1', FILTER_SANITIZE_STRING);
		$ano1= filter_input(INPUT_POST, 'ano1', FILTER_SANITIZE_STRING);
		$dia2= filter_input(INPUT_POST, 'dia2', FILTER_SANITIZE_STRING);
		$mes2= filter_input(INPUT_POST, 'mes2', FILTER_SANITIZE_STRING);
		$ano2= filter_input(INPUT_POST, 'ano2', FILTER_SANITIZE_STRING);
		$CHS= filter_input(INPUT_POST, 'CHS', FILTER_SANITIZE_STRING);
		$orientador= filter_input(INPUT_POST, 'orientador', FILTER_SANITIZE_STRING);
		$plATIVIDADES= filter_input(INPUT_POST, 'plATIVIDADES', FILTER_SANITIZE_STRING);



	$result_user = "INSERT INTO formulario2(dia1, mes1, ano1, dia2, mes2, ano2, CHS, orientador, plATIVIDADES) VALUES ('$dia1', '$mes1', '$ano1', '$dia2', '$mes2', '$ano2', '$CHS', '$orientador', '$plATIVIDADES')";

$resultado_user = mysqli_query($link, $result_user);


if (mysqli_insert_id($link)){
	$_SESSION['msg'] = "<p style='color:green;'> Usuário cadastrado com sucesso </p>";

	header ("Location: perfil.php");
}else{

	$_SESSION['msg'] = "<p id='erro' style='color:red;'> Usuário não foi cadastrado com sucesso </p>";
	header ("Location: form_estagio2.php");
}


?>



</body>
</html>