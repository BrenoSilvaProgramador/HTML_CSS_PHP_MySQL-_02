<?php
	$tamanho_degrau = $_POST["degrau"];
	$tamnho_desejado = $_POST['altura_maxima'];

	echo "O tamanho de cada degrau e $tamanho_degrau!<br>O tamanho maximo em que o usuario deseja subir e $tamnho_desejado!<br>";

	$numero_degraus = $tamnho_desejado / $tamanho_degrau;

	echo "Você precisara subir $numero_degraus andares para poder alcançar a altura de $tamnho_desejado!";
?>