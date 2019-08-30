<?php
include 'db.php';
?>
<!DOCTYPE html>
<style type="text/css">
            .carregando{
                color:#ff0000;
                display:none;
            }
        </style>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inserir Novo Projeto</title>
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/jquery.steps.css">
</head>
<body>
    <form id="cad_projeto" method="post">
        <div>
            <h3>Cadastro do Projeto</h3>
            <section>
    <label class="badge badge-secondary">Nome do Projeto:</label><br>
    <input class="form-control" type="text" name="nome_projeto" placeholder="Insira o nome do projeto" required><br>
    <label class="badge badge-secondary">Título do Projeto:</label><br>
    <input class="form-control"  type="text" name="titulo_projeto" placeholder="Insira a título do projeto" required><br>
    <label class="badge badge-secondary">Categoria do Projeto:</label><br>
    <select name="categorias_projetos_id" required><br>
    <option value="">Selecione</option>
                    <?php
                        $result_categorias_projeto = "SELECT * FROM categorias_projetos";
                        $resultado_categorias_projeto = mysqli_query($conexao, $result_categorias_projeto);
                        while($row_categorias_projeto = mysqli_fetch_assoc($resultado_categorias_projeto)){ ?>
                            <option value="<?php echo utf8_encode($row_categorias_projeto['id']); ?>"><?php echo utf8_encode($row_categorias_projeto['nome_categoria']); ?></option> <?php
                        }
                    ?>
    </select><br>
    <br>
    <label class="badge badge-secondary">Área do Projeto:</label><br>
    <select name="areas_projeto_id"  id="areas_projeto_id" required="">
    <option value="">Selecione</option>
                    <?php
                        $result_areas_projeto = "SELECT * FROM areas_projeto";
                        $resultado_areas_projeto = mysqli_query($conexao, $result_areas_projeto);
                        while($row_areas_projeto = mysqli_fetch_assoc($resultado_areas_projeto)){ ?>
                            <option value="<?php echo utf8_encode($row_areas_projeto['id']); ?>"><?php echo utf8_encode($row_areas_projeto['nome_area']); ?></option> <?php
                        }
                    ?>
                </select><br>
                <br>
    <label class="badge badge-secondary">Subárea do Projeto:</label><br>
            <span class="carregando">Aguarde, carregando...</span>
            <select name="id_sub_categoria" id="id_sub_categoria" required="">
                <option value="">Escolha a Subárea</option>
            </select><br>
            </section>


            <h3>Cadastro do Autor</h3>
            <section>
    <label class="badge badge-secondary">Autor do Projeto:</label><br>
    <input class="form-control"  type="text" name="autor_projeto" placeholder="Insira o nome do autor do projeto" required>
    <label class="badge badge-secondary">Endereço do autor:</label><br>
    <input class="form-control"  type="text" name="endereco_autor" placeholder="Insira o endereço do autor do projeto" required>
    <label class="badge badge-secondary">Cidade do autor:</label><br>
    <input class="form-control"  type="text" name="cidade_autor" placeholder="Insira a cidade do autor do projeto" required>
    <label class="badge badge-secondary">E-mail do autor:</label><br>
    <input class="form-control"  type="text" name="email_autor" placeholder="Insira o e-mail do autor do projeto" required>
    <label class="badge badge-secondary">Telefone do autor:</label><br>
    <input class="form-control"  type="text" name="fone_autor" placeholder="Insira o telefone do autor do projeto" required>
    <label class="badge badge-secondary">Instituição do autor:</label><br>
    <input class="form-control"  type="text" name="instituicao_autor" placeholder="Insira a instituição do autor do projeto" required>
    <label class="badge badge-secondary">Palavras chave::</label><br>
    <input class="form-control"  type="text" name="palavraschave_projeto" placeholder="Insira as palavras-chave referente ao projeto" required>
            </section>


            <h3>Orientador</h3>
            <section>
    <label class="badge badge-secondary">Nome do Orientador:</label><br>
    <input class="form-control" type="text" name="nome_orientador" placeholder="Insira o nome do orientador" required>
    <label class="badge badge-secondary">Instituição do Orientador:</label><br>
    <input class="form-control" type="text" name="instituição_orientador" placeholder="Insira a instituição do orientador" required>
    <label class="badge badge-secondary">E-mail do Orientador:</label><br>
    <input class="form-control" type="email" name="email_orientadorcol" placeholder="Insira o e-mail do orientador" required>
    <label class="badge badge-secondary">E-mail do Orientador:</label><br>
    <input class="form-control" type="email" name="email_orientadorcol1" placeholder="Insira o segundo e-mail do orientador, caso haja">
    <label class="badge badge-secondary">Telefone do Orientador:</label><br>
    <input class="form-control" type="tel" name="fone_orientador" placeholder="(DDD)XXXX-XXXX Insira o telefone do orientador" required>
            </section>


            <h3>Coautor</h3>
            <section>
                <div id="coautor" >
        <table border="1" width="100%">
        <tr><th><center><label class="badge badge-secondary">Nome Coautor:</label></center></th>
            <th><center><label class="badge badge-secondary">Apresentador do Projeto</th></center></tr>
        <tr><th><input type="text" id="nome_coautor" name="Coautor[]" />
        <a class="badge badge-success" style="cursor: pointer;" onclick="duplicarCampos();" >+</a>
        <a class="badge badge-danger" style="cursor: pointer;" onclick="removerCampos(this);" >-</a>
        <td><center><input type="radio" name="apresentador_projeto" value="nome_coautor"></center></td>
    </th></tr>
        </table>
    </div>
    
    <div id="coautor2">
    </div>
            </section>
        </div>
    </form>
    <script src="./js/jquery.js"></script>
    <script src="./js/jquery.validate.js"></script>
    <script src="./js/jquery.steps.js"></script>
    <script src="./js/script.js"></script>
</body>
</html>