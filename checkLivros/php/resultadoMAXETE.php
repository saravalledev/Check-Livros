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

	$genero = $_GET['genero'] ?? "";
	$search = $_GET['search'] ?? "";
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
        <?php include("menu.php"); ?>

		
		<section class="col-s-12 col-m-12 col-12 gen-container">
			<?php
				$conexao = mysqli_connect("localhost","root", "", "check_livros");
				mysqli_set_charset($conexao, 'utf8');

				//--------------- Busca o genero ---------------//
				if(isset($_GET['genero'])){
					
					$sql = "SELECT * FROM livro WHERE genero_livro = '$genero'";
					$result = mysqli_query($conexao,$sql);
 
					while($linha = mysqli_fetch_array($result)){

						$imge = $linha['img_href']; // Passa a img para uma var
						?>
							<div>
								<img class="capa" src="<?php echo $imge;?>"/> <!--Chama a var com a img-->
								<?php
								echo "<br>Gênero: ".$linha['genero_livro']."<br>";
								echo "Titulo: ".$linha['titulo_livro']."<br>";
								echo "Autor: ".$linha['autor']."<br>";
								echo "Editora: ".$linha['editora']."<br>";
								echo "Ano de publicação: ".$linha['ano_publicado']."<br>";
								?>
							</div>
						<?php
					}
				}
				?>
					 <h1 class="gen-h1">Escolha um livro e desfrute...</h1>
				<?php
				//--------------- Publica a ressenha EXPORTAR---------------//
				if(isset($_POST['Publicar'])){
					
					$resenha = addslashes($_POST['nova_resenha']);
					$idlivro = $_SESSION['id_livro'];
					
					//echo $resenha;
					
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

				//--------------- Busca o titulo_livro na Barra ---------------//
				if(isset($_GET['search'])){
					
					$sql = "SELECT * FROM livro WHERE titulo_livro LIKE ('%$search%')";
					$result = mysqli_query($conexao,$sql);
 
					while($linha = mysqli_fetch_array($result)){

						$imge = $linha['img_href'];// Passa a img para uma var
						?>
							<div>
								<img class="capa" src="<?php echo $imge;?>"/><!--Chama a var com a img-->
								<?php
									echo "<br>Gênero: ".$linha['genero_livro']."<br>";
									echo "Titulo: ".$linha['titulo_livro']."<br>";
									echo "Autor: ".$linha['autor']."<br>";
									echo "Editora: ".$linha['editora']."<br>";
									echo "Ano de publicação: ".$linha['ano_publicado']."<br>";
								?>
							</div>
						<?php
					}
				}
			?>

		</section>

        <?php include("footer.php"); ?>

		<!--Por questões de relevancia do google, é mais correto colocar o modal no final da página, para que não seja confundido como parte mais importante -->
		<section id="modal_resenha" class="modal_container">
			<div class="modal">
				<button id="btn_fechar">x</button>
				<h3>Resenhas</h3>
				<?php 

					//--------------- Busca o Livro ---------------//
					$sql = "SELECT * FROM livro WHERE titulo_livro LIKE ('%$search%')";
					$result = mysqli_query($conexao,$sql);

						
						while($linha = mysqli_fetch_array($result)){

						
							$_SESSION['id_livro'] = $linha['id_livro'];
	
							$imge = $linha['img_href'];// Passa a img para uma var
							$t_livro = $linha['titulo_livro'];
							?>
								<div>
									<div class="div_capa">
										<img class="capa_modal" onclick=" iniciaModal(modalID)" src="<?php echo $imge;?>"/><!--Chama a var com a img-->
									</div>
									<?php
										echo "<br>Gênero: ".$linha['genero_livro']."<br>";
										echo "Titulo: ".$linha['titulo_livro']."<br>";
										echo "Autor: ".$linha['autor']."<br>";
										echo "Editora: ".$linha['editora']."<br>";
										echo "Ano de publicação: ".$linha['ano_publicado']."<br>";
										echo "id do livro: ".$linha['id_livro'];
									?>
								</div>
							<?php
						
						}
					
					//--------------- Busca as resenhas no Modal EXPORTAR ---------------//
					$idlivro = $_SESSION['id_livro'];
					
					$sql2 = "SELECT * FROM resenhas WHERE id_livro = '$idlivro'";
					$result2 = mysqli_query($conexao, $sql2);
					
					while($linha2 = mysqli_fetch_array($result2)){
						
						?>
						<div>
							<?php
								echo "<br>Username: ".$linha2['username']."<br><br>";
								echo "Resenha: ".$linha2['resenha']."<br>";
								?>
								<button name="gostei">Gostei</button>
								<button name="naogostei">Não gostei</button>
								<?php
							?>
							
						</div>
						<?php
					}
					?>
					<div class="div_nova_resenha">
							<br>
							<form name="form_nova_resenha" action="" method="POST">
								<label for="nova_resenha"><?php echo $username ?></label> 
								<input type="text" required max="1000" name="nova_resenha">
								<input type="submit" name="Publicar" value="Publicar">
							</form>
							<br>
						</div>
						
			</div>
		</section>

    </body>
	<script> //É preciso levar para o doc js
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
		
		const capa = document.querySelector('.capa'); //seleciona a class como se fosse no CSS
		capa.addEventListener('click', () => iniciaModal('modal_resenha')); //add um evento	
		
	</script>
    <script type="text/javascript" src="../js/functions.js"></script> 
</html>