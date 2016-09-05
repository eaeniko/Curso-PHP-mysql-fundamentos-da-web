<?php include("header.php"); ?>
<?php include("conecta.php"); 

$resultado = mysqli_query($conexao, "select * from produtos");
while($produto = mysqli_fetch_assoc($resultado)) {
	echo $produto['nome'] . "<br>";
}

?>

<?php include("footer.php"); ?>