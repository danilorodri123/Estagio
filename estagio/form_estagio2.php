<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Cadastro de Estágio Obrigatório</title>
	<link rel="stylesheet" href="css/estiloform.css">
</head>
<body>

	<?php
		if (isset($_SESSION['msg']))
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);

	  ?>


	<section id="principal">
			
	
			<section id="topo">
				<?php include "topo.php"; ?>
			</section>
			

		</section>

	<section id="formalizacao">
		<h2 align="center"> Plano de Atividades e Orientação</h2>
	</section>

	<div id="zona">
		<form id="formal" action="cadastrando_form2" method="POST">
			<label>Data Início: </label>
			<br><input type="text" name="dia1" size="2" maxlength="2" placeholder="dd">
			<input type="text" name="mes1" size="2" maxlength="2" placeholder="mm"> 
	   		<input type="text" name="ano1" size="4" maxlength="4" placeholder="aaaa">

	   		<br><label>Data Prevista para Encerramento: </label>
			<br><input type="text" name="dia2" size="2" maxlength="2" placeholder="dd">
			<input type="text" name="mes2" size="2" maxlength="2" placeholder="mm"> 
	   		<input type="text" name="ano2" size="4" maxlength="4" placeholder="aaaa">

	   		<br><label>Carga Horária Semanal: </label>
	   		<br><input type="text" name="CHS" size="2" maxlength="2">

	   		<br><label>Orientador:</label>
	   		<br><input type="text" name="orientador">

	   		<br><label>Plano de Atividades:</label>
	   		<br><input type="text" name="plATIVIDADES" id="plATIVIDADES"> <br>

	   		<br><input class="btnLimpar2" type="reset" value="Limpar"> <input class="btnCadastrar" type="submit" value="Cadastrar">

		</form>
	</div>
	

</body>
</html>
