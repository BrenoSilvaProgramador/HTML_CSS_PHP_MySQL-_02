<?php
include_once("conexao.php");

$nome = $_POST["nome"];
$email = $_POST["email"];
$endereco = $_POST['endereco'];
$cidade = $_POST['cidade'];

$sql = "insert into tabela(nome, email, endereco, cidade) values ('$nome', '$email', '$endereco', '$cidade')";
$salvar = mysqli_query($conexao,$sql);

mysqli_close($conexao);

?>