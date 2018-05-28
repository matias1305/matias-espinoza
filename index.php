<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Portafolio - Matías Espinoza</title>
	<link rel="shortcut icon" href="assets/images/me.png"/>

	<!-- Styles -->
	<link rel="stylesheet" href="assets/css/lib/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/lib/animate.css/animate.min.css">
	<link rel="stylesheet" href="assets/css/lib/fontello/fontello.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
	<header class="wow fadeIn">
		<div class="container-fluid">
			<!-- Barra logo + Menu -->
			<div class="row nav rounded-top aling-items-stretch justify-content-between">
				<!-- Logotipo -->
				<div class="col-md-12 col-lg logo d-flex align-items-center justify-content-center justify-content-lg-start wow slideInLeft">
					<img src="./assets/images/me.png" alt="matias-espinoza" class="img-fluid icono">
					<span class="icon-dot"></span>
					<p>Desarrollador Web</p>
				</div>

				<!-- Menu de navegacion -->
				<nav class="col-md-12 col-lg-auto menu d-flex align-items-stretch flex-wrap flex-sm-nowrap wow lightSpeedIn">
					<a href="#aportafolio" class="c-1 d-flex align-items-center">
						<div class="d-flex flex-column text-center">
							<span>Portafolio</span>
							<i class="icon-briefcase"></i>
						</div>
					</a>

					<a href="#aacercaDe" class="c-2 d-flex align-items-center">
						<div class="d-flex flex-column text-center">
							<span>Acerca de</span>
							<i class="icon-user"></i>
						</div>
					</a>

					<a href="#acontacto" class="c-3 d-flex align-items-center">
						<div class="d-flex flex-column text-center">
							<span>Contacto</span>
							<i class="icon-mail"></i>
						</div>
					</a>
				</nav>
			</div>

			<!-- Slider -->
			<div class="row slider">
				<div class="col wow fadeIn">
					<div class="carousel slide" id="slider" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider" data-slide-to="0" class="actice"></li>
							<li data-target="#slider" data-slide-to="1"></li>
							<li data-target="#slider" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="./assets/images/slider/slide-1.png" 
									  alt="Seguridad y compromiso - Desarrollador Web" 
									  class="d-block img-fluid">
							</div>
							<div class="carousel-item">
								<img src="./assets/images/slider/slide-2.png" 
									  alt="Desarrollo de aplicaciones moviles - Desarrollador Web" 
									  class="d-block img-fluid">
							</div>
							<div class="carousel-item">
								<img src="./assets/images/slider/slide-3.png" 
									  alt="Desarrollo de aplicaciones Web - Desarrollador Web" 
									  class="d-block img-fluid">
							</div>
						</div>
						<a href="#slider" class="carousel-control-prev" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only"> Anterior </span>
						</a>
						<a href="#slider" class="carousel-control-next" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only"> Siguiente </span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</header>

	<main class="wow fadeIn">
		<div class="container-fluid">
			<!-- Seccion de portafolio -->
			<div class="row portafolio" id="aportafolio">
				<div class="col">
					<h2 class="titulo"> Portafolio </h2>
					<div class="row galeria justify-content-center wow zoomIn">
						<div class="contenedor-imagen col-6 col-lg-4">
							<!-- <a href="#"> -->
								<img src="./assets/images/slider/slide-1.png" 
									  alt="" 
								     class="img-fluid imagen">
							<!-- </a> -->
						</div>

						<div class="contenedor-imagen col-6 col-lg-4 wow zoomIn">
							<!-- <a href="#"> -->
								<img src="./assets/images/slider/slide-2.png" 
									  alt="" 
								     class="img-fluid imagen">
							<!-- </a> -->
						</div>
						<div class="contenedor-imagen col-6 col-lg-4 wow zoomIn">
							<!-- <a href="#"> -->
								<img src="./assets/images/slider/slide-3.png" 
									  alt="" 
								     class="img-fluid imagen">
							<!-- </a> -->
						</div>
					</div>
				</div>
			</div>

			<div class="row acerca-de align-items-center">
				<div class="col-12 col-lg-4 foto wow bounceInUp">
					<img src="./assets/images/matias-espinoza.png" 
						  alt="Matias Espinoza - Desarrollador Web" 
						  class="rounded-circle img-fluid">
					<p class="nombre">Matías Espinoza</p>
				</div>
				<div class="col-12 col-lg-8 info" id="aacercaDe">
					<h2 class="titulo">Acerca de</h2>
					<p class="resumen">
						Estudiante de ingeniería en computación e informática.
					</p>
					<p class="resumen">
						Hace 2 años especializandome en tecnologías Javascript tales como
						nodeJS, Angular, Ionic, Jquery, con conocimientos en PHP7, Java SE,
						Python, Firebase, Google Cloud Platform, MongoDB, MySQL, Oracle, entre otras.
					</p>
					<p class="resumen">
						Desarrollo de aplicaciones web y movil.
					</p>

					<p class="label wow rollIn">HTML</p>
					<div class="progress wow slideInRight">
						<div class="progress-bar progress-bar-striped" style="width: 95%;"></div>
					</div>

					<p class="label wow rollIn">CSS</p>
					<div class="progress wow slideInRight">
						<div class="progress-bar progress-bar-striped bg-success" style="width: 95%;"></div>
					</div>

					<p class="label wow rollIn">SASS</p>
					<div class="progress wow slideInRight">
						<div class="progress-bar progress-bar-striped bg-info" style="width: 90%;"></div>
					</div>

					<p class="label wow rollIn">JS</p>
					<div class="progress wow slideInRight">
						<div class="progress-bar progress-bar-striped bg-warning" style="width: 100%;"></div>
					</div>

					<p class="label wow rollIn">ANGULAR 6</p>
					<div class="progress wow slideInRight">
						<div class="progress-bar" style="width: 85%;"></div>
					</div>

					<p class="label wow rollIn">IONIC 3</p>
					<div class="progress wow slideInRight">
						<div class="progress-bar progress-bar-striped bg-danger" style="width: 85%;"></div>
					</div>
				</div>
			</div>

			<!-- Seccion Contacto -->
			<div class="row contacto justify-content-center">
				<div class="col-12 col-lg-8" id="acontacto">
					<h2 class="titulo"> Contacto </h2>
					
					<form action="php/enviar.php" method="POST" class="formulario form-contacto" autocomplete="off">
						
						<div id="alerta" class="alert d-none" role="alert">
  							<strong class="respuesta"></strong> <span class="mensaje-alert"></span>
						</div>

						<div class="row form-group">
							<div class="col-12 col-md-6 wow slideInLeft">
								<input type="text" name="nombre" id="nombre" placeholder="Nombre" required>
							</div>
							<div class="col-12 col-md-6 wow slideInRight">
								<input type="email" name="email" id="email" placeholder="email" required>
							</div>
						</div>
						<textarea class="wow slideInUp" name="mensaje" id="mensaje" placeholder="Escriba su mensaje" required></textarea>
						<div class="form-group d-flex justify-content-center wow slideInUp">
							<input type="submit" class="boton" value="Enviar">
						</div>
					</form>
				</div>
			</div>
		</div>
	</main>

	<footer class="wow fadeIn">
		<!-- Redes Sociales -->
		<div class="container-fluid">
			<div class="row redes-sociales justify-content-center">
				<div class="col-auto">
					<a href="https://www.facebook.com/MatiasEspinoza1305" 
						target="_blank" 
						class="icono facebook wow slideInLeft">
						<i class="icon-facebook-squared"></i>
					</a>
					<a href="https://github.com/matias1305" 
						target="_blank" 
						class="icono github wow slideInUp">
						<i class="icon-github-circled"></i>
					</a>
					<a href="https://www.linkedin.com/in/mat%C3%ADas-ignacio-espinoza-herrera-663860153/" 
						target="_blank" 
						class="icono linkedin wow slideInRight">
						<i class="icon-linkedin-squared"></i>
					</a>
				</div>
			</div>
		</div>
	</footer>

	<!-- Javascript -->
	<script src="assets/js/lib/Jquery/jquery.min.js">       </script>
	<script src="assets/js/lib/Popper.js/popper.min.js">    </script>
	<script src="assets/js/lib/bootstrap/bootstrap.min.js"> </script>
	<script src="assets/js/lib/WOW/dist/wow.min.js">        </script>
	<script src="assets/js/wow-init.js">                    </script>
	<script src="assets/js/scroll.js">                      </script>
	<script src="assets/js/validar-form.js">                </script>
</body>
</html>
