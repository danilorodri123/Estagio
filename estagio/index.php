<?php 
	session_start();

 ?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<title> Login </title>
		<link href="cssB/bootstrap.css" rel="stylesheet">
		<link href="cssB/signin.css" rel="stylesheet">
	</head>
	<body>

		<div class="container">
			<div class="form-signin" style= "background-color: #a4fcd5 " >

		<h1 class= "text-center"> <img src="img/ifpb.png" width="100px" height="70px"> </h1><br>

		

		<?php 
		if (isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}

		if (isset($_SESSION['msgcad'])){
			echo $_SESSION['msgcad'];
			unset($_SESSION['msgcad']);
		}

		 ?>
		<section id="form">
			
			
				<form  method="POST" action="validaracesso.php">
						
						<input type="text" name="login" placeholder= "Entre com a sua matricula" class="form-control"> <br>
						
						 <input type="password" name="senha" placeholder="Digite a sua senha"class="form-control">	<br>

					<label id="bt_login">
						<input type="submit" value="Logar" name="bt_form" class="btn btn-primary">
					</label>

				</form>


				<p class="text-center text-danger">

			
				
				<a href="cadastre.php"> Cadastrar Usuário </a>
				

		</section>

	</div>

</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="jsB/bootstrap.min.js"></script>

	</body>


</html>