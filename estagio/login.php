<?php 


session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Sistema de Cadastro</title>
</head>
<body>

	<?php
		if (isset($_SESSION['msg']))
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);

	  ?>
	<form name="signup" method="POST" action="cadastrando.php">

		Nome_Completo: <input type="text" name="Nome_Completo" /> <br/><br/>

		Email: <input type="text" name="Email" /> <br/><br/>
		
		Matricula: <input type="text" name="Matricula" /><br/><br/>
		Senha: <input type="password" name="Senha" /><br/><br/>

		<input type="submit" value="cadastrar">

	</form>

</body>
</html>