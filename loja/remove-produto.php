<?php include("header.php"); 
include("conecta.php");
include("banco-produto.php"); 


$id = $_POST['id'];
removeProduto($conexao, $id);

header("location: produto-lista.php?removido=true");
die();
?>

