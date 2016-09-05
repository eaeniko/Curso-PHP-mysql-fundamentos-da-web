<?php include("header.php"); 
include("conecta.php");
include("banco-produto.php"); ?>
	<?php 

	$nome = $_GET["nome"];
	$preco = $_GET["preco"];


	if(insereProduto($conexao, $nome, $preco)) { ?>

		<p class="text-success">Produto <?php echo $nome; ?>, <?php echo $preco ?> reais adicionado com sucesso!</p>
	<?php } else { 
		$msg = mysqli_error($conexao);
		
	?>
		
		<p class="text-danger">Produto <?php echo $nome; ?>,  não foi adicionado. Verifique novamente.  <br><?= $msg ?> </p>

	<?php
	}

	?>

<?php include("footer.php"); ?>

