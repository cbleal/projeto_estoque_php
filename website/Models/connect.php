<?php 

class Connect 
{	
	public $pdo;

	public function __construct() 
	{
		try {
		$this->pdo = new PDO("mysql:host=localhost;dbname=controle_estoque", "root", "wsbcbl");	
			echo "Conectou.";	
		}
		catch (PDOException $e) {
			echo "Erro: ".$e->getMessage();
		}	
	}

	public function login($email, $senha)
	{
		$sql = "SELECT * FROM usuario WHERE email = :email AND senha = :senha";
		$sql = $this->pdo->prepare($sql);
		$sql->bindValue(":email", $email);
		$sql->bindValue(":senha", $senha);
		$sql->execute();

		if ($sql->rowCount() > 0) {
			
			$data = $sql->fetch();

			$_SESSION['idUsuario'] = $data['id'];
			$_SESSION['nmUsuario'] = $data['nome'];
			$_SESSION['pmUsuario'] = $data['ativo'];

			header("Location: ../pages/");
		}
		else {

			header("Location: ../login.php?alert=1");
		}
	}
	
}
//$connect = new Connect();

?>