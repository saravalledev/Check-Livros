<!------------------------------------------------------------------------------------------------------
Nome do projeto: Check Livros
Descrição: Classe para efetuar cadastro / login
Autores:
Turma: 3TID
Hebert Victor | número:
Matheus Felix Carlos | número:                                                          Versão: 1.0
Kaike Santos Coppola | número                                                         Data://21 

Altores externos: 
--------------------------------------------------------------------------------------------------------->

<?php
Class Usuario{
	//para conectar com a base de dados precisamos de ao menos quatro paremetros exigidos para conectar o "pdo"
	public $pdo; 
	public $msgErro = "";//tudo ok
	public function conectar($nome, $host, $usuario, $senha){ //parametros exigidos
		global $pdo;
		global $msgErro;
		try{
			$pdo = new PDO("mysql:dbname=".$nome.";host=".$host,$usuario,$senha);

		} catch (PDOException $e){
			$msgErro = $e->getMessage();
		}

	}
	public function cadastrar($Username, $CPF, $email, $senha){
		global $pdo;

		$sql = $pdo->prepare("SELECT idusuario FROM usuario_cl WHERE Email = :e"); //Verificar se há cadastro, buscando pelo id no bd

		$sql->bindValue(":e",$email);
		$sql->execute();

		if($sql->rowCount() > 0){   //se o numero de linhas for maior que zero, então esse pessoa já está cadastrada

			return false; //já está cadastrada

		} else {    //Caso não,cadastra
			$sql = $pdo->prepare("INSERT INTO usuario_cl (Username, CPF, Email, Senha) VALUE (:n, :c, :e, :s)");

			$sql->bindValue(":n",$Username);
			$sql->bindValue(":c",$CPF);
			$sql->bindValue(":e",$email);
			$sql->bindValue(":s",md5($senha)); //"md5" Criptografa a senha
			$sql->execute();
			return true;
		} 
	}
	public function logar($email, $senha){
		global $pdo;

		//verificar se o email e senha estao cadastrados, se sim:
		$sql = $pdo->prepare("SELECT idusuario FROM usuario_cl WHERE Email = :e AND Senha = :s");
		$sql->bindValue(":e",$email);
		$sql->bindValue(":s",md5($senha));
		$sql->execute();

		if($sql->rowCount() > 0){
			//entrar no sistema (sessao):
			$dado = $sql->fetch(); //"fetch" transforma as informações do BD em um array
			session_start();
			$_SESSION['idusuario'] = $dado['idusuario'];
			return true; //logado com sucesso
		}else{
			return false; //erro no login
		}
	}
}

?>