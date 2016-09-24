		<footer>
			<div class="logo-footer"></div>
			<ul class="menu-footer">
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">Sobre</a></li>
					<li><a href="diary.php">Agenda</a></li>
					<li><a href="satellites.php">Satélites</a></li>
					<li><a href="gallery.php">Galeria</a></li>
					<li><a href="news.php">News</a></li>
					<li><a href="results.php">Resultados</a></li>
					<li><a href="contact.php">Contato</a></li>
			</ul>
			<section class="principal-partner">
				<h3>Patrocinador Oficial</h3>
				<div class="image"><img src="dist/images/888poker.png" width="100%"></div>
			</section>
			<section class="partner">
				<h3>Apoio</h3>
				<ul>
					<li><div class="image"><img src="dist/images/logoreal.png" width="100%"></div></li>
				</ul>
			</section>
			<ul class="social-footer">
				<li><a href="#" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
				<li><a href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
			</ul>
		</footer>

      <script type="text/javascript">

      	var local = window.location.pathname;
      	localStorage.setItem('valuePot','1.000.000,00');

       $('.menu-btn').click(function (e) {
       		if ($(this).hasClass('opened')) {
	            $(this).removeClass('opened');
	            $('.menu-btn__bar').removeClass('opened');
	            $('.menu-mobile').addClass('ng-cloak');
	            $('.ng-cloak').removeClass('opened');
       		} else {
	            $(this).addClass('opened');
	            $('.menu-btn__bar').addClass('opened');
	            $('.ng-cloak').removeClass('ng-cloak').addClass('opened');
       		}
        });
       $('.parallax').parallax({
       	
		    naturalWidth: 600,
		    naturalHeight: 400
       });
      </script>