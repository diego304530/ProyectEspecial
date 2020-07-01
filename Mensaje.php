<!doctype html>
<html lang="en">
<head>

	<?php
	session_start();
	if($_SESSION["usuario"] != "usernormal"){
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
	<link rel="stylesheet" type="text/css" href="css/estilos2.css">
	<link href="fontawesome/fontawesome-free/css/all.css" rel="stylesheet">
	

	<title>Para TI!!</title>
</head>
<body >

	
	<nav class="navbar navbar-expand-lg  fixed-top navbar-light "style="background-color: #e3f2fd;">

		<button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse " id="navbarNav">
			<ul class="navbar-nav mx-auto">
				<li class="nav-item">
					<a class="nav-link h4" href="inicio.php">Inicio <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<i class="fas fa-heart text-danger h2 nav-link"></i>
				</li>
				<li class="nav-item">
					<a class="nav-link h4 active" href="#">Para Ti!!</a>
				</li>

			</ul>
			<button id="cerrarsesion" class="btn btn-outline-danger my-auto ">Cerrar Sesion</button>
		</div>
	</nav>

	<div class="container mt-5 pt-5">
		

		<div id="texto" class="bg-dark text-justify text-light p-4 m-auto h5 rounded">
			
			Hola mi amor, espero que te encuentren muy bien, este ha sido un pequeño detalle de mi parte, muy a mi estilo...jejjeje…. No se si te guste amor mio, espero que si… <br><br>

			Sabes primero que todo quiero agradecerte por estos siete meses, soy muy feliz a tu lado mi amor, me has enseñado muchas cosas entre ellas a confiar más en mi mismo, a creer más en mi y aumentar mi autoestima. Has cambiado mi forma de ver las cosas en gran forma y eso ha hecho que me enamore de ti cada dia. Cada vez que estoy junto a ti siento una alegría en mi corazón indescriptible, escuchar tu voz me emociona ver un mensaje de ti cambia mi dia completamente. Cada dia que pasa extraño mas tus besos, tus caricias, tus abrazos, tener tu cuerpo cerca de mi y poder abrazarte. <br><br> 
			Gracias por haberme entregado tu amor, por haber correspondido el amor que yo te he brindado, siempre tendrás un lugar seguro en mi corazón, aquel corazón al que tu entraste fácilmente, y llegaste para quedarte en él hasta mi último aliento. No sabes la alegria que siento cuando me dices que estas feliz a mi lado, que estas segura de mi amor e incluso sueñas con tener una vida juntos, construir un hogar donde podamos estar juntos sin problemas, aquellos días en los que me dices como quieres que sea nuestra casa, o como haremos para conseguirla son muy especiales para mi y deseo con mi alma que todos los sueños que tenemos juntos se logren cumplir, luchare con todo mi ser por cumplirlos y asi poder disfrutar mis dias a tu lado, que seas la última persona que pueda ver antes de acostarme y la primera persona que veo en las mañanas. Quiero que las cosas sigan muy bien y si Dios quiere por qué no Casarnos, se que es algo pronto para pensar en eso, pero lo hago por que siento que sera posible, siento que seguiremos juntos amandonos por el resto de nuestras vidas. Solo quiero recordarte que te amo y te seguiré amando, que te amo tal y como eres (asi sea un poco malgeniadita jjejeje) y que cada dia me seguiré enamorando de ti. TE AMO MI VIDA…..

		</div>



		

	</div>



	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script type="text/javascript" src="JQuery/jquery.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	<script src="js/mens.js"></script>



</body>
</html>
