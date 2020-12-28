<!DOCTYPE html>
<html>
<head>
	<title>Portfolio - Karina Davidovich</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="{{asset('css/styles.css')}}" crossorigin="anonymous">
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-5 py-4">
			<a class="navbar-brand mr-auto" href="#">Karina Davidovich</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav ml-auto">
					<a class="nav-link active" href="#porfolio">Portfolio <span class="sr-only">(current)</span></a>
					<a class="nav-link" href="#about">Sobre Mi</a>
					<a class="nav-link" href="#contact">Contacto</a>
				</div>
			</div>
</nav>
<header class="container-fluid">
	<div class="row" style="height: 500px; background-color: #2C3D50;">
		<div class="col-12 align-self-center text-center" >
			<img src="{{asset('images\avatar.png')}}" class="img-fluid" width="200" alt="">
			<h1 style="color: white;">Soy Karina Davidovich</h1>
			<hr>
			<p>Analista en Sistemas de Información, Desarrolladora Web, QA</p>
		</div>
	</div>
</header>
<section class="container" id="porfolio">
            <div class="row justify-content-center mb-5">
                <div class="col-12 text-center mt-5">
                    <h2>PORTFOLIO</h2>
                    <hr>
                </div>
                @foreach ($projects as $project)
                <div class="col-4 text-center mt-5">
                    <h2>{{$project->title}}</h2>
                    <img src="{{asset('images/portfolio/'.$project->featured)}}" class="img-fluid" alt="{{$project->title}}">
                    <p>{{$project->description}}</p>
                </div>
                @endforeach
            </div>
        </section>

<section class="container-fluid" id="about">
	<div class="row justify-content-center py-5" style="background-color:#2C3D50;">
		<div class="col-12 text-center mt-5 mb-4">
			<h2 style="color: white;">ABOUT ME</h2>
			<hr>
		</div>
		<div class="col-4">
			<p>Soy una profesional capacitada para desempeñame en diferentes roles,tales como Desarrollador, Tester, Analista Funcional, Arquitecto de Software, DBA, Administrador de Redes, Asesor en Tecnología, Asegurador de Calidad (QA), Auditor de Sistemas, Consultor en informática. </p>
		</div>
		<div class="col-4">
			<p>Mi objetivo como profesional es sumarme a organizaciones civiles, bancos, entidades financieras, empresas comerciales,industrias o consultoras para potenciar mi capacidad.</p>
		</div>
		<div class="col-12 text-center">
			<button href="https://drive.google.com/file/d/1obUzUFTydNJ6MAE2gtOBJG0VhG0pLKBi/view?usp=sharing" type="button" class="btn btn-outline-secondary">Descargar CV</button>
		</div>
	</div>
</section>

<section class="container" id="contact">
	<div class="row justify-content-center mb-5">
		<div class="col-12 text-center mt-5">
			<h2>Contact me</h2>
			<hr>
		</div>
		<div class="col-8">
			<form>
				<div class="form-group">
					<input type="text" name="name" class="form-control" id="name" placeholder="nombre">
				</div>
				<div class="form-group">
					<input type="email" name="email" class="form-control" id="email" placeholder="email">
				</div>
				<div class="form-group">
					<input type="text" name="phone" class="form-control" id="phone" placeholder="telefono">
				</div>
				<div class="form-group">
					<textarea class="form-control" name="msg" id="msg" rows="3" placeholder="Mensaje"></textarea>
				  </div>
				<button type="submit" class="btn btn-primary ">Enviar</button>
			  </form>
		</div>
</section>


<footer class="container-fluid" style="background-color: #1A252F;">
	<div class="row justify-content-center pt-5">
		<div class="col-4 text-center pb-4">
			<h3>Ubicación</h3>
			<p>San Miguel de Tucumán, Tucumán , Argentina </p>
		</div>
		<div class="col-4 text-center pb-4">
			<h3>Enlaces</h3>
			<a href="https://web.facebook.com/karina.davidovich"><i class='fab fa-facebook' style='font-size:36px'></i>
			</a>
			<a href="https://www.instagram.com/karinadavidovich/"><i class='fab fa-instagram' style='font-size:36px'></i>
			</a>
			<a href="https://www.linkedin.com/in/karina-davidovich-7250ab1ba"><i class='fab fa-linkedin' style='font-size:36px'></i></a>
			<a href="https://github.com/KarinaDavi/"><i class='fab fa-github' style='font-size:36px'></i></a>
		</div>
		<div class="col-4 text-center pb-4">
			<h3>Detalles de Contacto</h3>
			<p>Ana Karina Davidovich , - 54(381)6920078 - thedeicider@gmail.com			</p>
		</div>
		<div class="col-12 pt-3 text-center" style="background-color: #1A252F;">
			<p>© Copyright 2020 - Design by KDavidovich</p>
		</div>
	</div>
</footer>

</body>
</html>