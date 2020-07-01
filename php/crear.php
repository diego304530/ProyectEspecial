<?php 



if($_POST['nombres']=='useradmin'&& $_POST['contra']=='administrador'){
	session_start();
	$_SESSION['usuario']= $_POST['nombres'];
	echo "admin";

}elseif ($_POST['nombres']=='usernormal'&& $_POST['contra']=='usernormal') {
	# code...
	session_start();
	$_SESSION['usuario']= $_POST['nombres'];
	echo "normal";
}else{

	echo "error";
}



?>