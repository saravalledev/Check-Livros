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
		<meta charset="utf-8"/>
		<meta http-equiv="x-UA-compatible"content="ie=edge,chrome=1"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>Perfil</title>

		<script src="https://kit.fontawesome.com/deeb6da8f1.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="../css/estilos_gerais.css"/>
		<link rel="stylesheet" href="../css/estilo_desktop.css"/>
		<link rel="stylesheet" href="../css/estilo_tablet.css"/>
		<link rel="stylesheet" href="../css/estilo_mobile.css"/>
	</head>
	<body>
		<?php 
			include("menu.php"); 
			require("conexao.php");
		?>
		<section class="col-s-12 col-m-12 col-12 perfil-section"> 
			<div class="img-div">
				<h1><?php echo "@".$username; ?></h1>
			</div> 
		</section>

		<div class="row">
			<section class="col-s-12 col-m-4 col-4 information-container">
				<h2>Informações</h2><br/><hr/><br>
				<?php
				
					if($type_cont == ""){
						echo "<p>Conta: Usuário</p> <br/>";
					}else{
						echo "<p>Conta: Administradora</p> <br/>";
					}
					$sql = "SELECT * FROM usuario WHERE username = '$username'";
					$result = mysqli_query($conexao,$sql);

					while($linha = mysqli_fetch_array($result)){
					
						echo "<p>Username: ".$linha['username']."</p><br>";
						echo "<p>Email: ".$linha['email']."</p><br>";
						
					}
				?>
			</section>
			<section class="col-s-12 col-m-8 col-8 resenhas-produzidas-container">

				<h2>Suas resenhas</h2><br/><hr/><br>
				<?php 
				$sql = "SELECT resenha FROM resenhas WHERE username = '$username'";
				$result = mysqli_query($conexao, $sql);

				while($linha = mysqli_fetch_array($result)){
					?>
					<div class="resenha-user">
						<?php
						echo "<p>".$linha['resenha']."</p><br/>";
						?>
					</div>
					<br/><br/>
					<?php
				}
				?>
				<br/><br/>
				
				
			</section>
		</div>

		<?php include("footer.php")?>
	</body>
	<script type="text/javascript" src="../js/functions.js"></script>
</html>