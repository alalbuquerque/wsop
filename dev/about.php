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
	        	<a href="#"><img src="dist/images/logo.png" class="logo" alt="WSOP Circut" role="logo"></a>
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
							<li><a href="#" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
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
					<li><a href="#"><img src="dist/images/logo.png" class="logo" alt="WSOP Circut" role="logo"></a></li>
					<li><a href="gallery.php">Galeria</a></li>
					<li><a href="news.php">News</a></li>
					<li><a href="results.php">Resultados</a></li>
					<li><a href="contact.php">Contato</a></li>
					<li class="box-social">
						<ul class="social">
							<li><a href="#" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						</ul>
					</li>
				</ul>
			</nav>
		</header>
		<section class="content">
			<section class="inner-content">
				<article class="about">
					<section class="list">
						<h2>Sobre o WSOP</h2>
						<section class="content">
							<p>O mais famoso e renomado campeonato de poker do mundo chega ao Brasil pela primeira vez direto de Las Vegas, EUA. Uma Joint Venture entre LiveBox e Move, trazem o “World Series of Poker” (WSOP) para sua 1ª edição em terras brasileiras. O evento corresponde à maior série de Poker existente, sendo considerada a Copa do Mundo da modalidade.</p>
							<p>O <strong>WSOP Brazil Circuit 2016</strong> acontecerá na cidade de <strong>São Paulo</strong>, no Transamerica Expo Center dentro do Pavilhão F, dos dias 26/10 a 02/11. A edição segue os padrões americanos tanto de estrutura quanto de organização, como as grades de torneios, dinâmica e prêmios. “Estamos muito confiantes de que o WSOP Brazil será um sucesso e vamos garantir que seja o melhor evento de poker já realizado na América do Sul”, Beto Lima representante oficial do WSOP Brazil.</p>
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