<!doctype html>
<html lang="en">
<head>

	<?php
	session_start();
	


	if($_SESSION["usuario"] != "useradmin"){
		session_destroy();
		$_SESSION['usuario']="";
		header("Location: index.html");
		


	}
	?>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">

	<title>Hello, world!</title>
</head>
<body>
	<div class="container">

		<form method="POST" enctype="multipart/form-data" id="imagen">
			<div class="form-group">
				<label for="archivo">Cargar Imagen</label>
				<input type="file" name="archivo" class="form-control-file" id="archivo">
			</div>
			<input type="submit" name="Enviar" value="Enviar">


		</form>

		<br>
		<button id="cerrarsesion" class="btn btn-outline-danger my-auto ">Cerrar Sesion</button>
		
	</div>



	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script type="text/javascript" src="JQuery/jquery.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	<script src="js/SubirImg.js"></script>



</body>
</html>