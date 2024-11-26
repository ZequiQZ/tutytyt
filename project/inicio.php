<?php
session_start();
if(empty($_SESSION["id"])){
	header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/estilo.css">
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
	<div class="bd-example mb-0" style="height: 80vh">
		<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
				<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active" style="height: 80vh">
					<img src="img/1.jpg" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h5 class="display-4 mb-4 font-weight-bold">Sistema de información de currículum académico</h5>
						<p>Práctico, Seguro, fácil.</p>
					</div>
				</div>
				<div class="carousel-item" style="height: 80vh">
					<img src="img/1.jpg" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h5 class="display-4 mb-4 font-weight-bold">Sistema de información de currículum académico</h5>
						<p>Práctico, Seguro, fácil.</p>
					</div>
				</div>
				<div class="carousel-item" style="height: 80vh">
					<img src="img/1.jpg" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h5 class="display-4 mb-4 font-weight-bold">Sistema de información de currículum académico</h5>
						<p>Práctico, Seguro, fácil.</p>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>

	<nav class="navbar navbar-dark bg-dark  navbar-expand-md navbar-light bg-light fixed-top">
		<div class="text-white bg-success p-2">
			<?php
			echo $_SESSION["nombre"]." ".$_SESSION["apellido"];
			?>
		</div>
		<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
			<div class="navbar-nav mr-auto">
				<div class="offset-md-1 mr-auto text-center"></div>
				<a class="nav-item nav-link text-justify active ml-3 hover-primary" href="inicio.php">Inicio</a>
				<a class="nav-item nav-link text-justify ml-3 hover-primary" href="constancias.php">Constancias</a>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle text-justify ml-3" href="" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Educación
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
						<a class="dropdown-item" href="#">Becas</a>
						<a class="dropdown-item" href="#">Cursos</a>
						<a class="dropdown-item" href="servicios.html">Concursos</a>
					</div>
				</li>
				<a class="nav-item nav-link text-justify ml-3 hover-primary" href="controlador/controlador_cerrar_sesion.php">Salir</a>
			</div>
			<div class="text-center justify-content-center">
				<a class="btn btn-outline-primary" target="_blank" href="https://www.instagram.com/tucvescolar_mx/">Instagram</a>
				<a class="btn btn-outline-danger" target="_blank" href="https://www.youtube.com">Youtube</a>
			</div>
		</div>

	</nav>
	<div class="">
		<div class="jumbotron bg-dark text-light rounded-0">
			<h1 class="display-4">Hola, Mundo!</h1>
			<p class="lead">¡Bienvenidos! Gracias por usar nuestra plataforma. ¡Son los primeros en probarla!</p>
			<hr class="my-4 bg-light">
			<div class="d-flex justify-content-between align-items-center flex-wrap">
				<p>"Cada desafío es una oportunidad para crecer, y cada esfuerzo te acerca a tus sueños."</p>
				<a class="btn btn-primary btn-lg" href="#" role="button">Leer más</a>
			</div>
		</div>
	</div>

	<form action="" class="form-inline d-flex justify-content-center flex-column flex-md-row">
		<div class="form-group mx-2 my-2">
			<label class="d-none d-md-block" for="">Nombre</label>
			<input type="text" class="form-control" placeholder="Nombre">
		</div>
		<div class="form-group mx-2 my-2">
			<label class="d-none d-md-block" for="">Apellido</label>
			<input type="text" class="form-control" placeholder="Apellido">
		</div>
		<div class="form-group mx-2 my-2">
			<button class="btn btn-outline-primary">enviar</button>
		</div>
	</form>



	<p>En el vasto abismo del universo, donde las estrellas nacen y mueren a una escala que apenas podemos comprender, nuestra existencia parece ser solo un parpadeo fugaz. Cada átomo de nuestro cuerpo, en su esencia más profunda, es polvo de estrellas, nacido en los mismos talleres cósmicos donde se forjan las constelaciones. Sin embargo, a pesar de nuestra brevedad, somos conscientes de la magnificencia de este cosmos, y eso nos convierte en algo singularmente extraordinario: somos el universo que se mira a sí mismo.

En este pequeño rincón de la existencia, bajo un cielo que parece eterno, nuestras vidas transcurren como un susurro en la tormenta. Pero en ese susurro, en esa chispa de conciencia, radica la capacidad de soñar, de crear, de desafiar los límites de lo posible. Así, aunque el universo sea inabarcable, nuestro pensamiento puede cruzar sus fronteras, explorar sus misterios y preguntarse sobre el origen de todo lo que existe. Y, en esa pregunta, yace el poder infinito de nuestra imaginación.</p>














	<script src="js/jquery-3.3.1.slim.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>

</html>