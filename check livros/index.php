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
	$username = $_SESSION['username'];
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
					<li><a href="php/generos.php" class="a-desk">Gêneros</a></li>
					<li><a href="php/fale_conosco.php" class="a-desk">Fale conosco</a></li>
					<li><a href="php/quem_somos.php" class="a-desk">Quem Somos</a></li>
					<li>
							<?php
								if($username == ""){
									echo "<a href='php/cad-log.php' class='a-desk'>Cadastro | Login</a>";
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
				</ul>
			</nav>

			<nav id="nav-mobile-tablets">
				<a href="index.php" class="nav-logo" style="padding: 0;"><img src="img/LogoSemNome.png" style="width: 100%"></a>
				<ul id="mobileLinks">
					<li><a href="php/generos.php" class="a-tablets">Gêneros</a></li>
					<li><a href="php/fale_conosco.php" class="a-tablets">Fale conosco</a></li>
					<li><a href="php/quem_somos.php" class="a-tablets">Quem Somos</a></li>
					<li>
						<?php
							if($username == ""){
								echo "<a href='cad-log.php' class='a-tablets'>Cadastro | Login</a>";
							}else{
								echo "<a href='perfil.php' class='a-tablets'>Olá, ".$username."</a></li>
									<li><a href='php/sairlog.php' class='a-tablets'>Sair</a>";
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
					<img src="img/teste.jpg">
				</div>

				<div class="mySlides fade">
					<img src="img/BannerDefinitivo.png">
				</div>

				<div class="mySlides fade">
					<img src="img/Banner.png">
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
					<p>Somos uma equipe formada por três estudantes de Tecnologia da Informação, e como trabalho de conclusão de curso entramos em acordo e decidimos dar início a este importante e versátil projeto.</p>
				</div>
			</div>
			<br/>
			<p class="p-beneficios">Caso queira saber mais sobre nós e nosso projeto visite a página <a class="a-beneficios" href="quem_somos.php">Quem somos</a></p>

		</section>

		<section class="col-s-12 col-m-12 col-12 container autores-container">
			<h1>Top Livros da Semana</h1><br/>
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
			<h1>Ajuda</h1><br/><br/>
			<div class="ajuda-container">
				<div class="ajuda-item">
					<h2>Resenhas</h2><br/>
					<p>É necessário ter um cadastro e estar logado no Check Livros para poder avaliar e publicar novas resenhas. <a href="#">Saiba mais...</a></p>
				</div>
				<div class="ajuda-item">
					<h2>Busca</h2><br/>
					<p>Caso você não saiba o livro que deseja consultar, visite nossa página de <a href="">Gêneros</a> literários para explorar os mais diversos assuntos</p>
				</div>
				<div class="ajuda-item">
					<h2>Fale conosco</h2><br/>
					<p>Para reclamações, sugestôes ou elogios sobre nossa plataforma, entre em contato através de nossa página <a href="">Fale conosco</a></p>
				</div>
			</div>
		</section>

		<footer  class="col-s-12 col-m-12 col-12 footer">
			<aside class="col-s-12 col-m-4 col-3 logo-container">
				<h1>Check Livros</h1>
			</aside>
			<nav class="col-s-12 col-m-8 col-5 footer-nav">
				<ul>
					<li><p class="p-footer">Início</p></li>
					<li><a href="index.php" class="a-footer">Home</a></li>
					<li><a href="php/generos.php" class="a-footer">Gêneros</a></li>
				</ul>
				<ul>
					<li><p class="p-footer">Sobre</p></li>
					<li><a href="php/quem_somos.php" class="a-footer">Quem  Somos</a></li>
					<li><a href="php/fale_conosco.php" class="a-footer">Fale Conosco</a></li>
				</ul>
				<ul>
					<li><p class="p-footer">Minha Conta</p></li>
					<li><a href="#" class="a-footer">Perfil</a></li>
					<li>
						<?php
							if($username == ""){
								echo "<a href='php/cad-log.php' class='a-footer'>Cadastro | Login</a>";
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
				<a href="#"><i class="fab fa-github"></i></a>
			</aside>
		</footer>
	</body>
	<script type="text/javascript" src="js/functions.js"></script> 
</html>