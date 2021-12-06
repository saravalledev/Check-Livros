<!------------------------------------------------------------------------------------------------------
Nome do projeto: Check Livros
Descrição: Classe para efetuar cadastro / login
Fase: Finalizada

Autores:

Turma: 3TID
Hebert Victor | número:                                                       Versão: 1.0
Matheus Felix Carlos | número:                                                Data:
Kaike Santos Coppola | número: 

Autores externos: 
(Processamento do Cadastro e login e parte do CSS) -> Miriam TechCod: 
https://www.youtube.com/watch?v=et-j0z-tbk4&list=PLYGFJHWj9BYq5zosbRaY7XM5vM0ISLkWS
--------------------------------------------------------------------------------------------------------->

<?php
Class Usuario{

	//------------------ Cadastrar Usuário ------------------//
		function cadastrar($username, $email, $cod_senha){
			
			require('conexao.php');
			$sql2 = "INSERT INTO usuario (username, email, senha) VALUE ('$username', '$email', '$cod_senha')";
			$result2 = mysqli_query($conexao, $sql2);
					
			return true;
		}

	//------------------ Cadastrar Sugestão de Livros  ------------------//
		function cad_sugestao($nome, $email, $genero, $sugestao){
		
	    require('conexao.php');
		$sql = "INSERT INTO sugestoes_livros (nome, email, genero_livro, sugestoes) VALUE ('$nome', '$email', '$genero', '$sugestao')";

		$result = mysqli_query($conexao, $sql);
		return true;
		
		}

	//------------------ Cadastrar FeedBack  ------------------//
		function cad_feedback($nome, $email, $feedback){
		
            require('conexao.php');
            $sql = "INSERT INTO feedback (nome, email, feedback_site) VALUE ('$nome', '$email', '$feedback')";
			$result = mysqli_query($conexao, $sql);
			return true;
		}

	//------------------ Cadastrar Resenha  ------------------//

		function cad_resenha( $idlivro, $username, $resenha){

			require('conexao.php');
			$sql = "INSERT INTO resenhas (id_livro, username, resenha) VALUES ('$idlivro', '$username', '$resenha')";

			$result = mysqli_query($conexao, $sql);
			return true;
			
		}
		
	//------------------ Cadastrar Livro  ------------------//
		function cad_livro( $titulo, $autor, $editora, $ano_publi, $img_capa, $genero){

			require('conexao.php');
			$sql = "INSERT INTO livros (titulo_livro, autor, editora, ano_publicado, img_href, genero_livro) 
			VALUES ('$titulo', '$autor', '$editora', '$ano_publi', '$img_capa', '$genero')";

			$result = mysqli_query($conexao, $sql);
			return true;
		}

	//------------------ Editar resenha ------------------//
		
		function ed_resenha($ed_resenha){
			
			
			$id = $_SESSION['id_resenha'];

			require('conexao.php');
			$sql = "UPDATE resenhas SET resenha = '$ed_resenha' WHERE id_resenha = '$id'";

			$result = mysqli_query($conexao, $sql);
			return true;
		}
}
?>