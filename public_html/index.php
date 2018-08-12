<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width-device-width, initial-scale=1, shrink-to-fit=no">

		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link href="styles.css" rel="stylesheet" type="text/css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha256-98vAGjEDGN79TjHkYWVD4s87rvWkdWLHPs5MC3FvFX4=" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<title>Adel's Tech Profile</title>
	</head>
	<body>

		<header class="container-fluid" id="home">
			<div class="row">
				<div class="col-md-2">
					<img class="img-fluid p-3" src="img_adel.jpg">
				</div>
				<div class="header-text col-md-3 align-self-center ml-auto">
					<p>Adel Moreno</p>
				</div>
				<div class="header-text col-md-2 align-self-center mr-auto">
					<p>Web Developer</p>
				</div>
			</div>
			<nav class="navbar navbar-expand-md">
				<a class="navbar-brand" href="#"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link" href="#home">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#about">About Me</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#portfolio">Portfolio</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#contact">Contact</a>
						</li>
					</ul>
				</div>
			</nav>
		</header>
		<div class="container-fluid text-center">
			<div class="row">
				<div class="col-md">
			<h2 id="about">About Me</h2>
				</div>
			</div>
		</div>
		<div class="container-fluid text-center">
			<div class="row">
				<div class="col-md">
			<p>This area will be all about me!</p>
			</div>
		</div>
		</div>
		<div class="container-fluid text-center">
			<div class="row">
				<div class="col-md">
					<h2 id="portfolio">Portfolio</h2>
				</div>
			</div>
		</div>
		<div class="container-fluid text-center">
		<div id="carousel" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="d-block w-100" src="tree.jpg" alt="First slide">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="http://placekitten.com/250/200" alt="Second slide">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="http://placekitten.com/280/200" alt="Third slide">
				</div>
			</div>
			<a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4 text-center">
					<h2 id="contact">Contact</h2>
				</div>
			<form class="col-md-6 ml-auto mt-2">
				<div class="form-group">
					<div class="col-md-8">
						<input type="text" class="form-control" placeholder="Name" required>
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-8">
						<input type="email" class="form-control" id="inputEmail" placeholder="Email" required>
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-8">
						<input type="text" class="form-control" placeholder="Subject" required>
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-8">
						<textarea class="form-control" placeholder="Message" rows="4" required></textarea>
					</div>
				</div>
				<div class="text-right col-md-8">
				<button class="btn btn-primary" type="submit">Submit</button>
				</div>
			</form>
		</div>
			<footer class="container-fluid">
				<div class="row">
					<div class="col-md text-center">
					<p>&copy; Adel Moreno 2018</p>
					</div>
				</div>
			</footer>
	</body>