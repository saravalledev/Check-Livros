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
		//------------------ Verifica Cadastro de Usuários ------------------//
		if (isset($_POST['username'])){
			$username = addslashes($_POST['username']);
			$email = addslashes($_POST['email']);
			$senha = addslashes($_POST['senha']);
			$confsenha = addslashes($_POST['confsenha']);

			if(!empty($username) && !empty($email) && !empty($senha) && !empty($confsenha)){

				require("conexao.php");

				$sql=" SELECT * FROM usuario WHERE email='$email'";
				$result= mysqli_query($conexao,$sql);
				$numlinha=mysqli_num_rows($result);

				if ($numlinha > 0) {
		?>
		<div class="msg-geral msg-erro">
			<p>Email já cadastrado! Insira outro email valido.</p>
		</div>
		<?php
				}else{

					if($senha == $confsenha){

						$cod_senha = md5($senha);

						if($u->cadastrar($username, $email, $cod_senha)){

							//falta a verificação do email
							header("Location: CheckLogin.php");

						}else{
		?>
		<div class="msg-geral msg-erro">
			<p>Erro ao enviar as informações. <br> Confica o formulário e tente novamente!</p>
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

		<!------------------ Formulário de Cadastro de Usuários ------------------>
		<section class="col-s-12 col-m-12 col-12 cad-section">
			<a href="../index.php"><img src="../img/LogoSemNome.png" alt="Check Livros" class="img-cad"/></a>
			<div class="cad-div">
				<h1>Criar uma nova conta</h1><br/><br/>
				<form method="POST" action="">

					<p>Nome de usuário:</p>
					<input type="text" required min="3" name="username" placeholder="Digite no mínimo 3 letras ou números">

					<p>E-mail:</p>
					<input type="email" name="email"  placeholder="Digite um email válido">

					<p>Senha:</p>
					<input type="password" id="pwd" name="senha" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" maxlength="32" placeholder="letras maiúsculas, minúsculas e números">

					<p>Confirmar senha:</p>
					<input type="password" id="S3" name="confsenha">

					<div class="checkbox-div">
						<input type="checkbox" onclick="mostrarOcultarSenha()">
						<p>Mostrar/Ocultar senha</p>
						<br/>
					</div>

					<input type="submit" name="Cadastrar" value="Cadastrar">
				</form>
			</div><br/><br/>
			<p class="p-beneficios">Já possui uma conta ? <a class="a-beneficios" href="CheckLogin.php">Entre aqui</a></p>
		</section>
	</body>
	<script type="text/javascript" src="../js/functions.js"></script> 
</html>
