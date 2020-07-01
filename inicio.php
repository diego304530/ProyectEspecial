<!doctype html>
<html lang="en">
<head>
	<?php 
	session_start();
	if($_SESSION['usuario']!="usernormal"){
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
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link href="fontawesome/fontawesome-free/css/all.css" rel="stylesheet">

	<title>Nuestros Recuerdos</title>
</head>
<body>
	
	<!-- navbar -->

	
	<nav class="navbar navbar-expand-lg  fixed-top navbar-light "style="background-color: #e3f2fd;">

		<button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse " id="navbarNav">
			<ul class="navbar-nav mx-auto">
				<li class="nav-item active">
					<a class="nav-link h4" href="#">Inicio <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<i class="fas fa-heart text-danger h2 nav-link"></i>
				</li>
				<li class="nav-item">
					<a class="nav-link h4" href="Mensaje.php">Para Ti!!</a>
				</li>

			</ul>
			<button id="cerrarsesion" class="btn btn-outline-danger my-auto ">Cerrar Sesion</button>
		</div>
	</nav>


	<div class="container">
		<!-- slider -->

		<div id="carouselExampleIndicators" class="carousel slide mt-5" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="imagenes/img1.jpg" class="d-block w-100" height="500" alt="...">
				</div>
				<div class="carousel-item">
					<img src="imagenes/img2.jpg" class="d-block w-100" height="500" alt="...">
				</div>
				<div class="carousel-item">
					<img src="imagenes/img3.jpg" class="d-block w-100" height="500" alt="...">
				</div>
				<div class="carousel-item">
					<img src="imagenes/img4.jpg" class="d-block w-100" height="500" alt="...">
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
		
		<div class="bg-white border border-success rounded mt-5 mb-5 p-4 h5">
			<p>
				Mi amor estos son algunos de los momentos que hemos pasado juntos y que hemos ido guardando por medio de fotografías…. Bueno tu que las tomas ya que te encantan las fotos amor mío… pero me alegra que así sea porque así se inmortalizan esos lindos momentos a tu lado, aquellos instante que no cambiaría por nada
			</p>
		</div>



		<!-- impresion de imagenes -->

		<table id="impresion" class="table"></table>
		<!-- Modal -->


		<div class="modal fade modal-dialog-centered" id="modalPres" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body" id="modalTexto">
						
					</div>
				</div>
			</div>
		</div>





	</div>




	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script type="text/javascript" src="JQuery/jquery.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	<script src="js/inicio.js"></script>



</body>
</html>