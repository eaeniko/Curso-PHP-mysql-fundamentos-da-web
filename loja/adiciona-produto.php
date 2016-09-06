<?php include("header.php"); 
include("conecta.php");
include("banco-produto.php"); ?>
	<?php 

	$nome = $_POST["nome"];
	$preco = $_POST["preco"];
	$descricao = $_POST["descricao"];
	$categoria_id = $_POST['categoria_id'];


	if(insereProduto($conexao, $nome, $preco, $descricao, $categoria_id)) { ?>

		<p class="text-success">Produto <?php echo $nome; ?>, <?php echo $preco ?> reais adicionado com sucesso!</p>
	<?php } else { 
		$msg = mysqli_error($conexao);
		
	?>
		
		<p class="text-danger">Produto <?php echo $nome; ?>,  não foi adicionado. Verifique novamente.  <br><?= $msg ?> </p>

	<?php
	}

	?>

<?php include("footer.php"); ?>

