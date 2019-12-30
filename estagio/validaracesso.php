<?php 

session_start();
include_once("conexaoUserLogin.php");
	
	$bt_form = filter_input(INPUT_POST, 'bt_form', FILTER_SANITIZE_STRING);

	if($bt_form){
		$Matricula=  filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);
		$Senha=  filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

		if((!empty($Matricula)) AND (!empty($Senha))){

			//echo password_hash($Senha, PASSWORD_DEFAULT);

			$result_usuario = "SELECT id,nome,email,matricula, senha FROM cadastrouser WHERE matricula = '$Matricula' LIMIT 1 ";

			
//-------------------------------------------------------------------------------------------///
			$result_cadastroEstagio = "SELECT * FROM formulario2";

			$resultado_usuario = mysqli_query($link, $result_usuario);
			$resultado_cadastroEstagio = mysqli_query($link, $result_cadastroEstagio);

			//se o usuario ja for cadastrado em algum modelo para conclusao
			if ($resultado_cadastroEstagio) {
				
				$row_cadastro = mysqli_fetch_assoc($resultado_cadastroEstagio);
				if (password_verify($Senha,$row_cadastro['senha'])) {
					$_SESSION['id'] = $row_cadastro ['id'];
					$_SESSION['nome'] = $row_cadastro ['nome'];
					$_SESSION['email'] = $row_cadastro ['email'];

					header("Location: perfil.php");
				}
			}

//----------------------------------------------------------------------------------------//
			if($resultado_usuario){

				$row_usuario = mysqli_fetch_assoc($resultado_usuario);
				if (password_verify($Senha, $row_usuario['senha'])){

					$_SESSION['id'] = $row_usuario ['id'];
					$_SESSION['nome'] = $row_usuario ['nome'];
					$_SESSION['email'] = $row_usuario ['email'];

					header("Location: user.php");


				}else{
					$_SESSION ['msg'] = "Matricula ou Senha incorreta!";
		header("Location: index.php");

				}
			}




		}else{

			$_SESSION ['msg'] = "Matricula ou Senha incorreto!";
		header("Location: index.php");

		}
		

	}else {
		$_SESSION ['msg'] = "Página não encontrada";
		header("Location: index.php");


	}

?>