<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Download de termos</title>
	<link rel="stylesheet" href="css/estiloform.css">
	<link rel="stylesheet" href="css/estilo.css">	

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

	<section id="baixartermos">
			<nav>
				<ul class="termos">
					<li id="termo_1"><img src="img/Documento.png"/><a href="arquivos\TERMO_DE_COMPROMISSO_DE_ESTÁGIO_OBRIGATORIO.doc" download="Termo de compromisso.doc">Termo de compromisso - estágio obrigatório</a></li>
					
					<li id="termo_3"><img src="img/Documento.png"/><a href="arquivos\PLANO DE ATIVIDADES - COMPLEMENTO PARA TCE - OBRIGATORIO E NaO OBRIGATORIO.doc">Plano de atividades - Obrigatório e Não obrigatório</a></li>
				</ul>
			</nav>
				
		</section>
				 
			</table>

		<section id="rodape">
			<?php include "rodape.php"; ?>
		</section>

	</body>
	</html>