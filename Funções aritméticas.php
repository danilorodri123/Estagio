<!DOCTYPE html>
<html>
<head>
	<title>Funções aritméticas</title>
</head>
<body>

	<?php 
		$n1 = 4;
		$n2 = 3;
		echo "O valor absoluto de $n2 é " . abs($n2);
		echo "<br/> O valor de $n1<sup>$n2</sup> é " . pow($n1, $n2);
		echo "<br/> O valor da raiz de $n1 é " . sqrt($n1);
		echo "<br/> O valor arredondado de $n2 é " . round($n2); // ceil floor
		echo "<br/> O valor de $n1 em moeda é R$ " . number_format($n1,2, "," , ".");
	?>

</body>
</html>