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
					<li><a href="gallery.php" class="active">Galeria</a></li>
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
				<article class="gallery">
					<section class="list">
					<h2>Galeria</h2>
						<ul>
							<li class="item"><img src="dist/images/gallery/image1.png" alt=""></li>
							<li class="item"><img src="dist/images/gallery/image2.png" alt=""></li>
							<li class="item"><img src="dist/images/gallery/image3.png" alt=""></li>
							<li class="item"><img src="dist/images/gallery/image4.png" alt=""></li>
							<li class="item"><img src="dist/images/gallery/image5.png" alt=""></li>
							<li class="item"><img src="dist/images/gallery/image6.png" alt=""></li>
							<li class="item"><img src="dist/images/gallery/image7.png" alt=""></li>
							<li class="item"><img src="dist/images/gallery/image8.png" alt=""></li>
							<li class="item"><img src="dist/images/gallery/image9.png" alt=""></li>
							<li class="item"><img src="dist/images/gallery/image10.png" alt=""></li>
							<li class="item"><img src="dist/images/gallery/image11.png" alt=""></li>
							<li class="item"><img src="dist/images/gallery/image12.png" alt=""></li>
							<li class="item"><img src="dist/images/gallery/image13.png" alt=""></li>
							<li class="item"><img src="dist/images/gallery/image14.png" alt=""></li>
							<li class="item"><img src="dist/images/gallery/image15.png" alt=""></li>
							<li class="item"><img src="dist/images/gallery/image16.png" alt=""></li>
							<li class="item"><img src="dist/images/gallery/image17.png" alt=""></li>
							<li class="item"><img src="dist/images/gallery/image18.png" alt=""></li>
							<li class="item"><img src="dist/images/gallery/image19.png" alt=""></li>
							<li class="item"><img src="dist/images/gallery/image20.png" alt=""></li>
						</ul>	
					</section>
				</article>
			</section>
			<?php include 'includes/results-news.php'; ?>
			<?php include 'includes/gallery.php'; ?>
			</section>
		</section>
		<?php include 'includes/footer.php'; ?>
	<main>
	<script type="text/javascript">
		var token = '', // learn how to obtain it below
	    userid = 3656932907, // User ID - get it in source HTML of your Instagram profile or look at the next example :)
	    num_photos = 10; // how much photos do you want to get
 
		$.ajax({
			url: 'https://api.instagram.com/v1/users/' + userid + '/media/recent', // or /users/self/media/recent for Sandbox
			dataType: 'jsonp',
			type: 'GET',
			data: {access_token: token, count: num_photos},
			success: function(data){
		 		console.log(data);
				for( x in data.data ){
					$('ul').append('<li><img src="'+data.data[x].images.low_resolution.url+'"></li>'); // data.data[x].images.low_resolution.url - URL of image, 306х306
					// data.data[x].images.thumbnail.url - URL of image 150х150
					// data.data[x].images.standard_resolution.url - URL of image 612х612
					// data.data[x].link - Instagram post URL 
				}
			},
			error: function(data){
				console.log(data); // send the error notifications to console
			}
		});
	</script>
</body>
</html>