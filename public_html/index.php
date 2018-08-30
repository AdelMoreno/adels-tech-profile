<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width-device-width, initial-scale=1, shrink-to-fit=no">

		<!--bootstrap and custome css-->
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
		<link href="styles.css" rel="stylesheet" type="text/css">

		<!--popper and bootstrap js-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></head>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha256-98vAGjEDGN79TjHkYWVD4s87rvWkdWLHPs5MC3FvFX4=" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

		<!--google recaptcha-->
		<script src="https://www.google.com/recaptcha/api.js" async defer></script>

		<!--jquery form, validate, additional methods-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js" integrity="sha256-2Pjr1OlpZMY6qesJM68t2v39t+lMLvxwpa8QlRjJroA=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js" integrity="sha256-F6h55Qw6sweK+t7SiOJX+2bpSAa3b/fnlrVCJvmEj1A=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js" integrity="sha256-0Yg/eibVdKyxkuVo1Qwh0DspoUCHvSbm/oOoYVz32BQ=" crossorigin="anonymous"></script>

		<script src="../js/form-validate.js"></script>

		<title>Adel's Tech Profile</title>
	</head>
	<body>
		<header class="container-fluid" id="home">
			<div class="row text-center">
				<div class="col-md-2">
					<img class="img-fluid ml-auto p-4" src="img_adel.jpg" alt="picture of Adel">
				</div>
				<div class="header-text col-md-3 align-self-center">
					<p>Adel Moreno</p>
				</div>
				<div class="header-text col-md-7 align-self-center">
					<p>Web Developer</p>
				</div>
			</div>
			<nav class="navbar navbar-expand-md navbar-dark navbar-custom">
				<a class="navbar-brand" href="#"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarToggler">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link" href="#home">Home  <span> |</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#about">About Me |</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#portfolio">Portfolio |</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#contact">Contact |</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="adel_moreno_resume.pdf" target="_blank">Resume</a>
						</li>
					</ul>
				</div>
			</nav>
		</header>
		<div class="container-fluid text-center about-me mt-4 pb-5">
			<div class="row">
				<div class="col-md">
			<h2 class="section-text" id="about">About Me</h2><br>
					<p>this area will be about me!</p>
				</div>
			</div>
		</div>
		<div class="container-fluid text-center portfolio">
			<div class="row">
				<div class="col-md">
					<h2 class="section-text" id="portfolio">Portfolio</h2>
				</div>
			</div>
		</div>
		<div class="container-fluid smaller text-center portfolio mb-5">
		<div id="carousel" class="carousel slide" data-ride="carousel" data-pause="hover">
			<ol class="carousel-indicators">
				<li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselIndicators" data-slide-to="1"></li>
				<li data-target="#carouselIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="d-block w-100" src="http://placekitten.com/300/200" alt="First slide">
					<div class="carousel-caption d-none d-md-block">
						<h3>First Label</h3>
					</div>
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="http://placekitten.com/250/200" alt="Second slide">
					<div class="carousel-caption d-none d-md-block">
						<h3>Second Label</h3>
					</div>
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="http://placekitten.com/280/200" alt="Third slide">
					<div class="carousel-caption d-none d-md-block">
						<h3>Third Label</h3>
					</div>
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
					<h2 class="section-text" id="contact">Contact</h2>
					<i class="fab fa-github-alt fa-spin fa-2x mt-2 mr-1" data-fa-transform="flip-v"></i>
					<a class="contact-links" href="https://github.com/AdelMoreno">Github</a><br>
					<i class="fab fa-linkedin fa-spin fa-2x mt-4 mr-2"></i>
					<a class="contact-links" href="https://www.linkedin.com/in/adel-moreno-129474165/">LinkedIn</a><br>
					<i class="fab fa-twitter-square fa-spin fa-2x mt-4 mb-3 mr-2"></i>
					<a class="contact-links" href="https://twitter.com/AdelMoreno5">Twitter</a>
				</div>
			<form id="contact-form" method="post" action="../php/mailer.php" class="col-md-5 ml-auto mt-2">
				<div class="form-group">
					<div class="input-group">
						<div class="col-md-10">
							<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user-circle"></i></span>
						<input type="text" class="form-control" placeholder="Name" required>
							</div>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="input-group">
						<div class="col-md-10">
							<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-envelope"></i></span>
						<input type="email" class="form-control" id="inputEmail" placeholder="Email" required>
							</div>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="input-group">
						<div class="col-md-10">
							<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-info-circle"></i></span>
						<input type="text" class="form-control" placeholder="Subject" required>
							</div>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="input-group">
					<div class="col-md-10">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-comments"></i></span>
						<textarea class="form-control" placeholder="Message" rows="4" required></textarea>
						</div>
					</div>
					</div>
				</div>
				<div class="recaptcha ml-auto mr-auto col-md-7">
					<div class="g-recaptcha" data-sitekey="6LcAYG0UAAAAANFKl0A9s0giNlkVMhDoEM2FG-cH"></div>
					</div>
				</div>
				<div class="text-right mt-3 col-md-10">
				<button class="btn btn-primary" type="submit">Submit</button>
				</div>
			</form>
		</div>
		</div>
			<footer class="container-fluid pt-3 mt-4">
				<div class="row pb-3">
					<div class="col-md text-center">
						<i class="far fa-copyright"></i>
					<span> Adel Moreno 2018</span>
					</div>
				</div>
			</footer>
	</body>