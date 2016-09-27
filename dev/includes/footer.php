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
                              <li><div class="image"><img src="dist/images/copag.png" width="100%"></div></li>
				</ul>
			</section>
			<ul class="social-footer">
                        <li><a href="https://www.instagram.com/wsopbrazil/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.facebook.com/wsopbrazil/?fref=ts" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
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

       $('.container1').click(function (e){
       		//e.preventDefault();
       		if($(this).hasClass('active')) {
       			$(this).removeClass('active');
       		} else {
       			e.preventDefault();
       			$(this).addClass('active');
       		}
       });
       $('.parallax').parallax({
       	
		    naturalWidth: 600,
		    naturalHeight: 400
       });

       $('input[name="type"]').click(function (e) {
       		if($( "input:checked" ).val() === '1') {
       			$('.form1').addClass('active');
       			$('.form2').removeClass('active');
       			$('.form3').removeClass('active');

       		} 
       		else if ($( "input:checked" ).val() === '2') {
       			$('.form2').addClass('active');
       			$('.form1').removeClass('active');
       			$('.form3').removeClass('active');
       		} else {
       			$('.form3').addClass('active');
       			$('.form2').removeClass('active');
       			$('.form1').removeClass('active');
       		}
       });
      </script>