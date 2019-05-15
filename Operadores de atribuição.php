<!DOCTYPE html>
<html>
<head>
	<title>ATRIBUIÇÃO</title>
</head>
<body>
	<div>
		<?php
			$preco = 156;
			echo "O preco do produto é " . $preco;
			$preco += $preco*15/100;
			echo "<br/> O preço com um aumento de 15% é R$" . number_format($preco,2);
			$preco -= $preco*15/100;
			echo "<br/> O preço com um desconto de 15% é R$" . number_format($preco,2);
		?>
	</div>
</body>
</html>