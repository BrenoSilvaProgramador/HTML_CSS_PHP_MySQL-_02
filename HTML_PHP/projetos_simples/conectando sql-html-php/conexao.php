<?php
	$hostname = "localhost";
	$user = "root";
	$password = "";
	$database = "banco";

	$conexao = mysqli_connect($hostname, $user, $password, $database);

	if(!$conexao) {
		echo "Falha na conexao com o Banco de dados";
	}
?>