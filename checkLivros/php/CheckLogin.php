<!------------------------------------------------------------------------------------------------------
Nome do projeto: Check Livros
Descrição: Classe para efetuar cadastro / login

Autores:

Turma: 3TID
Hebert Victor | número:                                                        Versão: 1.0
Matheus Felix Carlos | número:                                                Data:
Kaike Santos Coppola | número: 

Autores externos: 
(Processamento do Cadastro e login e parte do CSS) -> Miriam TechCod: 
https://www.youtube.com/watch?v=et-j0z-tbk4&list=PLYGFJHWj9BYq5zosbRaY7XM5vM0ISLkWS
--------------------------------------------------------------------------------------------------------->
<!DOCTYPE html>
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
		<?php	$username = "";	?>

		<section class="col-s-12 col-m-12 col-s-12 cad-section">
			<a href="../index.php"><img src="../img/LogoSemNome.png" alt="Check Livros" class="img-cad"/></a>
			<?php
			session_start();
			//------------------ Verifica Login de Usuários ------------------//
			if (isset ($_POST["Logar"])) {

				$email= addslashes($_POST['email']);
				$senha= md5($_POST['senha']); 
				//! Como colocar addslaches nesse campo com o md5 aqui???

				if(!empty($email) && !empty($senha)){ 

					require("conexao.php");

					//------------------ Verifica de o email já está cadastrado ------------------//
					$sql=" SELECT * FROM usuario WHERE email='$email'";
					$result= mysqli_query($conexao,$sql);
					$numlinha=mysqli_num_rows($result);

					if ($numlinha <= 0) {
			?>
			<div class="msg-erro msg-geral ">
				<p>Email não cadastrado. Cheque o campo, <br>por favor!</p>
			</div>
			<?php
					}else{
						while ($linha = mysqli_fetch_array($result)){


							if ($senha == $linha['senha']){
								$_SESSION['username'] = $linha['username'];
								$_SESSION['id_usuario']  = $linha['id_usuario']; 
								$_SESSION['tipo_conta'] = $linha['tipo_conta'];
								header("location: ../index.php");

							}else{ 
			?>
			<div class="msg-erro msg-geral ">
				<p>Falha no login. Senha incorreta ou vazia...</p>
			</div>
			<?php
							}
						}
					}
				}else{
			?>
			<div class="msg-erro msg-geral ">
				<p>Preencha todos os campos, por gentileza!</p>
			</div>
			<?php
				}
			}
			?>
			<br/>
			<div class="cad-div">
				<h1>Bem-vindo ao Check Livros</h1>
				<br/><br/>
				<!------------------ Formulário de Login de usuário------------------>
				<form name="form-log" method="post" action="">

					<p>E-mail:</p>
					<input type="email" name="email" maxlength="40">

					<p>Senha:</p>
					<input type="password" id="pwd" name="senha">

					<div class="checkbox-div">
						<input type="checkbox" onclick="mostrarOcultarSenha()">
						<p>Mostrar/Ocultar senha</p>
					</div>
					<input type="submit" name="Logar" value="Login">
				</form>
			</div><br/><br/>
			<p class="p-beneficios">Ainda não possui uma conta ? <a class="a-beneficios" href="CheckCadastro.php">Cadastre-se aqui</a></p>
		</section>
	</body>
	<script type="text/javascript" src="../js/functions.js"></script> 
</html>


