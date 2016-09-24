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
					<li><a href="diary.php" class="active">Agenda</a></li>
					<li><a href="satellites.php">Satélites</a></li>
					<li><a href="#"><img src="dist/images/logo.png" class="logo" alt="WSOP Circut" role="logo"></a></li>
					<li><a href="gallery.php">Galeria</a></li>
					<li><a href="news.php">News</a></li>
					<li><a href="results.php">Resultados</a></li>
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
				<article class="dairy">
					<section class="list">
					<h2>Agenda</h2>
						<section class="item">
							<div class="date"><span>04</span> Ago, 15</div>
							<div class="content">
								<a href="#">
									<h3>Lorem ipsum dolor sit amet </h3>
									<p>Mauris at pretium arcu. Aenean mollis rutrum nunc, vel sagittis enim porttitor sed. Proin nec aliquam dolor, ut consectetur elit.</p>
								</a>
							</div>
							<a href="#" class="plus">Mais</a>
						</section>
						<section class="item">
							<div class="date"><span>04</span> Ago, 15</div>
							<div class="content">
								<a href="#">
									<h3>Lorem ipsum dolor sit amet </h3>
									<p>Mauris at pretium arcu. Aenean mollis rutrum nunc, vel sagittis enim porttitor sed. Proin nec aliquam dolor, ut consectetur elit.</p>
								</a>
							</div>
							<a href="#" class="plus">Mais</a>
						</section>
						<section class="item">
							<div class="date"><span>04</span> Ago, 15</div>
							<div class="content">
								<a href="#">
									<h3>Lorem ipsum dolor sit amet </h3>
									<p>Mauris at pretium arcu. Aenean mollis rutrum nunc, vel sagittis enim porttitor sed. Proin nec aliquam dolor, ut consectetur elit.</p>
								</a>
							</div>
							<a href="#" class="plus">Mais</a>
						</section>
						<a href="#" class="button2">Ver mais eventos</a>
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