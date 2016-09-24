<!DOCTYPE html>
<html lang="en" data-ng-app="Wsop">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<title>WSOP Brazil</title>
	<link rel="stylesheet" type="text/css" href="dist/css/app.css">
	<script type="text/javascript" src="dist/js/app.js"></script>
</head>
<body data-ng-controller="HomeController as mainCtrl">
	<main>
		<header>
			<div class="logo mobile-hidden">
	        	<a href="#"><img src="dist/images/logo.png" class="logo" alt="WSOP Circut" role="logo"></a>
	        </div>
	        <div class="menu-mobile mobile-hidden ng-cloak" data-ng-show="mainCtrl.menu.opened">
	          <ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">Sobre</a></li>
					<li><a href="diary.php">Agenda</a></li>
					<li><a href="satellites.php">Satélites</a></li>
					<li><a href="gallery.php">Galeria</a></li>
					<li><a href="news.php">News</a></li>
					<li><a href="results.php">Resultados</a></li>
					<li><a href="contact.php">Contato</a></li>                
	          </ul>
	        </div>
	        <div class="menu-btn mobile-hidden">
	          <div class="menu-btn__bar" data-ng-class="{opened: mainCtrl.menu.opened}"></div>
	          <div class="menu-btn__bar" data-ng-class="{opened: mainCtrl.menu.opened}"></div>
	          <div class="menu-btn__bar" data-ng-class="{opened: mainCtrl.menu.opened}"></div>
	        </div><!-- menu btn --> 
			<nav role="menu" class="desktop-hidden">
				<ul class="menu">
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">Sobre</a></li>
					<li><a href="diary.php">Agenda</a></li>
					<li><a href="satellites.php">Satélites</a></li>
					<li><a href="#"><img src="dist/images/logo.png" class="logo" alt="WSOP Circut" role="logo"></a></li>
					<li><a href="gallery.php">Galeria</a></li>
					<li><a href="news.php">News</a></li>
					<li><a href="results.php">Resultados</a></li>
					<li><a href="contact.php" class="active">Contato</a></li>
				</ul>
				<ul class="social">
					<li><a href="#" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					<li><a href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				</ul>
			</nav>
		</header>
		<section class="content">
			<section class="inner-content">
				<article class="contact">
					<section class="list">
					<section class="form">
						<h2>Contato</h2>
						<div class="group">
							<div class="item"><input type="radio" name="type" value="contact" checked> Fale conosco</div>
							<div class="item"><input type="radio" name="type" value="female"> Quero ser dealer</div>
							<div class="item"><input type="radio" name="type" value="other"> Quero ser satélite</div>
						</div>
						<form name="contact">
							<div class="group">
								<div class="item"><input type="text" name="name" placeholder="Nome"></div>
								<div class="item"><input type="email" name="email" placeholder="E-mail"></div>
								<div class="item"><input type="tel" name="tel" placeholder="Telefone"></div>
							</div>
							<div class="group">
								<div class="item"><input type="text" name="subject" placeholder="Assunto"></div>
							</div>
							<div class="group">
								<div class="item"><textarea placeholder="Mensagem"></textarea></div>
							</div>
							<div class="group submit">
								<div class="item"><input type="submit" name="submit" value="Enviar"></div>
							</div>
						</form>
					</section>
					<section class="press-office">
						<h3>Assessoria de imprensa</h3>
						<h4>Natalia Medeiros</h4>
						<p>nmedeiros@blays.com.br</p>
					</section>
					</section>
				</article>
			</section>
			<?php include 'includes/results-news.php'; ?>
			<?php include 'includes/gallery.php'; ?>
			</section>
		</section>
		<?php include 'includes/footer.php'; ?>
	<main>
</body>
</html>