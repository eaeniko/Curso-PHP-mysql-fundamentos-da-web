<?php include("header.php");
include("conecta.php");
include("banco-categoria.php"); 
include("banco-produto.php"); 

$id = $_GET['id'];
$produto = buscaProduto($conexao, $id);

$categorias = listaCategorias($conexao);
$usado = $produto['usado'] ? "checked='checked'" : "";
?>

	<h1>Alteração de produto</h1>
	<form action="altera-produto.php" method="post"><br>
		<input type="hidden" name="id" value="<?=$produto['id']?>">
		<table class="table">
			<tr>
				<td>Nome:</td>
				<td><input class="form-control" type="text" name="nome" value="<?=$produto['nome']?>"></td><br>
			</tr>
	
			<tr>
				<br><td>Preco:</td>
				<td><input class="form-control" type="number" name="preco" value="<?=$produto['preco']?>"><br></td>
			</tr>
			<tr>
				<br><td>Descrição</td>
				<td><textarea class="form-control" name="descricao"><?=$produto['descricao']?></textarea><br></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="checkbox" name="usado" <?=$usado?> value="true"> Usado</td>
			</tr>
			<tr>
				<td>Categorias</td>
				<td> 
					<select name="categoria_id" class="form-control">
						<?php foreach ($categorias as $categoria) :
							$essaEhACategoria = $produto['categoria_id'] == $categoria['id'];
							$selecao = $essaEhACategoria ? "selected='selected'" : "";
						?>
							<option value="<?=$categoria['id']?>" <?=$selecao?>> <?=$categoria['nome']?>
							</option>
						<?php  endforeach ?>
					</select>
				</td>
			</tr>
			<tr>
				<td>
				<button class="btn btn-primary" type="submit">Alterar</button>
				</td>
			</tr>
		</table>

	</form>
<?php include("footer.php"); ?>