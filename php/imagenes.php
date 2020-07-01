<?php 
session_start();
if($_POST['caso']==1){
	session_destroy();
	$_SESSION['usuario']="";
	echo "true";

}else{
	$nombre_imagen=$_FILES["archivo"]["name"];

	$carpeta_destino=$_SERVER["DOCUMENT_ROOT"] . "/ProyectEspecial/imagenes/" . $nombre_imagen;

	move_uploaded_file($_FILES["archivo"]["tmp_name"], $carpeta_destino);



	echo ($nombre_imagen);
	$base= new PDO("mysql:host=localhost; proyectoimagenes" , "root", "");
	$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$base->exec("SET CHARACTER SET utf8");


	$sql="INSERT INTO imagenes VALUES (?)";
	$result=$base->prepare($sql);
	$result->execute(array("imagenes/" . $nombre_imagen));
	$cuenta=$result->rowCount();
	echo $cuenta;



}

?>	