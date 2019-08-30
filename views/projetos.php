<a class="btn btn-success" href="?pagina=inserir_curso">Inserir novo curso</a>
<table class="table table-hover table-striped" id="cursos">
	<thead>
		<tr>
			<th>Nome curso</th>
			<th>Carga horária</th>
			<th>Editar</th>
			<th>Deletar</th>
		</tr>
	</thead>

	<tbody>
		<?php 
			while($linha = mysqli_fetch_array($consulta_projetos)){
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
		?>
			<td><a href="?pagina=inserir_curso&editar=<?php echo $linha['id_curso']; ?>">
				
				<i class="fas fa-edit"></i>

			</a></td>
			<td><a href="deleta_curso.php?id_curso=<?php echo $linha['id_curso']; ?>">
				<i class="fas fa-trash-alt"></i>
			</a></td></tr>

		<?php
			}
		?>
	</tbody>

</table>