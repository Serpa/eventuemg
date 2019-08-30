<?php 

include 'db.php';

$usuario_pesq = ($_POST['usuario_pesq']);

# antes
$senha_pesq = ($_POST['senha_pesq']);


$query = "SELECT * FROM usuarios_pesq WHERE usuario_pesq = '$usuario_pesq' and senha_pesq = '$senha_pesq'";

$consulta = mysqli_query($conexao, $query);

if(mysqli_num_rows($consulta) == 1){

	session_start();
	$_SESSION['login'] = true;
	$_SESSION['usuario_pesq'] = $usuario_pesq;

	header('location:index.php');
}
else{
	header('location:index.php?erro');
}