<div class="flex-livros">
	<?php
	
	//--------------- Busca pelo genero ---------------//
	if(isset($_GET['genero'])){
		$_SESSION['genero'] = $_GET['genero'];

		$sql = "SELECT * FROM livros WHERE genero_livro = '$genero'";
		$result = mysqli_query($conexao,$sql);

		while($linha = mysqli_fetch_array($result)){

			$titulo = $linha['titulo_livro'];
			$imge = $linha['img_href'];
	?>
	<div class="livro-resultado">
		<a href="resenhas.php?livro=<?php echo $titulo ?>" style="display: contents;">
			<img class="capa" src="<?php echo $imge;?>"/> 
		</a>
	</div>
	<?php
		}
	}

	//--------------- Busca o titulo pela Barra de pesquisa ---------------//
	if(isset($_GET['search'])){
		$_SESSION['search'] = $_GET['search'];
		$sql = "SELECT * FROM livros WHERE titulo_livro LIKE ('%$search%')";
		$result = mysqli_query($conexao,$sql);

		while($linha = mysqli_fetch_array($result)){

			$titulo = $linha['titulo_livro'];
			$imge = $linha['img_href'];
	?>
	<div class="livro-resultado">
		<a href="resenhas.php?livro=<?php echo $titulo ?>" style="display: contents;">
			<img class="capa" src="<?php echo $imge;?>"/>
		</a>
	</div>
	<?php
		}
	}
	?>

</div>