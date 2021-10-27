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
		<header class="col-s-12 col-m-12 col-12">
			<nav id="nav-desktop">
				<ul id="desktopLinks">
					<li><a href="../index.php" class="logo-menu"><img src="../img/LogoSemNome.png" style="width: 100%"></a></li>
					<li class="img_m">
						<a href="../index.php" class="logo-menu">
							<img src="../img/Titulosemfundo.png" class="img_l">
						</a>
					</li>
					<li><a href="generos.php" class="a-desk">Gêneros</a></li>
					<li><a href="fale_conosco.php" class="a-desk">Fale Conosco</a></li>
					<li><a href="quem_somos.php" class="a-desk">Quem Somos</a></li>
					<li>
						<?php
						if($username == ""){
							echo "<a href='cad_log.php' class='a-desk'>Cadastro | Login</a>";
						}else{
							echo "
									<a href='perfil.php' id='a-1-sub' class='a-desk'>Olá, ".$username."</a>
									<ul class='submenu'>
										<li>
											<a href='sairlog.php' class='a-desk  a-sub'>Sair</a>
										</li>
									</ul>
									";
						}
						?>
					</li>
				</ul>
			</nav>

			<nav id="nav-mobile-tablets">
				<a href="../index.php" class="nav-logo" style="padding: 0;"><img src="../img/LogoSemNome.png" style="width: 100%"></a>
				<ul id="mobileLinks">
					<li><a href="generos.php" class="a-tablets">Gêneros</a></li>
					<li><a href="fale_conosco.php" class="a-tablets">Fale Conosco</a></li>
					<li><a href="quem_somos.php" class="a-tablets">Quem Somos</a></li>
					<li>
						<?php
						if($username == ""){
							echo "<a href='cad_log.php' class='a-tablets'>Cadastro | Login</a>";
						}else{
							echo "<a href='perfil.php' class='a-tablets'>Olá, ".$username."</a></li>
									<li><a href='sairlog.php' class='a-tablets'>Sair&nbsp;<i class='fas fa-sign-out-alt'></i></a>";
						}
						?>
					</li>
				</ul>
				<a href="#" class="icon-nav-mobile" onclick="enableMobileNav()">
					<i class="fa fa-bars"></i>
				</a>
			</nav>
		</header>

		<h1 class="gen-h1">Selecione um Gênero Literário</h1>

		<section class="col-s-12 col-m-12 col-12 gen-container">

			<a href="resultado.php?genero=human"><img src="../img/generos/generos_Ciencias-Humanas2.jpg"/></a>

			<a href="resultado.php?genero=exat"><img src="../img/generos/generos_Ciencias-Exatas.jpg"/></a>

			<a href="resultado.php?genero=bio"><img src="../img/generos/generos_ciencias-biologicas.jpg"/></a>

			<a href="resultado.php?genero=nacio"><img src="../img/generos/generos_Lit-Nacional.png"/></a>

			<a href="resultado.php?genero=juven"><img src="../img/generos/generos_Lit-InfantoJuvenil.jpg"/></a>

			<a href="resultado.php?genero=estra"><img src="../img/generos/generos_Lit-Estrangeira.jpg"/></a>

			<a href="resultado.php?genero=hq"><img src="../img/generos/generos_HKS-Mangas.jpg"/></a>

			<a href="resultado.php?genero=auto"><img src="../img/generos/generos_Autoajuda.jpg"/></a>

			<a href="resultado.php?genero=ou"><img src="../img/generos/Outros-.png"/></a>

		</section>

		<footer  class="col-s-12 col-m-12 col-12 footer">
			<aside class="col-s-12 col-m-4 col-3 logo-container">
				<img class="img_f" src="../img/Check-LivrosB.png">
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
					<li><a href="perfil.php" class="a-footer">Perfil</a></li>
					<li>
						<?php
						if($username == ""){
							echo "<a href='cad_log.php' class='a-footer'>Cadastro | Login</a>";
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
	<script type="text/javascript" src="../js/functions.js"></script> 
</html>