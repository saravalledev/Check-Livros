<!------------------------------------------------------------------------------------------------------
Nome do projeto: Check Livros
Descrição: Classe para efetuar cadastro / login
Fase: Finalizada

Autores:

Turma: 2TID
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
		global $pdo;
		
		$sql = $pdo->prepare("INSERT INTO sugestoes_livros (nome, email, genero_livro, sugestoes) VALUE (:n, :e, :g, :s)");

		$sql->bindValue(":n",$nome);
		$sql->bindValue(":e",$email);
		$sql->bindValue(":g",$genero);
		$sql->bindValue(":s",$sugestao);
		$sql->execute();
		return true;
		
	}

	//------------------ Cadastrar FeedBack  ------------------//

	public function cad_feedback($nome, $email, $feedback){
		global $pdo;

		$sql = $pdo->prepare("INSERT INTO feedback (nome, email, feedback_site) VALUE (:n, :e, :f)");

		$sql->bindValue(":n",$nome);
		$sql->bindValue(":e",$email);
		$sql->bindValue(":f",$feedback);
		$sql->execute();
		return true;
	}
}

?>