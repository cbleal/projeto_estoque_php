<?php 

/*require_once 'layout/script.php';
require_once 'layout/conteudo.php';

echo $head;
echo $nav;
echo $aside;

echo '<div class="content-wrapper">';

echo '</div>';

//echo $conteudo;
echo $footer;
echo $aside2;
echo $javascript;*/

require_once 'App/auth.php';


if ( $nmUsuario && $pmUsuario ) {
	
	header( "Location: Views/" );
}
else {

	header("Location: login.php");
}

?>