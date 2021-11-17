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
		<title>Quem somos</title>

		<script src="https://kit.fontawesome.com/deeb6da8f1.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="../css/estilos_gerais.css"/>
		<link rel="stylesheet" href="../css/estilo_desktop.css"/>
		<link rel="stylesheet" href="../css/estilo_tablet.css"/>
		<link rel="stylesheet" href="../css/estilo_mobile.css"/>
	</head>

	<body class="row">
		<?php include("menu.php")?>

		<section class="col-s-12 col-m-12 col-12 sobre-section">

			<h2>Nossa História</h2><br/><hr/>
			<br/><br/>
			<div class="sobre-container">

				<div class="sobre-itens item-1">
					<h2>Heróis da Literatura</h2><br/>
					<p>A história do Check Livros começou em 2021 e desde então os desenvolvedores, Hebert, Matheus e Kaike, enfrentaram diversos desafios na construção deste magnífico portal de resenhas. De começo, os estudantes de Tecnologia da Informação (TI) foram assolados pela terrível conexão de internet e pela falta de equipamentos de sua própria escola, assim, nossos três heróis foram obrigados a trazer suas próprias ferramentas e utensílios para esta desafiadora aventura: O desenvolvimento do site e aplicativo Check Livros.</p>
					<br/>
					<p>No início, Matheus e Kaike estavam relutantes com a proposta da jornada, porém Hebert convenceu seus companheiros e aceitou a responsabilidade de liderar o grupo. Após uma semana de trabalho, o líder do grupo se deparou com um terrível problema que poderia acabar com a alegria de nossos aventureiros: O servidor. Para aqueles que são leigos e não entendem como funciona a informática aqui vai uma breve explicação: O servidor é a parte vital de qualquer site da internet e sem ele nenhum site ou aplicativo pode ser publicado. </p>
					<br/>
					<p>Hebert foi o mais ativo durante a batalha contra o servidor e, dessa forma, após alguns longos e exaustivos dias, o inimigo por fim sucumbiu-se. Logo em seguida, com os problemas já resolvidos, Matheus foi implacável no desenvolvimento front-end do site, com a ajuda de Kaike, eles chegaram a programar até três páginas em uma mesma semana. </p> <p class="p-sobre">Continua...</p>
				</div>
				<div class="sobre-itens item-2">
					<h2>Nossa Visão</h2><br/>
					<p>O portal Check Livros possui como visão o desejo de facilitar a vida do público leitor durante a escolha e entendimento de livros, ou seja, nosso site preza pela: </p><br/>
					<ul>
						<li><p>Praticidade</p></li><br/>
						<li><p>Interatividade</p></li><br/>
						<li><p>Agilidade</p></li><br/>
						<li><p>Objetividade</p></li>
					</ul>
				</div>
				<div class="sobre-itens item-3">

					<div class="mySlides1 fade">
						<img src="../img/quem_somos/quem_somos1.jpeg">
					</div>

					<div class="mySlides1 fade">
						<img src="../img/quem_somos/quem_somos2.jpeg">
					</div>

					<div class="mySlides1 fade">
						<img src="../img/quem_somos/quem_somos3.jpeg">
					</div>

				</div>
			</div>
		</section>

		<?php include("footer.php");?>
	</body>
	<script type="text/javascript" src="../js/functions.js"></script> 
</html>