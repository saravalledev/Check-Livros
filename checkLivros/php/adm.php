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
require_once 'CheckUsuarios.php';
$u = new Usuario;

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
?>
<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>Administrador Check Livros</title>

		<script src="https://kit.fontawesome.com/deeb6da8f1.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="../css/estilos_gerais.css"/>
		<link rel="stylesheet" href="../css/estilo_desktop.css"/>
		<link rel="stylesheet" href="../css/estilo_tablet.css"/>
		<link rel="stylesheet" href="../css/estilo_mobile.css"/>
	</head>
	<body class="row">
		<?php include("menu.php");	?>

		<section class="col-s-12 col-m-12 col-s-12 adm-section">
			<?php
			//------------------ Verifica o Cadastro de livros ------------------//
			if (isset ($_POST["Cadastrar"])) {

				$titulo= addslashes($_POST['titulo']);
				$autor= addslashes($_POST['autor']);
				$editora= addslashes($_POST['editora']);
				$ano_publi= addslashes($_POST['ano_publi']);
				$genero= addslashes($_POST['genero']);
				$img_capa = "../img/capa_livro/".$_POST['img'];

				if(!empty($titulo) && !empty($autor) && !empty($editora) && !empty($ano_publi) && !empty($img_capa) && !empty($genero)){ 

					$conexao= mysqli_connect("localhost","root","","check_livros");
					$sql = "SELECT * FROM livros";
					$result = mysqli_query($conexao,$sql);

					while($linha = mysqli_fetch_array($result)){

						if ($linha['titulo_livro'] == $titulo) {
			?>
			<div class="msg-erro msg-geral ">
				<p>Livro já cadastrado. <br>Por favor, insira outro livro ;)</p>
			</div>
			<?php
						}else{

							if($u->cad_livro($titulo, $autor, $editora, $ano_publi, $img_capa, $genero)){

			?>
			<div class="msg-geral msg-sucesso">
				<p>Livro cadastrado com sucesso!<br> Agora é só aproveitar SZ</p>
			</div>
			<?php
							}else{
			?>
			<div class="msg-geral msg-erro">
				<p>Livro já cadastrado! Tente outra obra...   :)</p>
			</div>
			<?php
							}
						}
						break;

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
			<h2>Cadastrar Livros</h2><br/><hr/>
			<br/><br/>

			<!------------------ Formulario de cadastro de livros  ------------------>
			<form name="form-adm" method="POST">

				<p>Título do livro:</p>
				<input type="text" name="titulo" maxlength="40">

				<p>Autor:</p>
				<input type="text" name="autor">

				<p>Editora:</p>
				<input type="text" name="editora">

				<p>Genero do livro:</p>
				<select name="genero">
					<option value="cienciashumanas">Ciências humanas</option>
					<option value="cienciasexatas">Ciências exatas</option>
					<option value="cienciasbiologicas">Ciências biológicas</option>
					<option value="literaturanacional">Literatura nacional</option>
					<option value="literaturainfantojuvenil">Literatura infantojuvenil</option>
					<option value="literaturaestrangeira">Literatura estrangeira</option>
					<option value="hqsemangas">HQs e mangas</option>
					<option value="autoajuda">Auto ajuda</option>
					<option value="outros">Outros...</option>
				</select>

				<p>Ano de publicação:</p>
				<input type="date" name="ano_publi">

				<!-- Esse parte da img só existira no local, pois o cód é diferente no Hostinger-->
				<p>Endereço da capa do livro:</p>
				<input type="file" name="img" accept="image/*"><br/><br/>

				<input type="submit" name="Cadastrar" value="Cadastrar">

			</form>
		</section>
		<?php
		include("footer.php");
		?>
	</body>
	<script type="text/javascript" src="../js/functions.js"></script>
</html>