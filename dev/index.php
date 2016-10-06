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
      <link rel="icon" href="dist/images/favicon/favicon.ico" type="image/x-icon"/>
	<script type="text/javascript" src="dist/js/app.js"></script>
</head>
<body class="home">
	<main>
		<section class="top">
			<div id="carousel-id" class="carousel slide" data-ride="carousel">
				<?php include 'includes/header-home.php'; ?>
				<div class="carousel-inner">
					<div class="item fadeInLeft active" style="background-image: url('dist/images/banner.jpg')">
							<div class="carousel-caption">
								<div class="left">
									<h2>próximo evento</h2>
									<p>WSOP São Paulo</p>
									<a href="diary">Participe</a>
								</div>
								<div class="right">
									<h1>wsop <span>São Paulo</span> / Brazil</h1>
								</div>
						</div>
					</div>
					<a href="#scrolldown" class="scrolldown">Scroll Down <div> <i class="fa fa-angle-down" aria-hidden="true"></i></div></a>
				</div>
			</div>
		</section>
		<section class="content" id="scrolldown">
			<section class="top-content">
				<div class="box">
					<h3>o maior evento de poker do mundo, agora no brasil.</h3>
					<p>Prepare-se... A Copa do Mundo de Poker chegou ao Brasil
O mais famoso e renomado campeonato de poker do mundo chega ao Brasil pela primeira vez direto de Las Vegas, EUA. Uma Joint Venture entre LiveBox e Move, trazem o “World Series of Poker” (WSOP) para sua 1ª edição em terras brasileiras. O evento corresponde à maior série de Poker existente, sendo considerada a Copa do Mundo da modalidade.</p>
					<a href="about">Veja mais</a>
				</div>
				<div class="box2">
					<h4 class="title">Mínimo garantido Main Event:</h4>
					<div class="cicloNumbers">
						<span class="cifra">R$</span>
						<span class="ciclo">$.$$$.$$$,$$</span>
					</div>
					<h4 class="title">Mínimo garantido Brazilian Storm:</h4>
					<div class="cicloNumbers">
						<span class="cifra">R$</span>
						<span id="segundos" style="display: none;">3.501.629,44</span>
						<span>1.000.000,00</span>
					</div>
				</div>
			</section>
			<section class="inner-content">
				<article>
					<section class="list list3">
					<h2>Próximo Satélite</h2>
						<div id="satellites" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">
									<div class="date"><span>ND</span> Ago, 15</div>
									<div class="content">
										<h3>Em breve...</h3>
										<p>Evento ainda não definido.</p>
									</div>
								</div>
							</div>
							<a class="right" href="#satellites" data-slide="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
						</div>
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

				<div class="parallax-mirror" data-parallax="scroll"  data-position="top" data-bleed="0"  data-z-index="99" data-end="1150" data-image-src="dist/images/carts.png"></div>
			</section>
		</section>
		<?php include 'includes/footer.php'; ?>
	</main>
</body>
</html>