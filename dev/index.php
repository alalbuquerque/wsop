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
<body class="home">
	<main>
		<section class="top">
			<div id="carousel-id" class="carousel slide" data-ride="carousel">
				<?php include 'includes/header-home.php'; ?>
				<ol class="carousel-indicators">
					<li data-target="#carousel-id" data-slide-to="0" class=""></li>
					<li data-target="#carousel-id" data-slide-to="2" class="active"></li>
				</ol>
				<div class="carousel-inner">
					<div class="item animated fadeInDown">
						<img alt="First slide" src="dist/images/banner.jpg">
						<div class="container">
							<div class="carousel-caption">
								<div class="left">
									<h2>próximo evento</h2>
									<p>Lorem ipsum dolor sit amet</p>
									<a href="#">Participe</a>
								</div>
								<div class="right">
									<h1>wsop <span>São Paulo</span> / Brazil</h1>
								</div>
							</div>
						</div>
					</div>
					<div class="item animated fadeInDown active">
						<img alt="First slide" src="dist/images/banner.jpg">
						<div class="container">
							<div class="carousel-caption">
								<div class="left">
									<h2>próximo evento</h2>
									<p>Lorem ipsum dolor sit amet</p>
									<a href="#">Participe</a>
								</div>
								<div class="right">
									<h1>wsop <span>São Paulo</span> / Brazil</h1>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="content">
			<section class="top-content">
				<div class="box">
					<h3>o  maior  evento  de  poker  do  mundo, agora  no  brasil.</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer volutpat bibendum mollis. Nulla non urna tincidunt, ullamcorper velit mollis, sollicitudin dui. Nulla et enim lectus. Nulla in quam at arcu pulvinar commodo. Duis eget massa quis sapien posuere fringilla vitae congue quam. Proin augue augue, cursus vitae semper eu, laoreet quis eros. Proin at elit nec arcu eleifend scelerisque. Pellentesque habitant morbi tristique .</p>
					<a href="#">Veja mais</a>
				</div>
			</section>
			<section class="inner-content">
				<article>
					<h2>Próximo Satélite</h2>
					<section class="list">
						<div id="satellites" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item">
									<div class="date"><span>04</span> Ago, 15</div>
									<h3>Lorem ipsum dolor sit amet </h3>
									<p>Mauris at pretium arcu. Aenean mollis rutrum nunc, vel sagittis enim porttitor sed. Proin nec aliquam dolor, ut consectetur elit.</p>
								</div>
								<div class="item">
									<div class="date"><span>04</span> Ago, 15</div>
									<h3>Lorem ipsum dolor sit amet </h3>
									<p>Mauris at pretium arcu. Aenean mollis rutrum nunc, vel sagittis enim porttitor sed. Proin nec aliquam dolor, ut consectetur elit.</p>
								</div>
								<div class="item active">
									<div class="date"><span>04</span> Ago, 15</div>
									<h3>Lorem ipsum dolor sit amet </h3>
									<p>Mauris at pretium arcu. Aenean mollis rutrum nunc, vel sagittis enim porttitor sed. Proin nec aliquam dolor, ut consectetur elit.</p>
								</div>
							</div>
							<a class="left" href="#satellites" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
							<a class="right" href="#satellites" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
						</div>
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