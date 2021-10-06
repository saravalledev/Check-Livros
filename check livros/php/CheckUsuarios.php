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

	public function conectar($nome, $host, $usuario, $senha){ 
		global $pdo;
		global $msgErro;
		try{
			$pdo = new PDO("mysql:dbname=".$nome.";host=".$host,$usuario,$senha);

		} catch (PDOException $e){
			$msgErro = $e->getMessage();
		}

	}
	public function cadastrar($username, $cpf, $email, $senha){
		global $pdo;
		//Verificar se o email ja está cadastro
		$sql = $pdo->prepare("SELECT id_usuario FROM usuario WHERE email = :e"); 

		$sql->bindValue(":e",$email);
		$sql->execute();

		if($sql->rowCount() > 0){   

			return false; 

		} else {    
			$sql = $pdo->prepare("INSERT INTO usuario (username, cpf, email, senha) VALUE (:n, :c, :e, :s)");

			$sql->bindValue(":n",$username);
			$sql->bindValue(":c",$cpf);
			$sql->bindValue(":e",$email);
			$sql->bindValue(":s",md5($senha)); 
			$sql->execute();
			return true;
		} 
	}
	public function logar($email, $senha){
		echo $email;
		echo $senha;
		global $pdo;
		$sql->bindValue(":e",$email);
		$sql->bindValue(":s",md5($senha));
		//verificar se o email e senha estao cadastrados, se sim:
		$sql = "SELECT id_usuario FROM usuario WHERE email = :e AND senha = :s";

		$sql1 = mysqli_query(conectar(),$sql);
		echo $sql->rowCount();
		if($sql1->rowCount() > 0){
			//entrar no sistema (sessao):
			$dado = $sql->fetch(); //"fetch" transforma as informações do BD em um array
			echo $dado['email'];
			session_start();
			$_SESSION['id_usuario'] = $dado['id_usuario'];
			return true; //logado com sucesso
		}else{
			return false; //erro no login
		}
	}
}

?>