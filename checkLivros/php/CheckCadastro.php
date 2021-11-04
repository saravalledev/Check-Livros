<!------------------------------------------------------------------------------------------------------
Nome do projeto: Check Livros
Descrição: Classe para efetuar cadastro / login

Autores:

Turma: 3TID
Hebert Victor | número:                                                        Versão: 1.0
Matheus Felix Carlos | número:                                                Data:
Kaike Santos Coppola | número: 

Autores externos: 
(Processamento do Cadastro e login) -> Miriam TechCod: 
https://www.youtube.com/watch?v=et-j0z-tbk4&list=PLYGFJHWj9BYq5zosbRaY7XM5vM0ISLkWS
--------------------------------------------------------------------------------------------------------->
<?php
	session_start();
	require_once 'CheckUsuarios.php';
	$u = new Usuario;
	$username = "";
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
		<?php
			include("menu.php");

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
			<form method="POST">

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

		<?php include("fooder.php"); ?>
	</body>
	<script type="text/javascript" src="../js/functions.js"></script> 
</html>
