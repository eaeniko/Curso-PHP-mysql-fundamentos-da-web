<?php include("header.php"); ?>

	<h1>Formulário de produto</h1>
	<form action="adiciona-produto.php"><br>
		<table class="table">
			<tr>
				<td>Nome:</td>
				<td><input class="form-control" type="text" name="nome"></td><br>
			</tr>
	
			<tr>
				<br><td>Preco:</td>
				<td><input class="form-control" type="number" name="preco"><br></td>
			</tr>
			<tr>
				<td>
				<input class="btn btn-primary" type="submit" name="cadastrar">
				</td>
			</tr>
		</table>

	</form>
<?php include("footer.php"); ?>