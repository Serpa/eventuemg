<h1>Inserir novo Orientador</h1>
<form method="post" action="processa_orientadores.php">
	<br>
	<label class="badge badge-secondary">Nome do Orientador:</label><br>
	<input class="form-control" type="text" name="nome_orientador" placeholder="Insira o nome do orientador" required>
	<br>
	<label class="badge badge-secondary">Instituição do Orientador:</label><br>
	<input class="form-control" type="text" name="instituição_orientador" placeholder="Insira a instituição do orientador" required>
	<br>
	<label class="badge badge-secondary">E-mail do Orientador:</label><br>
	<input class="form-control" type="email" name="email_orientadorcol" placeholder="Insira o e-mail do orientador" required>
	<br>
	<label class="badge badge-secondary">E-mail do Orientador:</label><br>
	<input class="form-control" type="email" name="email_orientadorcol1" placeholder="Insira o segundo e-mail do orientador, caso haja">
	<br>
	<label class="badge badge-secondary">Telefone do Orientador:</label><br>
	<input class="form-control" type="tel" name="fone_orientador" placeholder="(DDD)XXXX-XXXX Insira o telefone do orientador" required>
	<br>
	<input type="submit" class="btn btn-success" value="Inserir Orientador">
</form>