<!DOCTYPE html>
<html lang="en">
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
<body>
	<main>
	<header>
			<div class="logo mobile-hidden">
	        	<a href="index.php"><img src="dist/images/logo.png" class="logo" alt="WSOP Circut" role="logo"></a>
	        </div>
	        <div class="menu-mobile mobile-hidden ng-cloak">
	          <ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">Sobre</a></li>
					<li><a href="diary.php">Agenda</a></li>
					<li><a href="satellites.php">Satélites</a></li>
					<li><a href="gallery.php">Galeria</a></li>
					<li><a href="news.php">News</a></li>
					<li><a href="results.php">Resultados</a></li>
					<li><a href="contact.php">Contato</a></li>   
					<li class="box-social">
						<ul class="social">
							<li><a href="https://www.instagram.com/wsopbrazil/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="https://www.facebook.com/wsopbrazil/?fref=ts" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						</ul>
					</li>             
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
					<li><a href="index.php"><img src="dist/images/logo.png" class="logo" alt="WSOP Circut" role="logo"></a></li>
					<li><a href="gallery.php">Galeria</a></li>
					<li><a href="news.php">News</a></li>
					<li><a href="results.php">Resultados</a></li>
					<li><a href="contact.php">Contato</a></li>
					<li class="box-social">
						<ul class="social">
							<li><a href="https://www.instagram.com/wsopbrazil/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="https://www.facebook.com/wsopbrazil/?fref=ts" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						</ul>
					</li>
				</ul>
			</nav>
		</header>
		<section class="content">
			<section class="inner-content">
				<div class="title2"><h2>Galeria</h2></div>
				<article class="gallery">
					<section class="list">
						<ul id="instagram-wrapper2"></ul>
					</section>
				</article>
			</section>
			<section class="results-news">
				<?php include 'includes/dairy.php'; ?>
				<?php include 'includes/results.php'; ?>
				<?php include 'includes/news.php'; ?>
				<section class="poker-chip"></section>
			</section>
			<?php include 'includes/gallery.php'; ?>
			</section>
		</section>
		<?php include 'includes/footer.php'; ?>
	<main>

</body>
</html>