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
					<li><a href="results.php" class="active">Resultados</a></li>
					<li><a href="contact.php">Contato</a></li>
				</ul>
				<ul class="social">
					<li><a href="#" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					<li><a href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				</ul>
			</nav>
		</header>
		<section class="content">
			<section class="inner-content">
				<article class="results">
					<section class="list">
					<h2>Resultados</h2>
						<section class="item">
							<div class="position">01</div>
							<p>Mauris at pretium arcu.</p>
							<div class="point">000</div>
						</section>
						<section class="item">
							<div class="position">02</div>
							<p>Mauris at pretium arcu.</p>
							<div class="point">000</div>
						</section>
						<section class="item">
							<div class="position">03</div>
							<p>Mauris at pretium arcu. </p>
							<div class="point">000</div>
						</section>
						<section class="item">
							<div class="position">04</div>
							<p>Mauris at pretium arcu. </p>
							<div class="point">000</div>
						</section>
						<section class="item">
							<div class="position">05</div>
							<p>Mauris at pretium arcu. </p>
							<div class="point">000</div>
						</section>
						<section class="item">
							<div class="position">06</div>
							<p>Mauris at pretium arcu. </p>
							<div class="point">000</div>
						</section>
						<section class="item">
							<div class="position">07</div>
							<p>Mauris at pretium arcu. </p>
							<div class="point">000</div>
						</section>
						<section class="item">
							<div class="position">08</div>
							<p>Mauris at pretium arcu. </p>
							<div class="point">000</div>
						</section>
						<a href="#" class="button2">Ver mais</a>
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