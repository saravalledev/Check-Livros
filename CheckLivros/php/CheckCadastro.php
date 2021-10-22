<!------------------------------------------------------------------------------------------------------
Nome do projeto: Check Livros
Descrição: Classe para efetuar cadastro / login

Autores:

Turma: 2TID
Hebert Victor | número:                                                        Versão: 1.0
Matheus Felix Carlos | número:                                                Data:
Kaike Santos Coppola | número: 

Autores externos: 
(Processamento do Cadastro e login e parte do CSS) -> Miriam TechCod: 
https://www.youtube.com/watch?v=et-j0z-tbk4&list=PLYGFJHWj9BYq5zosbRaY7XM5vM0ISLkWS
--------------------------------------------------------------------------------------------------------->
<?php
session_start();
if($_SESSION['username'] != ""){
	$username = $_SESSION['username'];
} else {
	$_SESSION['username'] = "";
	$username = $_SESSION['username'];
}
require_once 'CheckUsuarios.php';
$u = new Usuario;
?>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="x-UA-compatible"content="ie=edge,chrome=1"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>Check Livros - Cadastro</title>

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
					<li><a href="../index.php" class="logo-menu"><img src="../img/logo/LogoSemNome.png" style="width: 100%"></a></li>
					<li class="img_m">
						<a href="../index.php" class="logo-menu">
							<img src="../img/logo/Titulosemfundo.png" class="img_l">
						</a>
					</li>
					<li><a href="generos.php" class="a-desk">Gêneros</a></li>
					<li><a href="fale_conosco.php" class="a-desk">Fale Conosco</a></li>
					<li><a href="quem_somos.php" class="a-desk">Quem Somos</a></li>
					<li><a href="cad_log.php" class="a-desk">Cadastro | Login</a></li>
				</ul>
			</nav>

			<nav id="nav-mobile-tablets">
				<a href="index.php" class="nav-logo" style="padding: 0;"><img src="../img/logo/LogoSemNome.png" style="width: 100%"></a>
				<ul id="mobileLinks">
					<li><a href="generos.php" class="a-tablets">Gêneros</a></li>
					<li><a href="fale_conosco.php" class="a-tablets">Fale Conosco</a></li>
					<li><a href="quem_somos.php" class="a-tablets">Quem Somos</a></li>
					<li><a href="cad_log.php" class="a-tablets">Cadastro | Login</a></li>
				</ul>
				<a href="#" class="icon-nav-mobile" onclick="enableMobileNav()">
					<i class="fa fa-bars"></i>
				</a>
			</nav>
		</header>

		<?php
		if (isset($_POST['username'])){
			$username = addslashes($_POST['username']);
			$email = addslashes($_POST['email']);
			$senha = addslashes($_POST['senha']);
			$confsenha = addslashes($_POST['confsenha']);

			if(!empty($username) && !empty($email) && !empty($senha) && !empty($confsenha)){

				$u->conectar("check_livros","localhost","root","");

				if($senha == $confsenha){

					if($u->cadastrar($username, $email, $senha)){

						header("Location: CheckLogin.php");
					}else{
		?>
		<div class="msg-geral msg-erro">
			<p>Email já cadastrado!</p>
		</div>
		<?php
					}

				}else{
		?>
		<div class="msg-geral msg-erro">
			<p>Senha e Confirmar Senha não correspondem!</p>
		</div>
		<?php
				}
			}else{
		?>
		<div class="msg-geral msg-erro">
			<p>Preencha todos os campos!</p>
		</div>
		<?php
			}
		}
		?>

		<section class="col-s-12 col-m-12 col-12 cad-sec">
			<h1>Cadastre-se em nossa plataforma</h1><br/><br/>
			<form method="POST" action="" onsubmit="return checkform(this);">

				<label for="username">Nome de usuário:</label>
				<input type="text" required min="3" name="username">

				<label for="email">E-mail:</label>
				<input type="email" name="email">

				<label for="senha">Senha:</label>
				<input type="password" id="pwd" name="senha" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" maxlength="32">

				<label for="confsenha">Confirmar senha:</label>
				<input type="password" id="S3" name="confsenha">

				<div style="margin-bottom: 1em">
					<input type="checkbox" onclick="mostrarOcultarSenha()">
					<label>Mostrar/Ocultar senha</label>
					<br/>
				</div>

				<input type="submit" name="Cadastrar" value="Cadastrar">
			</form>
		</section>

		<footer  class="col-s-12 col-m-12 col-12 footer">
			<aside class="col-s-12 col-m-4 col-3 logo-container">
				<img class="img_f" src="../img/logo/Titulosemfundo.png">
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
					<li><a href="cad_log.php" class="a-footer">Cadastro | Login</a></li>
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
