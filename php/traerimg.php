<?php 
session_start();


if ($_POST["caso"]==1) {
	# code...
	session_destroy();
	$_SESSION['usuario']="";
	echo "true";
}else{

	$base= new PDO("mysql:host=localhost; dbname=proyectoimagenes" , "root", "");
	$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$base->exec("SET CHARACTER SET utf8");


	$sql="SELECT * from imagenes" ;
	$result=$base->prepare($sql);
	$result->execute(array());

	while($registros=$result->fetch(PDO::FETCH_ASSOC)){
		$clientes[]=$registros;
	}

	echo json_encode($clientes);


}


?>