<?php 
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

$query = "SELECT id FROM usuarios_pesq where usuarios_pesq='$_SESSION[usuario_pesq]'";
$consulta_id_user = mysqli_query($conexao,$query);



$nome_projeto = $_POST['$nome_projeto'];
$titulo_projeto = $_POST['titulo_projeto'];
$autor_projeto = $_POST['autor_projeto'];
$endereco_autor = $_POST['endereco_autor'];
$cidade_autor = $_POST['cidade_autor'];
$email_autor = $_POST['email_autor'];
$fone_autor = $_POST['fone_autor'];
$instituicao_autor = $_POST['instituicao_autor'];
$palavraschave_projeto = $_POST['palavraschave_projeto'];
$categorias_projetos_id = $_POST['categorias_projetos_id'];
$areas_projeto_id = $_POST['areas_projeto_id'];
$id_sub_categoria = $_POST['id_sub_categoria'];

/*$query = "INSERT INTO projetos
(nome_projeto,
titulo_projeto,
autor_projeto,
endereco_autor,
cidade_autor,
email_autor,
fone_autor,
instituicao_autor,
apresentador_projeto,
palavraschave_projeto,
categorias_projetos_id,
usuarios_pesq_id_pesq,
areas_projeto_id,
subarea_projeto_id)
VALUES
('$nome_projeto','$titulo_projeto','$autor_projeto','$endereco_autor','$cidade_autor','$email_autor','$fone_autor','$instituicao_autor',0,'$palavraschave_projeto','$categorias_projetos_id',$usuarios_pesq_id_pesq,'$areas_projeto_id','$id_sub_categoria')";*/

mysqli_query($conexao, $query);
?>

<style type="text/css">
			.carregando{
				color:#ff0000;
				display:none;
			}
		</style>
<h1>Inserir novo Projeto - Passo 2</h1>
<form method="post" action="">
	<br>
	<label class="badge badge-secondary">Nome do Projeto:</label><br>
	<input class="form-control" type="text" name="nome_projeto" placeholder="Insira o nome do projeto" required>
	<br>
	<label class="badge badge-secondary">Título do Projeto:</label><br>
	<input class="form-control"  type="text" name="titulo_projeto" placeholder="Insira a título do projeto" required>
	<br>
	<label class="badge badge-secondary">Autor do Projeto:</label><br>
	<input class="form-control"  type="text" name="autor_projeto" placeholder="Insira o nome do autor do projeto" required>
	<br>
	<label class="badge badge-secondary">Endereço do autor:</label><br>
	<input class="form-control"  type="text" name="endereco_autor" placeholder="Insira o endereço do autor do projeto" required>
	<br>
	<label class="badge badge-secondary">Cidade do autor:</label><br>
	<input class="form-control"  type="text" name="cidade_autor" placeholder="Insira a cidade do autor do projeto" required>
	<br>
	<label class="badge badge-secondary">E-mail do autor:</label><br>
	<input class="form-control"  type="text" name="email_autor" placeholder="Insira o e-mail do autor do projeto" required>
	<br>
	<label class="badge badge-secondary">Telefone do autor:</label><br>
	<input class="form-control"  type="text" name="fone_autor" placeholder="Insira o telefone do autor do projeto" required>
	<br>
	<label class="badge badge-secondary">Instituição do autor:</label><br>
	<input class="form-control"  type="text" name="instituicao_autor" placeholder="Insira a instituição do autor do projeto" required>
	<br>
	<label class="badge badge-secondary">Palavras chave::</label><br>
	<input class="form-control"  type="text" name="palavraschave_projeto" placeholder="Insira as palavras-chave referente ao projeto" required>
	<br>
	<label class="badge badge-secondary">Categoria do Projeto:</label><br>
	<select name="categorias_projetos_id" required>
	<option>Selecione</option>
					<?php
						$result_categorias_projeto = "SELECT * FROM categorias_projetos";
						$resultado_categorias_projeto = mysqli_query($conexao, $result_categorias_projeto);
						while($row_categorias_projeto = mysqli_fetch_assoc($resultado_categorias_projeto)){ ?>
							<option value="<?php echo utf8_encode($row_categorias_projeto['id']); ?>"><?php echo utf8_encode($row_categorias_projeto['nome_categoria']); ?></option> <?php
						}
					?>
  	</select>
	<br>
	<label class="badge badge-secondary">Área do Projeto:</label><br>
	<select name="areas_projeto_id"  id="areas_projeto_id" required>
	<option>Selecione</option>
					<?php
						$result_areas_projeto = "SELECT * FROM areas_projeto";
						$resultado_areas_projeto = mysqli_query($conexao, $result_areas_projeto);
						while($row_areas_projeto = mysqli_fetch_assoc($resultado_areas_projeto)){ ?>
							<option value="<?php echo utf8_encode($row_areas_projeto['id']); ?>"><?php echo utf8_encode($row_areas_projeto['nome_area']); ?></option> <?php
						}
					?>
				</select>
				<br>
	<label class="badge badge-secondary">Subárea do Projeto:</label><br>
			<span class="carregando">Aguarde, carregando...</span>
			<select name="id_sub_categoria" id="id_sub_categoria" required>
				<option value="">Escolha a Subárea</option>
			</select>
			<br>
	
		
		</form>
		<div id="coautor" >
		<table border="1">
		<tr><th><label class="badge badge-secondary">Nome Coautor:</label></th>
			<th><label class="badge badge-secondary">Apresentador do Projeto</th></tr>
		<tr><th><input type="text" id="nome_coautor" name="Coautor[]" />
		<a class="badge badge-success" style="cursor: pointer;" onclick="duplicarCampos();" >+</a>
		<a class="badge badge-danger" style="cursor: pointer;" onclick="removerCampos(this);" >-</a>
		<td><center><input type="radio" name="apresentador_projeto" value="nome_coautor" required></center></td>
	</th></tr>
		</table>
	</div>
	
	<div id="coautor2">
	</div>
	<input type="submit" class="btn btn-success" value="Próximo">
		<script type="text/javascript" src="https://www.google.com/jsapi"></script>
		<script type="text/javascript">
		  google.load("jquery", "1.4.2");
		</script>
		
		<script type="text/javascript">
	function duplicarCampos(){
	var clone = document.getElementById('coautor').cloneNode(true);
	var coautor2 = document.getElementById('coautor2');
	coautor2.appendChild (clone);
	
	var camposClonados = clone.getElementsByTagName('input');
	
	for(i=0; i<camposClonados.length;i++){
		camposClonados[i].value = '';
	}
	
	
	
}

function removerCampos(id){
	var node1 = document.getElementById('coautor2');
	node1.removeChild(node1.childNodes[0]);
}
		</script>
		<script type="text/javascript">
		$(function(){
			$('#areas_projeto_id').change(function(){
				if( $(this).val() ) {
					$('#id_sub_categoria').hide();
					$('.carregando').show();
					$.getJSON('subcategoria.php?search=',{areas_projeto_id: $(this).val(), ajax: 'true'}, function(j){
						var options = '<option value="">Escolha Subcategoria</option>';	
						for (var i = 0; i < j.length; i++) {
							options += '<option value="' + j[i].id + '">' + j[i].nome_subarea + '</option>';
						}	
						$('#id_sub_categoria').html(options).show();
						$('.carregando').hide();
					});
				} else {
					$('#id_sub_categoria').html('<option value="">– Escolha Subcategoria –</option>');
				}
			});
		});
		</script>
<?php
# Rodapé
include 'footer.php';
?>