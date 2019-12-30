<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Perfil</title>
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

			<section>
				<?php include "rodape.php" ?>
			</section>
				 
			</table>

	</section>

</body>
</html>