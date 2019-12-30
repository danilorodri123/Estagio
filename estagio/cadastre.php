<?php 


session_start();
ob_start();

$btnCadUser = filter_input(INPUT_POST, 'btnCadUser', FILTER_SANITIZE_STRING);

if($btnCadUser){

	include_once 'conexaoUserLogin.php';

	$dados_rc = filter_input_array(INPUT_POST, FILTER_DEFAULT);

	//validação de espaços no cadastro
	$erro= false;

	$dados_st = array_map('strip_tags', $dados_rc);
	$dados = array_map('trim', $dados_st);

	if(in_array('', $dados)){

		$erro = true;
		$_SESSION ['msg'] = "<p style='color:red;'> Necessário preencher todos os campos </p>";

	}elseif ((strlen($dados['senha'])) < 8) {

		$erro = true;
		$_SESSION ['msg'] = "<p style='color:red;'> A senha deve ter no mínimo 8 caracteres  </p>";
	}else {

		$result_usuario = "SELECT id FROM cadastrouser WHERE matricula = '".$dados['matricula']."'";
		$resultado_usuario = mysqli_query($link, $result_usuario);

		if (( $resultado_usuario) and ($resultado_usuario -> num_rows != 0)){

			$erro = true;
			$_SESSION ['msg'] = "<p style='color:red;'> Este Usuario já está sendo utilizado  </p>";


		}

		$result_usuario = "SELECT id FROM cadastrouser WHERE email = '".$dados['email']."'";
		$resultado_usuario = mysqli_query($link, $result_usuario);

		if (( $resultado_usuario) and ($resultado_usuario -> num_rows != 0)){

			$erro = true;
			$_SESSION ['msg'] = "<p style='color:red;'> Este Email já está sendo utilizado  </p>";


		}
	}


	if(!$erro){

		$dados['senha'] = password_hash($dados ['senha'],PASSWORD_DEFAULT);

	$result_usuario = "INSERT INTO cadastrouser(nome, email, matricula, senha) VALUES (
		'".$dados ['nome']."', 
		'".$dados ['email']."', 
		'".$dados ['matricula']."',
		'".$dados ['senha']."'
		)";

	$resultado_usuario = mysqli_query($link, $result_usuario);
	if(mysqli_insert_id($link)){
		$_SESSION['msgcad'] = "<p style='color:green;'> Usuário cadastrado com sucesso </p>";

		header("Location: index.php");

	}else{
		$_SESSION ['msg'] = "<p style='color:red;'> Usuário não foi cadastrado com sucesso </p>";

		header("Location: cadastre.php");

	}


	}

	
}

 ?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<title> Cadastrar </title>
		<link href="cssB/bootstrap.css" rel="stylesheet">
		<link href="cssB/signin.css" rel="stylesheet">
		<!--<link rel="stylesheet" href="css/estilo.css"> -->
	</head>
	<body>

		<div class="container">
			<div class="form-signin" style= "background-color: #a4fcd5">

		<h1> Cadastrar Usuário </h1>

		<?php
		if (isset($_SESSION['msg']))
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);

	  ?>
			<section id="form">
			
			
				<form action="" method="POST" >
						
						
						
						<label >Nome Completo:</label>
						
						<input type="text" name="nome"placeholder= "Digite seu nome completo" class="form-control" >  <br>
						
						<label >Email:</label>
						
						 <input type="text" name="email" placeholder="Digite o seu email" class="form-control"><br> 	

						 
						<label >Matricula:</label>
						
						 <input type="text" name="matricula" placeholder="Digite a sua matricula" class="form-control">	<br> 

						 
						<label >Senha:</label>				
						<input type="password" name="senha" placeholder="Digite a sua senha" class="form-control">	<br> 


						<input  type="submit" value="Cadastrar"  name="btnCadUser" class="btn btn-primary">
						
						

					

				</form>
					<div class = "row text-center" style= "margin-top: 20px;">
					Lembrou? <a href="index.php"> Clique aqui</a> para logar.

				</div>
				

				</section>
			</div>

		</div>


		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="jsB/bootstrap.min.js"></script>

	</body>


</html>