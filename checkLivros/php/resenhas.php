<!------------------------------------------------------------------------------------------------------
Nome do projeto: Check Livros
Descrição: 

Autores:

Turma: 3TID
Matheus Felix Carlos                                                         Versão: 1.0                    
Hebert Victor Saravalle                                                      Data:20/06/21
Kaike Santos Coppola 

Fontes:
(Modal) https://www.youtube.com/watch?v=fu-enUG2VEE
(Relacionamento do tables) 
----------------------------------------------------------------------------------------------------------->
<?php
require_once 'CheckUsuarios.php';
$u = new Usuario;

session_start();
if($_SESSION['username'] != ""){
	$username = $_SESSION['username'];
} else {
	$_SESSION['username'] = "";
	$username = $_SESSION['username'];
}

if($_SESSION['tipo_conta'] != ""){
	$type_cont = $_SESSION['tipo_conta'];
}else{
	$_SESSION['tipo_conta'] = "";
	$type_cont = $_SESSION['tipo_conta'];
}

$livro = $_GET['livro'];
?>
<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="x-UA-compatible"content="ie=edge,chrome=1"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title><?php echo $livro ?></title>

		<script src="https://kit.fontawesome.com/deeb6da8f1.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="../css/estilos_gerais.css"/>
		<link rel="stylesheet" href="../css/estilo_desktop.css"/>
		<link rel="stylesheet" href="../css/estilo_tablet.css"/>
		<link rel="stylesheet" href="../css/estilo_mobile.css"/>
	</head>
	<body class="row">
		<?php 
	include("menu.php");
			require("conexao.php");

			$sql = "SELECT * FROM livros WHERE titulo_livro = '$livro'";
			$result = mysqli_query($conexao,$sql);
			while($linha = mysqli_fetch_array($result)){
				$autor = $linha['autor'];
				$editora = $linha['editora'];
				$ano = $linha['ano_publicado'];
				$img = $linha['img_href'];
				$id  = $linha['id_livro'];
			}
		?>

		<section class="col-s-12 col-m-12 col-12 resenhas-container">
			<div class="img-container">
				<img src="<?php echo $img ?>"><br/><br/>
				<div class="dados-livro">
					<?php
						 echo "<p>Titulo: ".$livro."</p>";
						 echo "<p>Autor: ".$autor."</p>";
						 echo "<p>Editora: ".$editora."</p>";
						 echo "<p>Ano de publicação: ".$ano."</p>";
					?>
				</div>
			</div>
			<div class="resenhas-div">
				<h2>Resenhas</h2><br/><hr/>
				<br/>

				<div class="div_nova_resenha">
					<?php
					//--------------- Campo para produção de resenhas---------------//
					require("phps_resultados/publi_resenha.php");
					if($username != ""){
					?>
					<form name="form_nova_resenha" action="" method="POST">
						<?php  
						echo "<h2>@".$username."</h2>";
						?>
						<textarea type="text" required rows="10" name="nova_resenha"></textarea>
						<input type="submit" name="Publicar" value="Publicar">
						<br/><br/><br/>
						<hr/><br/>
					</form>
					<?php
					}
					?>
				</div>
				<br/>
				<?php 
				$sql = "SELECT * FROM resenhas WHERE id_livro = '$id'";
				$result = mysqli_query($conexao, $sql);

				while($linha = mysqli_fetch_array($result)){
				?>
				<div class="resenha-user">
					<?php
					echo "<br/><h2>@".$linha['username']."</h2><br/>";
					echo "<p>".$linha['resenha']."</p><br/>";
					?>
				</div>
				<br/><br/>
				<?php
				}
				?>
			</div>
		</section>


		<?php include("footer.php"); ?>
	</body>
	<script type="text/javascript" src="../js/functions.js"></script> 
</html>
