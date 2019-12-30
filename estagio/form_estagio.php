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


	
	
	<section id="definicao">
		<h1 id="titulo">Cadastro de Estágio</h1>
		<div id="area">
			<form id="cadastro_estagiario" method="POST" action="cadastrando_form.php">
				
					<label>CNPJ:</label><br><input  type="text" name="txtcnpj" size="50" maxlength="50"><br>

					<br><label>Razão Social (Nome da Empresa):</label><br><input  name="txtRazaoSocial" type="text" size="50" maxlength="50"><br>

					<br><label>Setor de Estágio:</label><br><input name="txtSetorEstagio" type="text" size="50" maxlength="20"><br>

					<br><label>Nome completo do Supervisor (pessoa responsável na empresa):</label><br><input  name="txtNomeSupervisor" type="text" size="50" maxlength="100"><br>

					<br><label>E-mail do Supervisor:</label><br><input  name="txtEmailSupervisor" type="text" size="50" maxlength="40"><br>

					<br><label>Telefone supervisor:</label><br><input  name="txtTelefoneSupervisor" type="text" size="50" maxlength="13"><br>

					<br><label>Cargo supervisor:</label><br><input  name="txtCargoSupervisor" type="text" size="50" maxlength="30"><br>

					<br><label>Valor da bolsa:</label><br><input  name="txtValorBolsa" type="text" size="50" maxlength="9"><br>
					
		


					<br><input class="btnLimpar" type="reset" value="Limpar"> <input class="btnAvançar" type="submit" value="Avançar">
				
			</form>
		</div>
	</section>




</body>
</html>