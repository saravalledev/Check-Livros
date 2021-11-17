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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador Check</title>

	<link rel="stylesheet" href="../css/estilos_gerais.css" />
	<link rel="stylesheet" href="../css/estilo_desktop.css" />
	<link rel="stylesheet" href="../css/estilo_tablet.css" />
	<link rel="stylesheet" href="../css/estilo_mobile.css" />
</head>
<body class="row">
    <?php 
        include("menu.php");
    ?>
    <section class="col-s-12 col-m-12 col-s-12 cad-sec">
                <?php
                
                if (isset ($_POST["Cadastrar"])) {

                    $titulo= addslashes($_POST['titulo']);
                    $autor= addslashes($_POST['autor']);
                    $editora= addslashes($_POST['editora']);
                    $ano_publi= addslashes($_POST['ano_publi']);
                    $genero= addslashes($_POST['genero']);

                    //echo $titulo, $autor, $editora, $ano_publi, $genero;
                        if(!empty($titulo) && !empty($autor) && !empty($editora) && !empty($ano_publi) && !empty($genero)){ 
                            $conexao= mysqli_connect("localhost","root","","check_livros");

                            //echo "ok";
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
                                    //echo "ok";
                                    if($u->cad_livro($titulo, $autor, $editora, $ano_publi, $genero)){
                                        
                                        ?>
                                        <div class="msg-geral msg-sucesso">
                                            <p>Livro cadastrado com sucesso!<br> Agora é só aproveitar SZ</p>
                                        </div>
                                        <?php
                                    }else{
                                        ?>
                                        <div class="msg-geral msg-erro">
                                            <p>Email já cadastrado!</p>
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
                <h1>Bem-vindo ao Check Livros, caro colaborador!</h1>
                <br/><br/>
                <h2>Aqui você poderá cadastrar novos livros para que a comunidade continue crescendo cada vez mais.</h2>
                <br><br>
                <form name="form-adm" method="POST" >

                    <label for="titulo">Título do livro:</label>
                    <input type="titulo" name="titulo" maxlength="40">
                    <br>
                    <!-- Esse parte da img só existira no local, pois o cód é diferente no Hostinger-->
                    <label for="img">Endereço da capa do livro:</label>
                    <input type="img" name="img">
                    <br>
                    <label for="autor">Autor:</label>
                    <input type="autor" name="autor">
                    <br>
                    <label for="editora">Editora:</label>
                    <input type="editora" name="editora">
                    <br>
                    <label for="ano_publi">Ano de publicação:</label>
                    <input type="ano_publi" name="ano_publi">
                    <br>
                    
                    <label for="genero">Genero do livro:</label>
                    <select name="genero">
                        <option value="#">Selecione o gênero a que o livro pertence</option>
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
                    <br><br>
                    
                    <input type="submit" name="Cadastrar" value="Cadastrar">

                </form>
            </section>
    </body>
</html>
    <?php

    include("footer.php");
    ?>