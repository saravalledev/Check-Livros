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

        <h1 class="gen-h1">Escolha um livro e desfrute...</h1>
		
		<section class="col-s-12 col-m-12 col-12 gen-container">
			<?php
				$conexao = mysqli_connect("localhost","root", "", "check_livros");

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

        <?php include("fooder.php"); ?>

		<!--Por questões de relevancia do google, é mais correto colocar o modal no final da página, para que não seja confundido como parte mais importante -->
		<section id="modal_resenha" class="modal_container">
			<div class="modal">
				<button id="btn_fechar">x</button>
				<h3>Resenhas</h3>
				<?php 
					$sql = "SELECT * FROM livro WHERE titulo_livro LIKE ('%$search%')";
					$result = mysqli_query($conexao,$sql);
	 
						while($linha = mysqli_fetch_array($result)){
	
							$imge = $linha['img_href'];// Passa a img para uma var
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
									?>
								</div>
							<?php
						}

					$sql2 = "SELECT *FROM resenha WHERE titulo_livro LIKE ('%$search%')";
					$result2 = mysqli_query($conexao, $sql2);
					
					while($linha2 = mysqli_fetch_array($result2)){
						?>
						<div>
							<?php
							echo "<br>Username: ".$linha2['username']."<br><br>";
							echo "Resenha: ".$linha2['resenha']."<br>";
							?>
							
						</div>
						<?php
					}
					
				?>
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