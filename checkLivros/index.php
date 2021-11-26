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
					<li class="li-titulo">
						<a href="index.php" class="logo-menu">
							<img src="img/Titulosemfundo.png" class="img_titulo">
						</a>
					</li>
					<li><a href="php/generos.php" class="a-desk">GÊNEROS</a></li>
					<li><a href="php/fale_conosco.php" class="a-desk">CONTATO</a></li>
					<li><a href="php/quem_somos.php" class="a-desk">SOBRE</a></li>
					<li>
						<?php
						//------------------ Verifica a Existencia de Usernames ou Tipo de Conta ------------------//
							if($username == ""){
								echo "<a href='php/CheckLogin.php' class='a-desk'>CONTA</a>";
							}else{
								if($type_cont == "adm"){
									echo "
										<a href='php/perfil.php' id='a-1-sub' class='a-desk'>Olá, ".$username."</a>
										<ul class='submenu'>
											<li>
												<a href='php/adm.php' class='a-desk a-sub'>Administrativa</a>
											<li>
											<li>
												<a href='php/sairlog.php' class='a-desk a-sub'>Sair</a>
											</li>
										</ul>
										";
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
							}
						?>
					</li>
					<li class="search-container">
						<form action="php/livros.php" method="GET">
							<input type="text" placeholder="Buscar livros..." name="search">
							<button type="submit"><i class="fa fa-search"></i></button>
						</form>
					</li>
				</ul>
			</nav>

			<nav id="nav-mobile-tablets">
				<a href="index.php" class="nav-mobile-logo" style="padding: 0;"><img src="img/LogoSemNome.png" style="width: 100%"></a>
				<ul id="mobileLinks">
					<li class="search-container">
						<form action="php/livros.php" method="get">
							<input type="text" placeholder="Buscar livros..." name="search">
						</form>
					</li>
					<li><a href="php/generos.php" class="a-tablets">GÊNEROS</a></li>
					<li><a href="php/fale_conosco.php" class="a-tablets">CONTATO</a></li>
					<li><a href="php/quem_somos.php" class="a-tablets">SOBRE</a></li>
					<li>
						<?php
						//------------------ Verifica a Existencia de Usernames ou Tipo de Conta ------------------//
							if($username == ""){
								echo "<a href='php/CheckLogin.php' class='a-tablets'>CONTA</a>";
							}else{
								if($type_cont == "adm"){
									echo "
										<a href='php/perfil.php' id='a-1-sub' class='a-tablets'>Olá, ".$username."</a>
										<ul class='submenu'>
											<li>
												<a href='php/adm.php' class='a-tablets'>Administrativa</a>
											<li>
											<li>
												<a href='php/sairlog.php' class='a-tablets'>Sair</a>
											</li>
										</ul>
										";
								}else{
									echo "
										<a href='php/perfil.php' id='a-1-sub' class='a-tablets'>Olá, ".$username."</a>
										<ul class='submenu'>
											<li>
												<a href='php/sairlog.php' class='a-tablets'>Sair</a>
											</li>
										</ul>
										";
								}
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
					<img src="img/cafe.jpg">
					<div class="legenda-slide">
						<h1>Tranquilidade na hora de conhecer livros</h1>
						<i class="fas fa-check icon-slide"></i>
					</div>
				</div>
				
					<div class="mySlides fade">
					<img src="img/entretenimento.jpg">
					<div class="legenda-slide">
						<h1>Entretenimento e Conhecimento</h1>
						<i class="fas fa-check icon-slide"></i>
					</div>
				</div>

				<div class="mySlides fade">
					<img src="img/cidade.jpg">
					<div class="legenda-slide">
						<h1>Interatividade em comunidade</h1>
						<i class="fas fa-check icon-slide"></i>
					</div>
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

		<section class="col-s-12 col-m-12 col-12 beneficios-section">
			<h1>"É preciso que a leitura seja um ato de amor" <br>Paulo Freire</h1>
			<div class="beneficios-container">

				<div class="beneficios-itens">
					<h2>Caro Leitor</h2><br/>
					<p>Temos muita empatia com aqueles que apreciam uma boa leitura ou querem conhecer mais livros, independente da sua motivação. Nós, da Check Livros, estamos aqui para auxiliá-los nessa jornada. Neste site disponibilizamos diversas resenhas dos mais variados livros para todos os gostos. É resenha que não acaba mais. Todas são produzidas por nossa comunidade de grandes leitores e escritores como você. </p>
				</div>
				<div class="beneficios-itens">
					<h2>Por Que Check Livros ?</h2><br/>
					<p>Promovendo a interação entre a comunidade literária brasileira, a partir do entendimento sobre os livros pertencentes aos presentes gêneros literários, surge o Check Livros, que tem como objetivo facilitar a vida do leitor a fim de otimizar o tempo para o conhecimento e consumo de livros. E a melhor forma de fazer isso é através de boas resenhas.</p>
				</div>
			</div>
			<br/>
			<p class="p-beneficios">Caso queira saber mais sobre nós e nosso projeto visite a página <a class="a-beneficios" href="php/quem_somos.php">Quem somos</a></p>

		</section>

		<section class="col-s-12 col-m-12 col-12 ranking-container">
			<h1 class="h1-ranking-container">Melhores Livros Nacionais</h1><br/>
			<div class="ranking-positions">
				<h2>1º</h2>
				<p>Grande sertão Veredas - João Guimarães Rosa</p>
			</div><br/>
			<div class="ranking-positions">
				<h2>2º</h2>
				<p>Memórias póstumas de Brás Cubas - Machado de Assis</p>
			</div><br/>
			<div class="ranking-positions">
				<h2>3º</h2>
				<p>Dom Casmurro - Machado de Assis</p>
			</div>
		</section>

		<section class="col-s-12 col-m-12 col-12 tutorial-section">
			<h1>Tutorial</h1><br/><br/>
			<div class="tutorial-container">
				<div class="tutorial-item">
					<h2>Cadastra-se</h2><br/>
					<p>Possuir um cadastro e estar efetivamente logado é obrigatório caso queira inserir novas resenhas. No menu superior, clique na aba <a href="php/CheckLogin.php">conta</a> e faça parte agora da nossa esplêndida comunidade de leitores brasileiros. </p>
				</div>
				<div class="tutorial-item">
					<h2>Leia</h2><br/>
					<p>Os livros encontram-se na aba <a href="php/generos.php">gêneros</a>, separados em 9 categorias, as quais estão as respectivas resenhas e informações sobre os livros, acesse-a para encontrar o  exemplar de sua escolha. </p>
				</div>
				<div class="tutorial-item">
					<h2>Escreva</h2><br/>
					<p>Após estar logado e conectado, crie uma resenha. Partindo da aba gêneros, escolha um gênero literário ou realize a busca por algum livro, clique na respectiva capa e crie sua resenha ou avalie outras já existentes. </p>
				</div>
			</div>
		</section>

		<footer  class="col-s-12 col-m-12 col-12 footer">
			<aside class="col-s-12 col-m-4 col-3 logo-container">
				<img class="img_logo_foot" src="img/Check-LivrosB.png">
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
						<?php
						//------------------ Verifica a Existencia de Usernames ------------------//
							if($username == ""){
								echo "<li> <a href='php/CheckLogin.php' class='a-footer'>CADASTRO | LOGIN</a> </li>";
							}else{
								echo "<li><a href='php/perfil.php' class='a-footer'>MINHA CONTA</a></li>";
							}
						?>
				</ul>
			</nav>
			<aside class="col-s-12 col-m-12 col-4 redes-container">
				<!------------------ Redes Sociais ------------------>
				<br/>
				<a href="https://www.facebook.com/Check-Livros-100464832481149"><i class="fab fa-facebook-square"></i></a>&nbsp;&nbsp;
				<a href="https://instagram.com/check.livros?utm_medium=copy_link"><i class="fab fa-instagram"></i></a>&nbsp;&nbsp;&nbsp;
				<a href="https://www.linkedin.com/in/check-livros-719a5a226/"><i class="fab fa-linkedin-in"></i></a>&nbsp;&nbsp;
				<a href="https://github.com/Kira01010110/Check-Livros.git"><i class="fab fa-github"></i></a>
			</aside>
		</footer>
	</body>
	<script type="text/javascript" src="js/slideshow.js"></script> 
</html>