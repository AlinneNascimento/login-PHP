<?php
session_start();
//print_r($_REQUEST);

if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
{
	include_once('conexao.php');
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	//print_r('email'.$email);
	//print_r('senha'.$senha);

	$sql = "SELECT * FROM usuarios WHERE email='$email' AND senha='$senha'"; 
	$result = $conexao->query($sql);
	
	if(mysqli_num_rows($result) < 1)
	{
		unset($_SESSION['email']);
		unset($_SESSION['senha']);
		header('Location: index.php');
	}

	else
	{
		$_SESSION['email'] = $email;
		$_SESSION['senha'] = $senha;
		header('Location: sistema.php');
	}
	
}
else 
{
	
}


?>