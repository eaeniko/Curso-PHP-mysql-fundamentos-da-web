<?php include("header.php");
include("conecta.php");
include("banco-produto.php"); ?>

<?php 
	if (array_key_exists("removido", $_GET) && $_GET["removido"]==true) {
?>	
		<p class="alert-success">Produto apagado com sucesso.</p>
<?php		
	}
?>

<table class="table table-striped table-bordered">
	<?php
		$produtos = listaProdutos($conexao);
		foreach ($produtos as $produto) :
	?>
		<tr>	
			<td><?= $produto['nome']?></td>
			<td><?= $produto['preco']?></td>
			<td>
				<a href="remove-produto.php?id=<?=$produto['id']?>" class="text-danger">Remover</a>
			</td>

		</tr>

	<?php 
		endforeach
	?>
</table>

<?php include("footer.php"); ?>