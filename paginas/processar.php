<?php

$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["tel"];
$endereco = $_POST["end"];
$descricao = $_POST["desc"];


$sql = "INSERT INTO usuarios(nome, email, telefone, endereco, descricao) VALUES ('$nome', '$email', '$telefone','$endereco','$descricao')";
$query = mysqli_query($link, $sql);

if ($query === TRUE) 
{

	echo '
	<div class="alert alert-success" role="alert">
  		Cadastrado com sucesso!
	</div>';	
}
else{
	echo '
	<div class="alert alert-danger" role="alert">
  		Falhou!
	</div>';
}

?>