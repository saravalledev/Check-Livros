<html lang="pt-br"> 
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="x-UA-compatible"content="ie=edge,chrome=1"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>Check Livros - Login</title>

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
					<li><a href="../index.html" class="logo-menu"><img src="../img/LogoSemNome.png" style="width: 100%"></a></li>
					<li><a href="../html/generos.html" class="a-desk">Gêneros</a></li>
					<li><a href="../html/fale_conosco.html" class="a-desk">Fale conosco</a></li>
					<li><a href="../html/quem_somos.html" class="a-desk">Quem Somos</a></li>
					<li><a href="cad-log.php" class="a-desk">Cadastro | Login</a></li>
				</ul>
			</nav>

			<nav id="nav-mobile-tablets">
				<a href="index.html" class="nav-logo" style="padding: 0;"><img src="img/LogoSemNome.png" style="width: 100%"></a>
				<ul id="mobileLinks">
					<li><a href="../html/generos.html" class="a-tablets">Gêneros</a></li>
					<li><a href="../html/fale_conosco.html" class="a-tablets">Fale conosco</a></li>
					<li><a href="../html/quem_somos.html" class="a-tablets">Quem Somos</a></li>
					<li><a href="cad-log.php" class="a-tablets">Cadastro | Login</a></li>
				</ul>
				<a href="#" class="icon-nav-mobile" onclick="enableMobileNav()">
					<i class="fa fa-bars"></i>
				</a>
			</nav>
		</header>

		<?php
		session_start();
		if (isset ($_POST["Logar"])) {

			$email= addslashes($_POST['email']);
			$senha= md5($_POST['senha']); //! Como colocar addslaches nesse campo com o md5 aqui???

			if(!empty($email) && !empty($senha)){ 
				$conexao= mysqli_connect("localhost","root","","check_livros");

				$sql=" SELECT * FROM usuario WHERE email='$email'";
				$result= mysqli_query($conexao,$sql);
				$numlinha=mysqli_num_rows($result);

				if ($numlinha <= 0) {
		?>
		<div class="msg_erro msg-geral ">
			<p>Email não cadastrado. Cheque o campo, <br>por favor!</p>
		</div>
		<?php
				}else{
					while ($linha = mysqli_fetch_array($result)){


						if ($senha == $linha['senha']){

							$_SESSION['id_usuario']  = $linha['id_usuario']; 
							header("location: indexTESTE.php");

						}else{ 
		?>
		<div class="msg_erro msg-geral ">
			<p>Falha no login. Senha incorreta ou vazia...</p>
		</div>
		<?php
						}
					}
				}
			}else{
		?>
		<div class="msg_erro msg-geral ">
			<p>Preencha todos os campos, por gentileza!</p>
		</div>
		<?php
			}

		}
		?>

		<section class="col-s-12 col-m-12 col-s-12 cad-sec">
			<h1>Bem-vindo ao Check Livros</h1>
			<br/><br/>
			<form name="form-log" method="post" action="">

				<label for="email">E-mail:</label>
				<input type="email" name="email" maxlength="40">

				<label for="senha">Senha:</label>
				<input type="password" id="S3" name="senha">

				<div style="margin-bottom: 1em">
					<input type="checkbox" onclick="mostrarOcultarSenha()">
					<label>Mostrar/Ocultar senha</label><br/>
				</div>
				<input type="submit" name="Logar" value="Login">
			</form>
		</section>

		<footer  class="col-s-12 col-m-12 col-12 footer">
			<aside class="col-s-12 col-m-4 col-3 logo-container">
				<h1>Check Livros</h1>
			</aside>
			<nav class="col-s-12 col-m-8 col-5 footer-nav">
				<ul>
					<li><p class="p-footer">Início</p></li>
					<li><a href="../index.html" class="a-footer">Home</a></li>
					<li><a href="../html/generos.html" class="a-footer">Gêneros</a></li>
				</ul>
				<ul>
					<li><p class="p-footer">Sobre</p></li>
					<li><a href="../html/quem_somos.html" class="a-footer">Quem  Somos</a></li>
					<li><a href="../html/fale_conosco.html" class="a-footer">Fale Conosco</a></li>
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


