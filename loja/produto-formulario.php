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
				<td></td>
				<td><input type="checkbox" name="usado" value="true"> Usado</td>
			</tr>
			<tr>
				<td>Categorias</td>
				<td> 
					<select name="categoria_id" class="form-control">
						<?php foreach ($categorias as $categoria) : ?>
							<option value="<?=$categoria['id']?>"><?=$categoria['nome']?>
							</option>
						<?php  endforeach ?>
					</select>
				</td>
			</tr>
			<tr>
				<td>
				<button class="btn btn-primary" type="submit">Cadastrar</button>
				</td>
			</tr>
		</table>

	</form>
<?php include("footer.php"); ?>