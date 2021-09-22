<?php
$conexao=mysqli_connect("localhost","root","","3tid");
if (isset($_POST["enviar_form1"])){

	$nomeLivro = $_POST["nome1"];
	$email1 = $_POST["email1"];
	$sugestaoLivro = $_POST["sugestao"];
	$generoLivro = $_POST["genero"];

	$sql=("INSERT INTO `sugestoes_livros`(`nome`, `email`, `sugestoes`, `genero_livro`) VALUES ('$nomeLivro', '$email', '$sugestaoLivro', '$generoLivro');");

	$dd=mysqli_query($conexao,$sql);

}
if (isset($_POST["enviar_form2"])) {
	
	$nomePessoa = $_POST["nome2"];
	$email2 = $_POST["email2"];
	$feedback = $_POST["feedBack"];

	$sql=("INSERT INTO `feedback`(`nome`, `email`, `feedback_site`) VALUES ('$nomePessoa', '$email2', '$feedback');");

	$dd=mysqli_query($conexao,$sql);
	
}
?>