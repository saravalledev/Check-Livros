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
	if(!isset($_SESSION['id_usuario'])){
		header('location: CheckLogin.php');
		exit;
	}
?>
<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="x-UA-compatible"content="ie=edge,chrome=1"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>Quem somos</title>

		<script src="https://kit.fontawesome.com/deeb6da8f1.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="../css/estilos_gerais.css"/>
		<link rel="stylesheet" href="../css/estilo_desktop.css"/>
		<link rel="stylesheet" href="../css/estilo_tablet.css"/>
		<link rel="stylesheet" href="../css/estilo_mobile.css"/>
	</head>

	<body class="row">
		<header class="col-s-12 col-m-12 col-12">

			<nav id="nav-desktop">
				<ul id="desktopLinks">
					<li><a href="../index.php" class="logo-menu"><img src="../img/LogoSemNome.png" style="width: 100%"></a></li>
					<li><a href="generos.php" class="a-desk">Gêneros</a></li>
					<li><a href="fale_conosco.php" class="a-desk">Fale Conosco</a></li>
					<li><a href="quem_somos.php" class="a-desk">Quem Somos</a></li>
					<li><a href="cad-log.php" class="a-desk">Cadastro | Login</a></li>
				</ul>
			</nav>

			<nav id="nav-mobile-tablets">
				<a href="index.php" class="nav-logo" style="padding: 0;"><img src="../img/LogoSemNome.png" style="width: 100%"></a>
				<ul id="mobileLinks">
					<li><a href="generos.php" class="a-tablets">Gêneros</a></li>
					<li><a href="fale_conosco.php" class="a-tablets">Fale Conosco</a></li>
					<li><a href="quem_somos.php" class="a-tablets">Quem Somos</a></li>
					<li><a href="cad-log.php" class="a-tablets">Cadastro | Login</a></li>
				</ul>
				<a href="#" class="icon-nav-mobile" onclick="enableMobileNav()">
					<i class="fa fa-bars"></i>
				</a>
			</nav>
		</header>

		<section class="col-s-12 col-m-12 col-12 sobre-sec">

			<h1>Quem Somos</h1><br/><br/>
			<div class="sobre-container">

				<div class="sobre-itens item-1">
					<h2>Heróis da Literatura</h2><br/>
					<p>A história do Check Livros começou em 2021 e desde então os desenvolvedores, Hebert, Matheus e Kaike, enfrentaram diversos desafios na construção desta magnífica plataforma. De começo, os estudantes de Tecnologia da Informação (TI) foram assolados pela terrível conexão de internet e pela falta de equipamentos de sua própria escola, assim, nossos três heróis foram obrigados a trazer suas próprias ferramentas e utensílios para esta desafiadora aventura: O desenvolvimento do site e aplicativo Check Livros.</p>
					<br/>
					<p>No início, Matheus e Kaike estavam relutantes com a proposta da jornada, porém Hebert convenceu seus companheiros e aceitou a responsabilidade de liderar o grupo. Após uma semana de trabalho, o líder do grupo se deparou com um terrível problema que poderia acabar com a alegria de nossos aventureiros: O servidor. Para aqueles que são leigos e não entendem como funciona a informática aqui vai uma breve explicação: O servidor é a parte vital de qualquer site da internet e sem ele nenhum site ou aplicativo pode ser publicado. </p>
					<br/>
					<p>Hebert foi o mais ativo durante a batalha contra o servidor e, dessa forma, após alguns longos e exaustivos dias, o inimigo por fim sucumbiu-se. Logo em seguida, com os problemas já resolvidos, Matheus foi implacável no desenvolvimento front-end do site, com a ajuda de Kaike, eles chegaram a programar até três páginas em uma mesma semana. </p> <p class="p-sobre">Continua...</p>
					<br/>
				</div>
				<div class="sobre-itens item-2">
					<h2>Nossa Visão</h2><br/>
					<p>A plataforma Check Livros possuí como visão o desejo de facilitar a vida do público leitor durante a escolha e entendimento de livros, ou seja, nosso site preza pela: </p><br/>
					<ul>
						<li><p>Praticidade</p></li><br/>
						<li><p>Interatividade</p></li><br/>
						<li><p>Agilidade</p></li><br/>
						<li><p>Objetividade</p></li>
					</ul>
				</div>
				<div class="sobre-itens">

				</div>

			</div>

		</section>

		<footer class="col-s-12 col-m-12 col-12 footer">
			<aside class="col-s-12 col-m-4 col-3 logo-container">
				<h1>Check Livros</h1>
			</aside>
			<nav class="col-s-12 col-m-8 col-5 footer-nav">
				<ul>
					<li><p class="p-footer">Início</p></li>
					<li><a href="../index.php" class="a-footer">Home</a></li>
					<li><a href="generos.php" class="a-footer">Gêneros</a></li>
				</ul>
				<ul>
					<li><p class="p-footer">Sobre</p></li>
					<li><a href="quem_somos.php" class="a-footer">Quem  Somos</a></li>
					<li><a href="fale_conosco.php" class="a-footer">Fale Conosco</a></li>
				</ul>
				<ul>
					<li><p class="p-footer">Minha Conta</p></li>
					<li><a href="#" class="a-footer">Perfil</a></li>
					<li><a href="cad-log.php" class="a-footer">Cadastro | Login</a></li>
				</ul>
			</nav>
			<aside class="col-s-12 col-m-12 col-4 redes-container">
				<br/>
				<a href="#"><i class="fab fa-facebook-square"></i></a>&nbsp;&nbsp;
				<a href="#"><i class="fab fa-instagram"></i></a>&nbsp;&nbsp;&nbsp;
				<a href="#"><i class="fab fa-linkedin-in"></i></a>&nbsp;&nbsp;
				<a href="#"><i class="fab fa-github"></i></a>
			</aside>
		</footer>
	</body>
	<script type="text/javascript" src="../js/functions.js"></script> 
</html>