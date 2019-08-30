<?php

# Iniciar sessão
session_start();

# Base de dados
include 'db.php';

# Cabeçalho
include 'header.php';

# Conteúdo da página
if(isset($_SESSION['login'])){
	if(isset($_GET['pagina'])){
		$pagina = $_GET['pagina'];
	}
	else{
		$pagina = 'cadastrar_projetos';
	}
}
else{
	$pagina = 'home';
}

switch($pagina){
	case 'cadastrar_coautores': include 'views/coautores_projeto.php'; break;
	case 'cadastrar_projetos': include 'views/cadastrar_projetos.php'; break;
	case 'passo_projetos2': include 'views/passo_projetos2.php'; break;
	case 'cadastrar_orientador': include 'views/orientador.php'; break;
	case 'projetos': include 'views/projetos.php'; break;
	default: include 'views/home.php'; break;
}

# Rodapé
include 'footer.php';
