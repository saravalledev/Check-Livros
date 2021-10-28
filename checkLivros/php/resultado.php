<?php

require_once 'CheckUsuarios.php';
$u = new Usuario;

session_start();
if($_SESSION['username'] != ""){
	$username = $_SESSION['username'];
} else {
	$_SESSION['username'] = "";
	$username = $_SESSION['username'];
}

$genero = $_GET['genero'];
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
	<body>
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
					<li class="search-container">
						<form action="resultado.php" method="get">
							<input type="text" placeholder="Buscar livros..." name="search">
							<button type="submit"><i class="fa fa-search"></i></button>
						</form>
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

		<h1 class="gen-h1">Escolha um livro e desfute...</h1>

		<section class="col-s-12 col-m-12 col-12 gen-container">
			<?php
			$conexao = mysqli_connect("localhost","root", "", "check_livros");
			if(isset($_GET['genero']) == $genero){

				$sql = "SELECT * FROM livro WHERE genero_livro = '$genero'";
				$result = mysqli_query($conexao,$sql);

				while($linha = mysqli_fetch_array($result)){
					if($linha['genero_livro'] == $genero){
			?>
			<div>
				<?php
						echo "Imagem: ".$linha['img_href']."<br>";
						echo "Gênero: ".$linha['genero_livro']."<br>";
						echo "Titulo: ".$linha['titulo_livro']."<br>";
						echo "Autor: ".$linha['autor']."<br>";
						echo "Editora: ".$linha['editora']."<br>";
						echo "Ano de publicação: ".$linha['ano_publicado']."<br>";
				?>
			</div>
			<?php

					}
				}
			}
			?>
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