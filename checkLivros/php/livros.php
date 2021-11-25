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

$genero = $_GET['genero'] ?? "";
$search = $_GET['search'] ?? "";
?>
<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="x-UA-compatible"content="ie=edge,chrome=1"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>Livros</title>

		<script src="https://kit.fontawesome.com/deeb6da8f1.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="../css/estilos_gerais.css"/>
		<link rel="stylesheet" href="../css/estilo_desktop.css"/>
		<link rel="stylesheet" href="../css/estilo_tablet.css"/>
		<link rel="stylesheet" href="../css/estilo_mobile.css"/>
	</head>
	<body class="row">
		<?php include("menu.php"); ?>
		
		<section class="col-s-12 col-m-12 col-12 resultados-container">
			<h2><a href="generos.php" style="color: black;"><i class="fas fa-arrow-left"></i></a>&nbsp;&nbsp;Livros e Resenhas</h2><br/><hr/>
			<br/><br/>

			<!-- buscas por genêro e pela barra de busca -->
			<?php 
			require("conexao.php");
			require("phps_resultados/buscas.php"); 
			?>

		</section>
	
		<?php include("footer.php"); ?>
	</body>
	<script type="text/javascript" src="../js/functions.js"></script> 
</html>





