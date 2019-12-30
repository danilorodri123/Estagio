<header>
	
<?php
if(!empty($_SESSION['id'])){


 echo  "<h1>".$_SESSION['nome']."</h1>";

} else{

	$_SESSION ['msg'] = "Área Restrita";
	header("Location: index.php");
}

?>
</header>
<figure>
	<img src="img/ifpb.png">
</figure>

<nav>
	<ul id="foto">
		<li> <img src="img/menu.png" id="cam">
			<ul id="itens_menu">
				<li > <a href="user.php">Menu Inicial </a></li>
				<li > <a href="perfil.php">Perfil</a></li>
				<li > <a href="termos.php">Download de termos</a></li>
				<li > <a href="sailogin.php">Sair </a></li>
			</ul>
		</li>	
	</ul>
</nav>