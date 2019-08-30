<!DOCTYPE html>
<html>
<head>
    <title>UEMG</title>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">


    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <header>
        <div class="container">
            <a href="?pagina=home"><img src="img/uemg.png" title="Logo" alt="Logo"></a>
            <div id="menu">
            <a href="?pagina=cadastrar_projetos">Cadastrar projeto</a>
            <a href="?pagina=cadastrar_coautores">Cadastrar coautor</a>
            <a href="?pagina=cadastrar_orientador">Cadastrar orientador</a>
            <a href="?pagina=projetos">Projetos</a>
            <?php if(isset($_SESSION['login'])){ ?>
                    <a href="logout.php">
                        <?php echo $_SESSION['usuario_pesq']; ?> 
                        (Logout)      
                    </a>
                <?php } ?>
            </div>
        </div>
    </header>

    <div id="conteudo" class="container">