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
		require_once 'CheckUsuarios.php';
		$u = new Usuario;
?>
<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="x-UA-compatible"content="ie=edge,chrome=1"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>Fale Conosco</title>

		<script src="https://kit.fontawesome.com/deeb6da8f1.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="../css/estilos_gerais.css"/>
		<link rel="stylesheet" href="../css/estilo_desktop.css"/>
		<link rel="stylesheet" href="../css/estilo_tablet.css"/>
		<link rel="stylesheet" href="../css/estilo_mobile.css"/>
	</head>

	<body class="row">
		<?php include("menu.php");?>

		<section class="col-s-12 col-m-12 col-12 contato-container fade" id="contato-container">
			<?php
			//------------------ Verifica o Cadastro de Sugestões  ------------------//
				if(isset($_POST['enviar_form1'])){
					$nome = addslashes($_POST['nome1']);
					$email = addslashes($_POST['email1']);
					$genero = addslashes($_POST['genero']);
					$sugestao = addslashes($_POST['sugestao']);

					if(!empty($nome) && !empty($email) && !empty($sugestao)){
						
						require("conexao.php");
						
						if($u->cad_sugestao($nome, $email, $genero, $sugestao)){
							?>
							<div class="msg-geral msg-sucesso">
								<p>Sugestão enviada com sucesso :)</p>
							</div>
							<?php
						}else{
							?>
							<div class="msg-geral msg-erro">
								<p>Perdão, erro ao enviar sua sugestão. Envie novamente mais tarde, por gentileza!</p>
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

			//------------------ Verifica o Cadastro de FeedBacks  ------------------//
				if(isset($_POST['enviar_form2'])){
					$nome = addslashes($_POST['nome2']);
					$email = addslashes($_POST['email2']);
					$feedback = addslashes($_POST['feedback']);

					if(!empty($nome) && !empty($email) && !empty($feedback)){
						
						require("conexao.php");

						if($u->cad_feedback($nome, $email, $feedback)){
								?>
								<div class="msg-geral msg-sucesso">
									<p>Feedback enviado com sucesso :)</p>
								</div>
								<?php
						}else{
							?>
							<div class="msg-geral msg-erro">
								<p>Perdão, erro ao enviar seu feedback. Envie novamente mais tarde, por gentileza!</p>
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
			<h2>Em que podemos ajudar ?</h2><br/><hr/>
			<br/><br/>
			<div class="sugerir-div" onclick="enableContactForm(1)">
				<div>
					<h2 class="sugerir-text">Sugestão de Livros</h2>
					<p>Aponte livros que ainda não constam em nossa plataforma</p>
				</div>
				<div style="display: contents;">
					<i class="fas fa-check icon-contato"></i>
				</div>
			</div><br/><br/>

			<div class="sugerir-div" onclick="enableContactForm(2)">
				<div>
					<h2 class="sugerir-text">Ajude-nos a melhorar o Check Livros</h2>
					<p>Avalie-nos agora mesmo</p>
				</div>
				<div style="display: contents;">
					<i class="fas fa-check icon-contato"></i>
				</div>
			</div>

		</section>

		<section class="col-s-12 col-m-12 col-12 form-container fade" id="form-1">
			<button class="voltar-btn" onclick="enableContactForm(3)"><i class="fas fa-arrow-left"></i></button><br/>
			<h1>Sugestão de livros</h1><br/><br/>

			<!------------------ Formulário de Cadastro de Sugestões ------------------>
				<form action="fale_conosco.php" method="post">

					<p>Nome:<p>
					<input type="text" name="nome1" placeholder="Nome completo" required>

					<p>E-mail:</p>
					<input type="email" name="email1" placeholder="E-mail" required>

					<p>Gênero do livro:</p>
					<select name="genero">
						<option value="cienciashumanas">Ciências Humanas e sociais</option>
						<option value="cienciasexatas">Ciências Exatas</option>
						<option value="cienciasbiologicas">Ciências Biológicas</option>
						<option value="literaturaestrangeira">Literatura Estrangeira</option>
						<option value="literaturainfantojuvenil">Literatura Infantojuvenil</option>
						<option value="literaturanacional">Literatura Nacional</option>
						<option value="autoajuda">Autoajuda</option>
						<option value="hqsemangas">HQs</option>
						<option value="outros">Outros</option>
					</select>

					<p>Sugestão de livro:<p>
					<input type="text" name="sugestao" placeholder="Nome do livro" required>

					<input type="submit" value="Enviar" name="enviar_form1">

				</form>
		</section>

		<section class="col-s-12 col-m-12 col-12 form-container fade" id="form-2">
			<button class="voltar-btn" onclick="enableContactForm(3)"><i class="fas fa-arrow-left"></i></button><br/>
			<h1>Críticas e elogios</h1><br/><br/>

			<!------------------ Formulário de Cadastro de FeedBacks ------------------>
				<form action="fale_conosco.php" method="post">

					<p>Nome:</p>
					<input type="text" name="nome2" placeholder="Nome completo" required>

					<p>E-mail:</p>
					<input type="email" name="email2" placeholder="E-mail" required>

					<p>Feedback:</p>
					<textarea name="feedback" placeholder="Escreva sua crítica ou elogio" rows="10" required></textarea>

					<input type="submit" value="Enviar" name="enviar_form2">

				</form>
		</section>

		<?php include("footer.php"); ?>
	</body>
	<script type="text/javascript" src="../js/functions.js"></script> 
</html>