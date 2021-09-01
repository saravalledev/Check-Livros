<!------------------------------------------------------------------------------------------------------
Nome do projeto: Check Livros
Descrição: Classe para efetuar cadastro / login
Autores:
Turma: 3TID
Hebert Victor | número:
Matheus Felix Carlos | número:                                                          Versão: 1.0
Kaike Santos Coppola | número:                                                          Data://21 

Altores externos: 
--------------------------------------------------------------------------------------------------------->
<?php
require_once 'usuario.php'; //instanciando a classe
$u = new Usuario;
?>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>Cadastro</title>

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
					<li><a href="../index.html"  class="logo-menu">LOGO</a></li>
					<li><a href="generos.html">Gêneros de livros</a></li>
					<li><a href="fale_conosco.html">Fale conosco</a></li>
					<li><a href="#">Cadastro | Login</a></li>
				</ul>
			</nav>

			<nav id="nav-mobile-tablets">
				<a href="#" class="active">LOGO</a>
				<ul id="mobileLinks">
					<li><a href="generos.html">Gêneros de livros</a></li>
					<li><a href="fale_conosco.html">Fale conosco</a></li>
					<li><a href="#">Cadastro | Login</a></li>
				</ul>
				<a href="#" class="icon-nav-mobile" onclick="enableMobileNav()">
					<i class="fa fa-bars"></i>
				</a>
			</nav>
		</header>

		<section class="col-s-12 col-m-12 col-12 fale-conosco-container">
			<h1>Cadastrar</h1><br/><br/>
			<form method="POST" action="" onsubmit="return checkform(this);">

				<label for="Username">Nome de usuário:</label>
				<input type="text" required min="3" name="Username" pattern="([A-Z À-Ú]{1})([a-z à-ú]{3,})" 
							 placeholder= "Username"  title="Digite seu name de usuário. Exemplo: AnaX123" >

				<label for="CPF">CPF:</label>
				<input type="text" name="CPF" placeholder= "CPF" title="Digite seu CPF. Exemplo: XXX.XXX.XXX-XX">

				<label for="email">E-mail:</label>
				<input type="email" name="email" placeholder="E-mail" title="Digite um e-mail" maxlength="40">

				<label for="senha">Senha:</label>
				<input type="password" id="pwd" name="senha" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Senha" title="Insira no minimo 8 caracteres. Use letras maiúscular, minúsculas e números!" maxlength="32">

				<label for="confsenha">Confirmar senha:</label>
				<input type="password" id="pwd2" name="confsenha" placeholder="Confirmação de Senha" maxlength="15">

				<div style="margin-bottom: 1em">
					<input type="checkbox" onclick="mostrarOcultarSenha()">
					<label>Mostrar/ocultar senha</label><br/>
					<input type="checkbox" onclick="#">
					<label>Termos de uso</label><br/> 
				</div>

				<input type="submit" value="Cadastrar">

			</form>
		</section>

		<?php
		//verificar se clicou no botao
		if (isset($_POST['Username'])){
			$username = addslashes($_POST['Username']); // "addslashes" privine possiveis aplicações de códigos maliciosos 
			$CPF = addslashes($_POST['CPF']);
			$email = addslashes($_POST['email']);
			$senha = addslashes($_POST['senha']);
			$confsenha = addslashes($_POST['confsenha']);

			//verificar se esta preenchido
			if(!empty($username) && !empty($CPF) && !empty($email) && !empty($senha) && !empty($confsenha)){
				$u->conectar("check livros", "localhost", "root", "");

				if($u->msgErro == ""){//se esta tudo certo
					if($senha == $confsenha){
						if($u->cadastrar($username, $CPF, $email, $senha)){
		?>
		<div class="msg-geral msg-sucesso">
			Cadastrado com sucesso! Faça o login para entrar :)
		</div>
		<?php

						}else{
		?>
		<div class="msg-geral msg-erro">
			Email já cadastrado!
		</div>
		<?php

						}
					}else{
		?>
		<div class="msg-geral msg-erro">
			Senha e confirmação de senha não correspondem!
		</div>
		<?php

					}

				}else{
		?>
		<div class="msg-geral msg-erro">
			<?php echo "Erro: ".$u->msgErro; ?>
		</div>
		<?php


				}

			}else{
		?>
		<div class="msg-geral msg-erro">
			Preencha todos os campos!
		</div>
		<?php

			}
		}
		?>

		<footer class="col-s-12 col-m-12 col-12 footer">
			<aside class="col-s-12 col-m-4 col-3 logo-container">
				<h1>Check Livros</h1>
			</aside>
			<nav class="col-s-12 col-m-8 col-5 footer-nav">
				<ul>
					<li><p class="p-footer">Início</p></li>
					<li><a href="../index.html" class="a-footer">Home</a></li>
					<li><a href="generos.html" class="a-footer">Gêneros</a></li>
				</ul>
				<ul>
					<li><p class="p-footer">Sobre</p></li>
					<li><a href="#" class="a-footer">Minha Conta</a></li>
					<li><a href="quem_somos.html" class="a-footer">Quem Somos</a></li>
				</ul>
				<ul>
					<li><p class="p-footer">Contato</p></li>
					<li><a href="fale_conosco.html" class="a-footer">Fale conosco</a></li>
					<li><a href="#" class="a-footer">Cadastro | Login</a></li>
				</ul>
			</nav>
			<aside class="col-s-12 col-m-12 col-4 redes-container">
				<p>Redes sociais</p><br/><br/>
				<a href="#"><i class="fab fa-facebook-square"></i></a>&nbsp;&nbsp;
				<a href="#"><i class="fab fa-instagram"></i></a>&nbsp;&nbsp;&nbsp;
				<a href="#"><i class="fab fa-linkedin-in"></i></a>&nbsp;&nbsp;
				<a href="#"><i class="fab fa-github"></i></a>
			</aside>
		</footer>

	</body>
	<script type="text/javascript" src="../js/functions.js"></script> 
</html>
