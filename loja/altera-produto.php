<?php include("header.php"); 
include("conecta.php");
include("banco-produto.php"); ?>
	<?php 

	$id = $_POST['id'];
	$nome = $_POST["nome"];
	$preco = $_POST["preco"];
	$descricao = $_POST["descricao"];
	$categoria_id = $_POST['categoria_id'];

	if(array_key_exists('usado', $_POST)) {
		$usado = "true";
	} else {
		$usado = "false";
	}

	if(alteraProduto($conexao, $id, $nome, $preco, $descricao, $categoria_id, $usado)) { ?>

		<p class="text-success">Produto <?php echo $nome; ?>, <?php echo $preco ?> reais foi alterado com sucesso!</p>
	<?php } else { 
		$msg = mysqli_error($conexao);
		
	?>
		
		<p class="text-danger">Produto <?php echo $nome; ?>,  não foi alterado. Verifique novamente.  <br><?= $msg ?> </p>

	<?php
	}

	?>

<?php include("footer.php"); ?>

