<?php 

include 'db.php';

$nome_coautor = $_POST['nome_coautor'];
$instituição_orientador = $_POST['instituição_orientador'];
$email_orientadorcol = $_POST['email_orientadorcol'];
$email_orientadorcol1 = $_POST['email_orientadorcol1'];
$fone_orientador = $_POST['fone_orientador'];

$query = "INSERT INTO orientadores_projeto(nome_orientador,instituição_orientador,email_orientadorcol,email_orientadorcol1,email_orientadorcol1) VALUES('$nome_coautor','$instituição_orientador','email_orientadorcol','email_orientadorcol1','fone_orientador')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=cadastrar_orientador');
