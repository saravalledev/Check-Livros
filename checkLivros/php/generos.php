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
	//------------------ Verifica a Existencia de Usernames ou Tipo de Conta ------------------//
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
		<!------------------ Imagens emissoras de paremetros por GET para Gêneros ------------------>
			<section class="col-s-12 col-m-12 col-12 generos-container">

				<h2>Gêneros Literários</h2><br/><hr/>
				<br/><br/>

				<div class="generos-flex">
					
				<div class="generos-item">
					<div class="legenda-genero"><p>Ciências Humanas</p></div>
					<a href="livros.php?genero=cienciashumanas">
						<img src="../img/generos/humanas.jpg"/>
					</a>
				</div>

				<div class="generos-item">
					<div class="legenda-genero"><p>Ciências Exatas</p></div>
					<a href="livros.php?genero=cienciasexatas">
						<img src="../img/generos/exatas.jpg"/>
					</a>
				</div>

				<div class="generos-item">
					<div class="legenda-genero"><p>Ciências Biológicas</p></div>
					<a href="livros.php?genero=cienciasbiologicas">
						<img src="../img/generos/biologicas.jpg"/>
					</a>
				</div>

				<div class="generos-item">
					<div class="legenda-genero"><p>Literatura Nacional</p></div>
					<a href="livros.php?genero=literaturanacional">
						<img src="../img/generos/MachadoAssisF.jpg"/>
					</a>
				</div>

				<div class="generos-item">
					<div class="legenda-genero"><p>Literatura Infantojuvenil</p></div>
					<a href="livros.php?genero=literaturainfantojuvenil">
						<img src="../img/generos/juvenil.jpg"/>
					</a>
				</div>

				<div class="generos-item">
					<div class="legenda-genero"><p>Literatura Estrangeira</p></div>
					<a href="livros.php?genero=literaturaestrangeira">
						<img src="../img/generos/estrangeira.jpg"/>
					</a>
				</div>
				
				<div class="generos-item">
					<div class="legenda-genero"><p>HQs e Mangás</p></div>
					<a href="livros.php?genero=hqsemangas">
						<img src="../img/generos/hqs_mangas.jpg"/>
					</a>
				</div>

				<div class="generos-item">
					<div class="legenda-genero"><p>Autoajuda</p></div>
					<a href="livros.php?genero=autoajuda">
						<img src="../img/generos/autoajuda.jpg"/>
					</a>
				</div>

				<div class="generos-item">
					<div class="legenda-genero"><p>Outros Livros</p></div>
					<a href="livros.php?genero=outros">
						<img src="../img/generos/outros.jpg"/>
					</a>
				</div>
				
				</div>

		</section>

		<?php include("footer.php");?>
	</body>
	<script type="text/javascript" src="../js/functions.js"></script> 
</html>