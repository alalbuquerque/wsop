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
					<li><a href="diary.php">Grade</a></li>
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
					<li><a href="diary.php">Grade</a></li>
					<li><a href="satellites.php">Satélites</a></li>
					<li><a href="gallery.php">Galeria</a></li>
					<li><a href="#"><img src="dist/images/logo.png" class="logo" alt="WSOP Circut" role="logo"></a></li>
					<li><a href="news.php">News</a></li>
					<li><a href="results.php">Resultados</a></li>
					<li><a href="contact.php">Contato</a></li>
					<li>
						<ul class="social">
							<li><a href="https://www.instagram.com/wsopbrazil/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="https://www.facebook.com/wsopbrazil/?fref=ts" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						</ul>
					</li>
					<li><a href="#"><img src="dist/images/888poker-mini.png" class="logo-mini" alt="888 Poker" role="logo"></a></li>
				</ul>
			</nav>
		</header>
		<section class="content">
			<section class="inner-content">
				<div class="title2"><h2>Contato</h2></div>
				<article class="contact">
					<section class="list">
						<section class="form">
							
							<div class="group show-label">
								<div class="item"><input type="radio" name="type" id="type1" value="1" checked><label for="type1"> Fale conosco</label></div>
								<div class="item"><input type="radio" name="type" id="type2"  value="2"><label for="type2">Quero ser dealer</label></div>
								<div class="item"><input type="radio" name="type" id="type3"  value="3"><label for="type3"> Quero ser satélite</label></div>
							</div>
							<form name="contact" class="form-type form1 active">
								<h2>Contato</h2>
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
							<form action="dealersender.php" name="dealer" class="form-type form2" method="post" enctype="multipart/form-data">
								<h2>Quero ser dealer</h2>
								<div class="group">
									<div class="item"><input type="text" class="form-control" name="nome" id="nome" placeholder="Nome:" required></div>
								</div>
								<div class="group">
									<div class="item"><input type="text" class="form-control midLeft" name="rg" id="rg" placeholder="RG:" required></div>
									<div class="item"><input type="text" class="form-control midRight" name="cpf" id="cpf" placeholder="CPF:" required></div>
								</div>
								<div class="group">
									<div class="item"><input type="text" class="form-control" name="endereco" id="endereco" placeholder="Endereço (Rua/Número/Bairro):" required></div>
									<div class="item"><input type="text" class="form-control midLeft" name="cidade" id="cidade" placeholder="Cidade:" required></div>
									<div class="item"><input type="text" class="form-control midRight" name="estado" id="estado" placeholder="Estado:" required></div>
								</div>
								<div class="group">
									<div class="item"><input type="text" class="form-control" name="tempodealer" id="tempodealer" placeholder="Há quanto tempo você trabalha como Dealer?" required></div>
								</div>
								<div class="group">
									<div class="item"><textarea name="modalidades" id="modalidades" class="form-control" cols="20" rows="5" placeholder="Quais modalidades de Poker você é especialista? Descreva." required></textarea></div>
								</div>
								<div class="group">
									<div class="item"><input type="text" class="form-control" name="ondetrabalhou" id="ondetrabalhou" placeholder="Onde você já trabalhou como Dealer?" required></div>
									<div class="item"><input type="text" class="form-control" name="falaingles" id="falaingles" placeholder="Você fala inglês / espanhol?" required></div>
									<div class="item"><input type="tel" name="telefone" class="form-control" id="telefone" placeholder="Telefone / WhatsApp:" required></div>
									<div class="item"><input type="email" name="email" class="form-control" id="email" placeholder="Email para contato:" required></div>
								</div>
								<div class="group">
									<div class="item"><textarea name="observacoes" id="observacoes" class="form-control" cols="20" rows="5" placeholder="Observações finais:" required></textarea></div>
								</div>
								<div class="group">
									<div class="item"><p for=""><strong>Anexar Imagem:</strong></p><input type="file" name="fileUpload" id="fileUpload" value="Anexar foto" required></div>
								</div>
								<div class="group submit">
									<div class="item"><input type="submit" name="submit" value="Enviar" class="btn-submitDealer"></div>
								</div>
							</form>
						</form>
						<form name="satellites" class="form-type form3">
							<p>Para cadastrar o seu satélite clique aqui no link abaixo</p>
							<a href="http://bit.ly/QueroSerSateliteWSOPBR2016" target="_blank">Cadastre aqui</a>
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