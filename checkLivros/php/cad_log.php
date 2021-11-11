<!------------------------------------------------------------------------------------------------------
Nome do projeto: Check Livros
Descrição: Classe para efetuar cadastro / login
Autores:
Turma: 3TID
Hebert Victor | número:
Matheus Felix Carlos | número:                                                          Versão: 1.0
Kaike Santos Coppola | número:                                                          Data://21 

Autores externos: 
--------------------------------------------------------------------------------------------------------->
<?php
	session_start();
	require_once 'CheckUsuarios.php'; //instanciando a classe
	$u = new Usuario;
	$username = "";
?>
<html lang="pt-BR">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="x-UA-compatible" content="ie=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Cadastro e Login</title>

	<script src="https://kit.fontawesome.com/deeb6da8f1.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="../css/estilos_gerais.css" />
	<link rel="stylesheet" href="../css/estilo_desktop.css" />
	<link rel="stylesheet" href="../css/estilo_tablet.css" />
	<link rel="stylesheet" href="../css/estilo_mobile.css" />
</head>

<body class="row">
	<?php include("menu.php") ?>

	<h1 class="h1-cad-log">Escolha um Caminho</h1>

	<section class="container_cad_log col-s-12 col-m-12 col-12">

		<a href="CheckCadastro.php">
			<img src="../img/cad_log/img-cad.jpg" class="img_cad_log">
		</a>

		<a href="CheckLogin.php">
			<img src="../img/cad_log/img-log.jpg" class="img_cad_log">
		</a>

	</section>

	<?php include("footer.php"); ?>
</body>
<script type="text/javascript" src="../js/functions.js"></script>

</html>