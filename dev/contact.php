
		<?php include 'includes/header.php'; ?>
		<section class="content">
			<section class="inner-content">
				<article class="contact">
					<h2>Contato</h2>
					<section class="form">
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