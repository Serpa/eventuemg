<table style="border: 1px solid #ccc; width: 100%">
<tr>
    <th>Id</th>
    <th>Nome Projeto</th>
    <th>Titulo Projeto</th>
    <th>Autor Projeto</th>
    <th>Endereço Autor</th>
    <th>Cidade Autor</th>
    <th>E-mail Autor</th>
    <th>Telefone Autor</th>
    <th>Instituição Autor</th>
    <th>Apresentador do Projeto</th>
    <th>Palavras chave do Projeto</th>
    <th>Categorias do Projeto</th>
    <th>Coautores do Projeto</th>
    <th>Orientadores do Projeto</th>
    <th>Usuario Pesquisa</th>
    <th>Areas do Projeto</th>
</tr>

<?php
while($linha = mysqli_fetch_array($consulta)){
    echo '<tr><td>'.$linha['id'].'</td>';
    echo '<td>'.$linha['nome_projeto'].'</td>';
    echo '<td>'.$linha['titulo_projeto'].'</td>';
    echo '<td>'.$linha['autor_projeto'].'</td>';
    echo '<td>'.$linha['endereco_autor'].'</td>';
    echo '<td>'.$linha['cidade_autor'].'</td>';
    echo '<td>'.$linha['email_autor'].'</td>';
    echo '<td>'.$linha['fone_autor'].'</td>';
    echo '<td>'.$linha['instituicao_autor'].'</td>';
    echo '<td>'.$linha['apresentador_projeto'].'</td>';
    echo '<td>'.$linha['palavraschave_projeto'].'</td>';
    echo '<td>'.$linha['categorias_projetos_id'].'</td>';
    echo '<td>'.$linha['coautores_projeto_id'].'</td>';
    echo '<td>'.$linha['orientadores_projeto_id'].'</td>';
    echo '<td>'.$linha['usuarios_pesq_id_pesq'].'</td>';
    echo '<td>'.$linha['areas_projeto_id'].'</td></tr>';

}
?>
</table>
