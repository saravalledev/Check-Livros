<!------------------------------------------------------------------------------------------------------
Nome do projeto: Check Livros
Descrição: 

Autores:

Turma: 3TID
Matheus Felix Carlos                                                         Versão: 1.0                    
Hebert Victor Saravalle                                                      Data:20/06/21
Kaike Santos Coppola 

----------------------------------------------------------------------------------------------------------->
<?php
session_start();
if($_SESSION['username'] != ""){
	$username = $_SESSION['username'];
} else {
	$_SESSION['username'] = "";
	$username = $_SESSION['username'];
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="x-UA-compatible"content="ie=edge,chrome=1"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>Gêneros Literários</title>

		<script src="https://kit.fontawesome.com/deeb6da8f1.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="../css/estilos_gerais.css"/>
		<link rel="stylesheet" href="../css/estilo_desktop.css"/>
		<link rel="stylesheet" href="../css/estilo_tablet.css"/>
		<link rel="stylesheet" href="../css/estilo_mobile.css"/>
	</head>

	<body class="row">
		<?php include("menu.php");?>

		<h1 class="gen-h1">Selecione um Gênero Literário</h1>

		<section class="col-s-12 col-m-12 col-12 gen-container">

			<a href="resultado.php?genero=cienciashumanas">
				<img src="../img/generos/generos_Ciencias-Humanas2.jpg"/>
			</a>

			<a href="resultado.php?genero=cienciasexatas">
				<img src="../img/generos/generos_Ciencias-Exatas.jpg"/>
			</a>

			<a href="resultado.php?genero=cienciasbiologicas">
				<img src="../img/generos/generos_ciencias-biologicas.jpg"/>
			</a>

			<a href="resultado.php?genero=literaturanacional">
				<img src="../img/generos/generos_Lit-Nacional.png"/>
			</a>

			<a href="resultado.php?genero=literaturainfantojuvenil">
				<img src="../img/generos/generos_Lit-InfantoJuvenil.jpg"/>
			</a>

			<a href="resultado.php?genero=literaturaestrangeira">
				<img src="../img/generos/generos_Lit-Estrangeira.jpg"/>
			</a>

			<a href="resultado.php?genero=hqsemangas">
				<img src="../img/generos/generos_HKS-Mangas.jpg"/>
			</a>

			<a href="resultado.php?genero=autoajuda">
				<img src="../img/generos/generos_Autoajuda.jpg"/>
			</a>

			<a href="resultado.php?genero=outros">
				<img src="../img/generos/Outros-.png"/>
			</a>

		</section>

		<?php include("footer.php");?>
	</body>
	<script type="text/javascript" src="../js/functions.js"></script> 
</html>