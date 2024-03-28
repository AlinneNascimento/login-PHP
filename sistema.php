<?php

session_start();
if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['SENHA']) == true))
{$logado = $_SESSION['email'.$email];

	unset($_SESSION['email']);
	unset($_SESSION['senha']);
	header('Location:login.php');
}
$logado = $_SESSION['email'];

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
		.btn{
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
	<div class="d-flex">
		<a href="home.php" class="btn">SAIR</a>
		
	</div>
	<?php
		echo "<h1>Olá! <u>$logado</u></h1>";
	?>

</body>
</html>