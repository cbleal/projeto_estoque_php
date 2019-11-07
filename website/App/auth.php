<?php 

session_start();

if ( isset($_SESSION['idUsuario']) && !empty($_SESSION['idUsuario'])  ) {
	
	// SE EXISTIR	
	$idUsuario = $_SESSION['idUsuario'];
	$nmUsuario = $_SESSION['nmUsuario'];
	$pmUsuario = $_SESSION['pmUsuario'];
	$foto	   = $_SESSION['foto'];
}
else {

	//SENÃO
	header("Location: ../login.php");
}

?>