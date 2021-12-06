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
	require_once 'CheckUsuarios.php';
	$u = new Usuario;
	session_start();
	$resenha = $_GET['resenha'];
	$livro = $_GET['livro'];


	$_SESSION['id_resenha'] = $_GET['id'];

	if($_SESSION['username'] != ""){
		$username = $_SESSION['username'];
	} else {
		$_SESSION['username'] = "";
		$username = $_SESSION['username'];
	}
?>
<!DOCTYPE html>
<html lang="pt-br">
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
<body>
<section class="col-s-12 col-m-12 col-12 cad-section">
			<a href="../index.php"><img src="../img/LogoSemNome.png" alt="Check Livros" class="img-cad"/></a>
			<div class="cad-div">
				<h1>Editar resenha</h1><br/><br/>
				
				<form method="POST" action="" name="form_ed_resenha" onsubmit="return indentForm(this)">

					<?php
						require("phps_resultados/publi_resenha.php");
					 	
						echo "<h2>@".$username."</h2>" 

					 ?>

                    <textarea type="text" id="txt" required rows="10" name="nova_resenha" placeholder="Escreva o título do livro antes de iniciar sua Resenha, por gentileza:"></textarea>
						
					<script> 
						var resenha = "<?php echo $resenha; ?>";

						form_ed_resenha.nova_resenha.value = resenha.replace(/<br>/g,"\n");
					</script>
						
						
					<input type="submit" name="Editar" value="Editar">
				</form>
			</div><br/><br/>
		</section> 
		<script type="text/javascript" src="../js/functions.js"></script> 
</body>
</html>