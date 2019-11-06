<?php 

// CRIA UMA SESSÃO
session_start();

// VERIFICAR SE EXISTE SESSÃO ATIVA
if ( isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password']) ) { // SE EXISTIR
	
	// ATRIBUI OS VALORES ENVIADOS DO LOGIN PARA VARIÁVEIS
	$email = addslashes($_POST['email']);
	echo $senha = md5(addslashes($_POST['password']));

	// CHAMA O MÉTODO LOGIN DE MODELS
	require_once '../Models/connect.php';
	$connect = new Connect();
	$connect->login($email, $senha);
} 
else { // SENÃO

	// REDIRECIONA PARA MESMA PAGINA LOGIN
	echo "<script>alert('Você deve digitar seu email e senha')</script>";
	echo "<script>window.location.href='../login.php'</script>";
}

?>