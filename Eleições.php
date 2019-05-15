<!DOCTYPE html>
<html>
<head>
	<title>ELEIÇÕES</title>
</head>
<body>
	<div>
		<?php
			$anoNasc = 2002;
			$idade = 2019 - $anoNasc;
			echo "Quem nasceu em $anoNasc tem idade de $idade anos ";
			$tipoVoto = ($idade >= 18) ? "OBRIGATORIO" : "FACULTATIVO";
			echo "<br/> O tipo de voto é " . $tipoVoto;
		?>
	</div>
</body>
</html>