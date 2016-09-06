<?php include("header.php");
include("conecta.php");
include("banco-categoria.php"); 
	
	$categorias = listaCategorias($conexao);
?>

	<h1>Formulário de produto</h1>
	<form action="adiciona-produto.php" method="post"><br>
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
				<br><td>Descrição</td>
				<td><textarea class="form-control" name="descricao"></textarea><br></td>
			</tr>
			<tr>
				<td>Categorias</td>
				<td> 
					<?php foreach ($categorias as $categoria) : ?>
						<input type="radio" name="categoria_id" value="<?=$categoria['id']?>"><?=$categoria['nome']?><br>
					<?php  endforeach ?>
				</td>
			</tr>
			<tr>
				<td>
				<input class="btn btn-primary" type="submit" name="cadastrar">
				</td>
			</tr>
		</table>

	</form>
<?php include("footer.php"); ?>