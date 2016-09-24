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
					<li><a href="news.php" class="active">News</a></li>
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
					<article>
					<section class="content">
					<h2>News</h2>
						<h3>Lorem ipsum dolor sit amet </h3>
						
						<p>Mauris at pretium arcu. Aenean mollis rutrum nunc, vel sagittis enim porttitor sed. Proin nec aliquam dolor, ut consectetur elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas varius quam a dui venenatis porta. Sed accumsan rutrum consequat. Integer non tristique nisl. Nam at nisl sed velit semper tempus ac id mi. Duis in hendrerit ligula. Cras viverra magna nec quam rhoncus convallis. Sed efficitur massa nisl. Integer justo dui, euismod tempus est eu, pharetra scelerisque eros. Mauris ullamcorper rhoncus ex, vel iaculis nunc efficitur in. Cras finibus est erat, nec faucibus quam tristique nec. Suspendisse vel magna dolor. Aliquam erat volutpat.</p>

						<P>Maecenas hendrerit porttitor metus pretium accumsan. Ut placerat dui et augue pulvinar, eu pharetra quam condimentum. Integer sed consectetur neque, quis scelerisque tellus. In ullamcorper tempor dapibus. Pellentesque lacinia quam justo, nec eleifend nibh fermentum a. Aliquam erat volutpat. Vivamus vitae eros nec neque blandit congue. Pellentesque semper quam eu ligula vestibulum, sit amet lacinia nisl auctor. Nulla volutpat nunc et metus tincidunt, a suscipit sem eleifend. Pellentesque dignissim mauris dui, quis eleifend enim sagittis ut. Donec eu efficitur metus. Cras ullamcorper elit lorem, vitae dapibus nunc rutrum in. Nunc at tincidunt elit, sit amet lacinia ex.</P>

						<p>Donec eget vestibulum lectus. Duis sit amet laoreet lacus. Aenean nec nibh justo. Donec at sem vel lectus dapibus consequat a eu lectus. Aenean et elementum risus. Nullam id elit nec magna posuere elementum. Sed sit amet elit vel ex auctor commodo ut in metus.</p>

						<p>Aliquam erat volutpat. Quisque porta, elit eu gravida ultrices, est diam tempor dolor, sit amet rhoncus orci lorem at nulla. Ut tincidunt malesuada eleifend. </p>
						</section>
					</article>
					<section class="list">
						<section class="item">
							<div class="date"><span>04</span> Ago, 15</div>
							<h3>Lorem ipsum dolor sit amet </h3>
							<p>Mauris at pretium arcu. Aenean mollis rutrum nunc, vel sagittis enim porttitor sed. Proin nec aliquam dolor, ut consectetur elit.</p>
						</section>
						<section class="item">
							<div class="date"><span>04</span> Ago, 15</div>
							<h3>Lorem ipsum dolor sit amet </h3>
							<p>Mauris at pretium arcu. Aenean mollis rutrum nunc, vel sagittis enim porttitor sed. Proin nec aliquam dolor, ut consectetur elit.</p>
						</section>
						<section class="item">
							<div class="date"><span>04</span> Ago, 15</div>
							<h3>Lorem ipsum dolor sit amet </h3>
							<p>Mauris at pretium arcu. Aenean mollis rutrum nunc, vel sagittis enim porttitor sed. Proin nec aliquam dolor, ut consectetur elit.</p>
						</section>
						<a href="#">Ver mais eventos</a>
					</section>
				</section>
			</section>
			<?php include 'includes/results-news.php'; ?>
			<?php include 'includes/gallery.php'; ?>
			</section>
		</section>
		<?php include 'includes/footer.php'; ?>
	<main>
</body>
</html>