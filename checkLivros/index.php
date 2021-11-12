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
		<title>Check Livros</title>

		<script src="https://kit.fontawesome.com/deeb6da8f1.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="css/estilos_gerais.css"/>
		<link rel="stylesheet" href="css/estilo_desktop.css"/>
		<link rel="stylesheet" href="css/estilo_tablet.css"/>
		<link rel="stylesheet" href="css/estilo_mobile.css"/>
	</head>

	<body class="row">
		<header class="col-s-12 col-m-12 col-12">
			<nav id="nav-desktop">
				<ul id="desktopLinks">
					<li><a href="index.php" class="logo-menu"><img src="img/LogoSemNome.png" style="width: 100%"></a></li>
					<li class="img_m">
						<a href="index.php" class="logo-menu">
							<img src="img/Titulosemfundo.png" class="img_l">
						</a>
					</li>
					<li><a href="php/generos.php" class="a-desk">GÊNEROS</a></li>
					<li><a href="php/fale_conosco.php" class="a-desk">CONTATO</a></li>
					<li><a href="php/quem_somos.php" class="a-desk">SOBRE</a></li>
					<li>
						<?php
						if($username == ""){
							echo "<a href='php/cad_log.php' class='a-desk'>CONTA</a>";
						}else{
							echo "
									<a href='php/perfil.php' id='a-1-sub' class='a-desk'>Olá, ".$username."</a>
									<ul class='submenu'>
										<li>
											<a href='php/sairlog.php' class='a-desk  a-sub'>Sair</a>
										</li>
									</ul>
									";
						}
						?>
					</li>
					<li class="search-container">
						<form action="php/resultado.php" method="GET">
							<input type="text" placeholder="Buscar livros..." name="search">
							<button type="submit"><i class="fa fa-search"></i></button>
						</form>
					</li>
				</ul>
			</nav>

			<nav id="nav-mobile-tablets">
				<a href="index.php" class="nav-logo" style="padding: 0;"><img src="img/LogoSemNome.png" style="width: 100%"></a>
				<ul id="mobileLinks">
					<li class="search-container">
						<form action="php/resultado.php" method="get">
							<input type="text" placeholder="Buscar livros..." name="search">
						</form>
					</li>
					<li><a href="php/generos.php" class="a-tablets">GÊNEROS</a></li>
					<li><a href="php/fale_conosco.php" class="a-tablets">CONTATO</a></li>
					<li><a href="php/quem_somos.php" class="a-tablets">SOBRE</a></li>
					<li>
						<?php
						if($username == ""){
							echo "<a href='php/cad_log.php' class='a-tablets'>CONTA</a>";
						}else{
							echo "<a href='php/perfil.php' class='a-tablets'>Olá, ".$username."</a></li>
									<li><a href='php/sairlog.php' class='a-tablets'>Sair&nbsp;<i class='fas fa-sign-out-alt'></i></a>";
						}
						?>
					</li>
				</ul>
				<a href="#" class="icon-nav-mobile" onclick="enableMobileNav()">
					<i class="fa fa-bars"></i>
				</a>
			</nav>
		</header>

		<section class="col-s-12 col-m-12 col-12">
			<div class="slideshow-container">

				<div class="mySlides fade">
					<img src="img/imagem1.jpg">
				</div>

				<div class="mySlides fade">
					<img src="img/cafe_livros.jpg">
				</div>

				<div class="mySlides fade">
					<img src="img/city.jpg">
				</div>

				<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
				<a class="next" onclick="plusSlides(1)">&#10095;</a>
				<div class="dots-container">
					<span class="dot" onclick="currentSlide(1)"></span>
					<span class="dot" onclick="currentSlide(2)"></span>
					<span class="dot" onclick="currentSlide(3)"></span>
				</div>
			</div>
		</section>

		<section class="col-s-12 col-m-12 col-12 beneficios-container">
			<h1>"É preciso que a leitura seja um ato de amor" <br>Paulo Freire</h1>
			<div class="beneficios">

				<div class="beneficios-itens">
					<h2>Por Que Check Livros ?</h2><br/>
					<p>Em razão do grande número de livros publicados, torna-se difícil a escolha de um bom exemplar. Sendo assim, surge a plataforma Check Livros com a finalidade de ajudar os leitores durante a busca por um bom livro e para promover a interação entre a comunidade literária.</p>
				</div>
				<div class="beneficios-itens">
					<h2>Quem Somos</h2><br/>
					<p>A história do Check Livros começou em 2021 e desde então os desenvolvedores, Hebert, Matheus e Kaike, enfrentaram diversos desafios na construção deste magnífico portal de resenhas. De começo, os estudantes de Tecnologia da Informação (TI) foram assolados pela terrível ...</p>
				</div>
			</div>
			<br/>
			<p class="p-beneficios">Caso queira saber mais sobre nós e nosso projeto visite a página <a class="a-beneficios" href="php/quem_somos.php">Quem somos</a></p>

		</section>

		<section class="col-s-12 col-m-12 col-12 autores-container">
			<h1>Ranking de Livros</h1><br/>
			<div class="autores-div">
				<h2>1º</h2>
				<p>Lorem Ipsum</p>
			</div><br/>
			<div class="autores-div">
				<h2>2º</h2>
				<p>Lorem Ipsum</p>
			</div><br/>
			<div class="autores-div">
				<h2>3º</h2>
				<p>Lorem Ipsum</p>
			</div>
		</section>

		<section class="col-s-12 col-m-12 col-12 ajuda-sec">
			<h1>Tutorial</h1><br/><br/>
			<div class="ajuda-container">
				<div class="ajuda-item">
					<h2>Passo 1 -</h2><br/>
					<p>É necessário ter um cadastro e estar logado no Check Livros para poder avaliar e publicar novas resenhas. <a href="php/cad_log.php">Saiba mais...</a></p>
				</div>
				<div class="ajuda-item">
					<h2>Passo 2 -</h2><br/>
					<p>Caso você não saiba o livro que deseja consultar, visite nossa página de <a href="php/generos.php">Gêneros</a> literários para explorar os mais diversos assuntos</p>
				</div>
				<div class="ajuda-item">
					<h2>Passo 3 -</h2><br/>
					<p>Para reclamações, sugestôes ou elogios sobre nossa plataforma, entre em contato através de nossa página <a href="php/fale_conosco.php">Fale conosco</a></p>
				</div>
			</div>
		</section>

		<footer  class="col-s-12 col-m-12 col-12 footer">
			<aside class="col-s-12 col-m-4 col-3 logo-container">
				<img class="img_f" src="img/Check-LivrosB.png">
			</aside>
			<nav class="col-s-12 col-m-8 col-5 footer-nav">
				<ul>
					<li><a href="index.php" class="a-footer">HOME</a></li>
					<li><a href="php/generos.php" class="a-footer">GÊNEROS</a></li>
				</ul>
				<ul>
					<li><a href="php/quem_somos.php" class="a-footer">SOBRE</a></li>
					<li><a href="php/fale_conosco.php" class="a-footer">CONTATO</a></li>
				</ul>
				<ul>
					<li><a href="php/perfil.php" class="a-footer">MINHA CONTA</a></li>
					<li>
						<?php
						if($username == ""){
							echo "<a href='php/cad_log.php' class='a-footer'>CADASTRO | LOGIN</a>";
						}
						?>
					</li>
				</ul>
			</nav>
			<aside class="col-s-12 col-m-12 col-4 redes-container">
				<br/>
				<a href="#"><i class="fab fa-facebook-square"></i></a>&nbsp;&nbsp;
				<a href="#"><i class="fab fa-instagram"></i></a>&nbsp;&nbsp;&nbsp;
				<a href="#"><i class="fab fa-linkedin-in"></i></a>&nbsp;&nbsp;
				<a href="https://github.com/Kira01010110/Check-Livros.git"><i class="fab fa-github"></i></a>
			</aside>
		</footer>
	</body>
	<script type="text/javascript" src="js/slideshow.js"></script> 
</html>