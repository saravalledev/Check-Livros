<!------------------------------------------------------------------------------------------------------
Nome do projeto: Check Livros
Descrição: 

Autores:

Turma: 3TID
Matheus Felix Carlos                                                         Versão: 1.0                    
Hebert Victor Saravalle                                                      Data:20/06/21
Kaike Santos Coppola 

----------------------------------------------------------------------------------------------------------->

<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="x-UA-compatible"content="ie=edge,chrome=1"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>Fale conosco</title>

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

		<section class="col-s-12 col-m-12 col-12 container fade" id="contato-container">

			<h1 class="form-title">Em que podemos ajudar ?</h1><br/><br/>
			<div class="sugerir-div" onclick="enableContactForm(1)">
				<div>
					<h2 class="sugerir-text">Sugestão de Livros</h2>
					<p>Aponte livros que ainda não constam em nossa plataforma</p>
				</div>
				<div>
					<i class="fas fa-check icon-contato"></i>
				</div>
			</div><br/><br/>

			<div class="sugerir-div" onclick="enableContactForm(2)">
				<div>
					<h2 class="sugerir-text">Ajude-nos a melhorar o Check Livros</h2>
					<p>Avalie-nos agora mesmo</p>
				</div>
				<div>
					<i class="fas fa-check icon-contato"></i>
				</div>
			</div><br/><br/>

		</section>

		<section class="col-s-12 col-m-12 col-12 container fade" id="form-1">
			<button class="voltar-btn" onclick="enableContactForm(3)"><i class="fas fa-arrow-left"></i></button><br/>
			<h1 class="form-title">Sugestão de livros</h1><br/><br/>

			<form action="fale_conosco.php" method="post">

				<label for="nome">Nome:</label>
				<input type="text" name="nome1" placeholder="Nome completo" required>

				<label for="email">E-mail:</label>
				<input type="email" name="email1" placeholder="E-mail" required>

				<label for="genero">Gênero do livro:</label>
				<select name="genero">
					<option>Ciências Humanas e sociais</option>
					<option>Ciências Exatas</option>
					<option>Ciências Biológicas</option>
					<option>Literatura Estrangeira</option>
					<option>Literatura Infantojuvenil</option>
					<option>Literatura Nacional</option>
					<option>Autoajuda</option>
					<option>HQs</option>
					<option>Outros</option>
				</select>

				<label for="sugestao">Sugestão de livro:</label>
				<input type="text" name="sugestao" placeholder="Nome do livro" required>

				<input type="submit" value="Enviar" name="enviar_form1">

			</form>

		</section>

		<section class="col-s-12 col-m-12 col-12 container fade" id="form-2">
			<button class="voltar-btn" onclick="enableContactForm(3)"><i class="fas fa-arrow-left"></i></button><br/>
			<h1 class="form-title">Críticas e elogios</h1><br/><br/>

			<form action="fale_conosco.php" method="post">

				<label for="nome">Nome:</label>
				<input type="text" name="nome2" placeholder="Nome completo" required>

				<label for="email">E-mail:</label>
				<input type="email" name="email2" placeholder="E-mail" required>

				<label for="feedBack">Feedback:</label>
				<textarea name="feedBack" placeholder="Escreva sua crítica ou elogio" rows="10" required></textarea>

				<input type="submit" value="Enviar" name="enviar_form2">

			</form>

		</section>

		<footer  class="col-s-12 col-m-12 col-12 footer">
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