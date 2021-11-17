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

	public $pdo; 
	public $msgErro = "";

	//------------------ Conecta Base de Dados ------------------//

	public function conectar($nome, $host, $usuario, $senha){ 
		global $pdo;
		global $msgErro;
		try{
			$pdo = new PDO("mysql:dbname=".$nome.";host=".$host,$usuario,$senha);

		} catch (PDOException $e){
			$msgErro = $e->getMessage();
		}

	}

	//------------------ Cadastrar Usuário ------------------//

	public function cadastrar($username, $email, $senha){
		global $pdo;
		//Verificar se o email ja está cadastro
		
		$sql = $pdo->prepare("SELECT id_usuario FROM usuario WHERE email = :e"); 

		$sql->bindValue(":e",$email);
		$sql->execute();

		if($sql->rowCount() > 0){   

			return false; 

		} else {    
			$sql = $pdo->prepare("INSERT INTO usuario (username, email, senha) VALUE (:n, :e, :s)");

			$sql->bindValue(":n",$username);
			$sql->bindValue(":e",$email);
			$sql->bindValue(":s",md5($senha)); 
			$sql->execute();
			return true;
		}
		
	}

	//------------------ Cadastrar Sugestão de Livros  ------------------//

	public function cad_sugestao($nome, $email, $genero, $sugestao){
		
		$conexao = mysqli_connect("localhost","root", "", "check_livros");
		$sql = "INSERT INTO sugestoes_livros (nome, email, genero_livro, sugestoes) VALUE ('$nome', '$email', '$genero', '$sugestao')";

		$result = mysqli_query($conexao, $sql);
		return true;
		
	}

	//------------------ Cadastrar FeedBack  ------------------//

	public function cad_feedback($nome, $email, $feedback){
	
		$conexao = mysqli_connect("localhost","root", "", "check_livros");
		$sql = "INSERT INTO feedback (nome, email, feedback_site) VALUE ('$nome', '$email', '$feedback')";

		$result = mysqli_query($conexao, $sql);
		return true;
	}

	//------------------ Cadastrar Resenha  ------------------//
	
		public function cad_resenha( $idlivro, $username, $resenha){

			$conexao = mysqli_connect("localhost","root", "", "check_livros");
			$sql = "INSERT INTO resenhas (id_livro, username, resenha) VALUES ('$idlivro', '$username', '$resenha')";

			$result = mysqli_query($conexao, $sql);
			return true;
			
		}
		
		
		//global $pdo;

		//buscar como cadastrar o titulo_livro, com a relação de tabelas.
		/*$sql = $pdo->prepare("INSERT INTO resenhas (id_resenha, id_livro, username, resenha) VALUE (:id, :n, :r)");

		$sql->bindValue(":id",$idlivro);
		$sql->bindValue(":n",$username);
		$sql->bindValue(":r",$resenha);
		$sql->execute();
		return true;*/
	
	public function cad_livro( $titulo, $autor, $editora, $ano_publi, $genero){

		$conexao = mysqli_connect("localhost","root", "", "check_livros");
		$sql = "INSERT INTO livros (titulo_livro, autor, editora, ano_publicado, genero_livro) 
		VALUES ('$titulo', '$autor', '$editora', '$ano_publi', '$genero')";

		$result = mysqli_query($conexao, $sql);
		return true;
	}

	public function cad_like_des($id_resenha, $like, $deslike){
		global $pdo;
	
		$sql = $pdo->prepare("INSERT INTO avaliacoes (id_resenha, positivo, negativo) VALUE (:id, :p, :n)");
	
		$sql->bindValue(":id",$id_resenha);
		$sql->bindValue(":p",$like);
		$sql->bindValue(":n",$deslike);
		$sql->execute();
		return true;
	}
}


?>