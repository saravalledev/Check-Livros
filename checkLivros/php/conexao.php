<?php
	$conexao = mysqli_connect("localhost","root", "", "check_livros");
	if (!$conexao){
	    echo "Erro na conexão!!!";
	}
?>