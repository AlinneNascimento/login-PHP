<?php

if(isset($_POST['submit'])){
	//print_r($_POST['nome']);
	//print_r($_POST['email']);
	//print_r($_POST['senha']);

	include_once('conexao.php');

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$confirmasenha = $_POST['confirmaSenha'];

	if($senha == $confirmasenha){
		$result = mysqli_query($conexao, "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')");
		Echo"<p style='color: green; text-align:center; padding:20px;'><strong>Cadastro realizado com sucesso!</strong></p>";
	}
	else{
		Echo"<p style='color: red; text-align:center; padding:20px;'><strong>As senhas precisam ser iguais!</strong></p>";
	}

    
}			

			

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style>
		body{
			text-align: center;
		}
		.btn-sair{
			display: block;
			height: 20px;
			width: 40px;
			margin: 10px;
			border-radius: 10px;
			font-size: 12pt;
			padding: 10px 10px;
			background-color: dodgerblue;
			border: none;
			cursor: pointer;
			color: white;
		}
	</style>
</head>
<body>
	<a href="home.php" class="btn-sair">Voltar</a>
	<div id="corpo-form-cad">
		<h1>Cadastro</h1>
		<form action="cadastro.php" method="POST">
			<input type="tex" name="nome" placeholder="Nome e Sobrenome" maxlength="40">
			<input type="email" name="email" placeholder="Email" maxlength="40">
			<input type="password" name="senha" placeholder="Senha" maxlength="15">
			<input type="password" name="confirmaSenha" placeholder="Confirmar Senha" maxlength="15">
			<input class="button" type="submit" name="submit" value="CADASTRAR">
			
		</form>
	</div>
</body>
</html>