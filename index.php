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
	<div id="corpo-form">
		<h1>Entrar</h1>
		<form  action="testeLogin.php" method="POST">
			<input type="email" name="email" placeholder="Email" maxlength="40">
			<input type="password" name="senha" placeholder="Senha" maxlength="15">
			<input class="button" type="submit" name="submit" value="ACESSAR">
			<a href="cadastro.php">Para acessar <strong>Cadastre-se Aqui!</strong></a>
			
		</form>
	</div>

</body>
</html>