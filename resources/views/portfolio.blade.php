<!DOCTYPE html>
<html>
<head>
	<title>Portfolio - Karina Davidovich</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="{{asset('css/styles.css')}}" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-5 py-4">
			<a class="navbar-brand mr-auto" href="#">PORTFOLIO Karina Davidovich</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav ml-auto">
					<a class="nav-link active" href="#porfolio">Portfolio <span class="sr-only">(current)</span></a>
					<a class="nav-link" href="#about">About Me</a>
					<a class="nav-link" href="#contact">Contact</a>
				</div>
			</div>
</nav>
<header class="container-fluid">
	<div class="row" style="height: 600px; background-color: #5CBD9D;">
		<div class="col-12 align-self-center text-center" >
			<img src="{{asset('images\avatar.png')}}" class="img-fluid" width="200" alt="">
			<h1>Bienvenidos a mi PORTFOLIO</h1>
			<hr>
			<p>Analista en Sistemas de Información, Desarrolladora Web, QA</p>
		</div>
	</div>
</header>
<section class="container"  id="porfolio">
	<div class="row justify-content-center mb-5">
		<div class="col-12 text-center mt-5 " >
			<h2>PORTFOLIO</h2>
			<hr>
		</div>
		<div class="col-4 text-center mt-5">
			<img src="{{asset('images/cuadrito-bonito.png')}}" alt="Cuadrito">
		</div>
		<div class="col-4 text-center mt-5">
			<img src="{{asset('images/cuadrito-bonito.png')}}" alt="Cuadrito">
		</div>
		<div class="col-4 text-center mt-5">
			<img src="{{asset('images/cuadrito-bonito.png')}}" alt="Cuadrito">
		</div>
		<div class="col-4 text-center mt-5">
			<img src="{{asset('images/cuadrito-bonito.png')}}" alt="Cuadrito">
		</div>
		<div class="col-4 text-center mt-5">
			<img src="{{asset('images/cuadrito-bonito.png')}}" alt="Cuadrito">
		</div>
		<div class="col-4 text-center mt-5">
			<img src="{{asset('images/cuadrito-bonito.png')}}" alt="Cuadrito">
		</div>
	</div>
	
</section>

<section class="container-fluid" id="about">
	<div class="row justify-content-center py-5" style="background-color:#5CBD9D;">
		<div class="col-12 text-center mt-5 mb-4">
			<h2>ABOUT ME</h2>
			<hr>
		</div>
		<div class="col-4">
			<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda dolor soluta, nulla, voluptatum error quidem tempora ipsum doloribus qui aliquid facere consequatur saepe a officiis quia officia maxime itaque. Quisquam!</p>
		</div>
		<div class="col-4">
			<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda dolor soluta, nulla, voluptatum error quidem tempora ipsum doloribus qui aliquid facere consequatur saepe a officiis quia officia maxime itaque. Quisquam!</p>
		</div>
		<div class="col-12 text-center">
			<button type="button" class="btn btn-outline-secondary">Free Download</button>
		</div>
	</div>
</section>

<section class="container" id="contact">
	<div class="row justify-content-center mb-5">
		<div class="col-12 text-center mt-5">
			<h2>CONTACT ME</h2>
			<hr>
		</div>
		<div class="col-8">
			<form>
				<div class="form-group">
					<input type="text" name="name" class="form-control" id="name" placeholder="name">
				</div>
				<div class="form-group">
					<input type="email" name="email" class="form-control" id="email" placeholder="email">
				</div>
				<div class="form-group">
					<input type="text" name="phone" class="form-control" id="phone" placeholder="phone">
				</div>
				<div class="form-group">
					<textarea class="form-control" name="msg" id="msg" rows="3" placeholder="Like y chisme!"></textarea>
				  </div>
				<button type="submit" class="btn btn-primary ">Send</button>
			  </form>
		</div>
</section>


<footer class="container-fluid" style="background-color: #1A252F;">
	<div class="row justify-content-center pt-5">
		<div class="col-4 text-center pb-4">
			<h3>LOCATION</h3>
			<p>Guadalajara Guadalajara ! </p>
		</div>
		<div class="col-4 text-center pb-4">
			<h3>AROUND THE WEB</h3>
			<a href="">F</a>
			<a href="">W</a>
			<a href="">I</a>
		</div>
		<div class="col-4 text-center pb-4">
			<h3>ABOUT FREELANCER</h3>
			<p>FREELANCER ES PARA PERSONAS QUE NO LES GUSTA GANAR DINERO.
				SE TENÍA QUE DECIR Y SE DIJO.
			</p>
		</div>
		<div class="col-12 pt-3 text-center" style="background-color: #1A252F;">
			<p>Ésta página y tu alma me pertenece PRRO!</p>
		</div>
	</div>
</footer>

</body>
</html>