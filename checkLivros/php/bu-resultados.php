<!------------------------------------------------------------------------------------------------------
Nome do projeto: Check Livros
Descrição: 

Autores:

Turma: 3TID
Matheus Felix Carlos                                                         Versão: 1.0                    
Hebert Victor Saravalle                                                      Data:20/06/21
Kaike Santos Coppola 

Fontes:
(Modal) https://www.youtube.com/watch?v=fu-enUG2VEE
(Relacionamento do tables) 
----------------------------------------------------------------------------------------------------------->
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
	
	if($_SESSION['tipo_conta'] != ""){
		$type_cont = $_SESSION['tipo_conta'];
	}else{
		$_SESSION['tipo_conta'] = "";
		$type_cont = $_SESSION['tipo_conta'];
	}

	$genero = $_GET['genero'] ?? "";
	$search = $_GET['search'] ?? "";
?>
<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="x-UA-compatible"content="ie=edge,chrome=1"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>Livros</title>

		<script src="https://kit.fontawesome.com/deeb6da8f1.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="../css/estilos_gerais.css"/>
		<link rel="stylesheet" href="../css/estilo_desktop.css"/>
		<link rel="stylesheet" href="../css/estilo_tablet.css"/>
		<link rel="stylesheet" href="../css/estilo_mobile.css"/>
	</head>
	<body>
		<?php include("menu.php"); 

		//--------------- Publica a ressenha ---------------//

			if(isset($_POST['Publicar'])){

				$resenha = addslashes($_POST['nova_resenha']);
				$idlivro = $_SESSION['id_livro'];

				if(!empty($resenha)){

					if($u->cad_resenha($idlivro, $username, $resenha)){
				?>
				<div class="msg-geral msg-sucesso">
					<p>Sugestão enviada com sucesso :)</p>
				</div>
				<?php
						}else{
				?>
				<div class="msg-geral mgs-erro">
					<p>Perdão, houve um erro ao enviar sua resenha... </p>
				</div>
				<?php
						}
					}else{
				?>
				<div class="msg-geral mgs-erro">
					<p> Preencha todos os campos! </p>
				</div>
				<?php
				}
			}
			?>

		
		



		<section class="col-s-12 col-m-12 col-12 resultados-container">
			<h2>Livros e Resenhas</h2><br/><hr/>
			<br/><br/>
			
			<div class="flex-livros">
			<?php
			$conexao = mysqli_connect("localhost","root", "", "check_livros");
			mysqli_set_charset($conexao, 'utf8');

			//--------------- Busca o genero ---------------//
				if(isset($_GET['genero'])){

					$sql = "SELECT * FROM livros WHERE genero_livro = '$genero'";
					$result = mysqli_query($conexao,$sql);

					while($linha = mysqli_fetch_array($result)){

						$imge = $linha['img_href'];
						?>
							<div class="livro-resultado">
								<img class="capa" src="<?php echo $imge;?>"/> 
							</div>
						<?php
					}
				}

			//--------------- Busca o titulo_livro na Barra ---------------//
				if(isset($_GET['search'])){

					$sql = "SELECT * FROM livros WHERE titulo_livro LIKE ('%$search%')";
					$result = mysqli_query($conexao,$sql);

					while($linha = mysqli_fetch_array($result)){

						$imge = $linha['img_href'];
						?>
						<div class="livro-resultado">
							<img class="capa" src="<?php echo $imge;?>"/>
						</div>
						<?php
					}
				}
				?>

			</div>
		</section>

		<?php include("footer.php"); ?>

		<section id="modal_resenha" class="modal_container">

			<div class="modal" style="border: 0.1em solid #EDB91C;">
				<button id="btn_fechar">x</button>

				<div class="modal-content">
					<?php 

					//--------------- Busca o Livro search---------------//
						if($search != ""){
							$sql = "SELECT * FROM livros WHERE titulo_livro LIKE ('%$search%')";
							$result = mysqli_query($conexao,$sql);

							while($linha = mysqli_fetch_array($result)){

								$_SESSION['id_livro'] = $linha['id_livro'];
								$imge = $linha['img_href'];
								$t_livro = $linha['titulo_livro'];
                                
								?>

								<div class="div_capa">
									<img class="capa_modal" onclick=" iniciaModal(modalID)" src="<?php echo $imge;?>"/>
								</div>
								<br/>
								<br/>
								<div class="dados-livro">
									<?php
									echo "<p>Titulo: ".$linha['titulo_livro']."</p>";
									echo "<p>Autor: ".$linha['autor']."</p>";
									echo "<p>Editora: ".$linha['editora']."</p>";
									echo "<p>Ano de publicação: ".$linha['ano_publicado']."</p>";
									?>
								</div>
								<?php
                                break;
							}
						}

						if($genero != ""){
							$sql = "SELECT * FROM livros WHERE genero_livro = '$genero'";
							$result = mysqli_query($conexao,$sql);

							while($linha = mysqli_fetch_array($result)){

								$_SESSION['id_livro'] = $linha['id_livro'];

								$imge = $linha['img_href'];
								$t_livro = $linha['titulo_livro'];
								?>

								<div class="div_capa">
									<img class="capa_modal" onclick=" iniciaModal(modalID)" src="<?php echo $imge;?>"/>
								</div>
								<br/>
								<br/>

								<div class="dados-livro">
									<?php
									echo "<p>Titulo: ".$linha['titulo_livro']."</p>";
									echo "<p>Autor: ".$linha['autor']."</p>";
									echo "<p>Editora: ".$linha['editora']."</p>";
									echo "<p>Ano de publicação: ".$linha['ano_publicado']."</p>";
									?>
								</div>
								<?php
								break;
							}
						}
					
						$idlivro = $_SESSION['id_livro'];

					//--------------- Busca e Faz resenha no Modal---------------//
						$sql2 = "SELECT * FROM resenhas WHERE id_livro = '$idlivro'";
						$result2 = mysqli_query($conexao, $sql2);

						?>
							<div class="div_nova_resenha" id>
								<br>
								<?php
									if($username != ""){
										?>
										<br/>
										<hr/>
										<br/><br/>
										<h2>Escreva uma nova resenha</h2>
										<br><br>
										<form name="form_nova_resenha" action="" method="POST">
											<?php  
											echo "<h2>@".$username."</h2>";
											?>
											<textarea type="text" required rows="10" name="nova_resenha"></textarea>
											<input type="submit" name="Publicar" value="Publicar">
										</form>
										<?php
									}
								?>
								<br/><br/>
								<hr/>
								<br/><br/><br/>
							</div>
						<?php

						echo "<h3>Resenhas do livro ".$t_livro."</h3>"; 

						while($linha2 = mysqli_fetch_array($result2)){

							$_SESSION['id_resenha'] = $linha2['id_resenha'];

							?>
							<br/><br/>
							<div class="resenha-user">
								<?php
								echo "<br/><h2>@".$linha2['username']."</h2><br/><br/>";
								echo "<p>".$linha2['resenha']."</p><br/>";
								?>
							</div>
							<?php

						}
						$id_resenha = $_SESSION['id_resenha'];
						?>
				</div>
			</div>
		</section>

	</body>
	<script> 
		function iniciaModal(modalID){
			const modal = document.getElementById(modalID);
			if(modal){
				modal.classList.add('mostrar');
				modal.addEventListener('click', (e) => {
					if(e.target.id == modalID || e.target.id == 'btn_fechar'){
						modal.classList.remove('mostrar'); //removando a class 'mostrar' quando clicado no id de algum item, para tirar a visualização do modal.
					}
				});
			}		
		}							

		const capa = document.querySelector('.capa'); 
		capa.addEventListener('click', () => iniciaModal('modal_resenha')); 

	</script>
	<script type="text/javascript" src="../js/functions.js"></script> 
</html>