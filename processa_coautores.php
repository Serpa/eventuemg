<?php 

include 'db.php';

$nome_coautor = $_POST['nome_coautor'];

$query = "INSERT INTO coautores_projeto(nome_coautor) VALUES('$nome_coautor')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=cadastrar_coautores');
