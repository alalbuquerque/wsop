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
      <div class="pro"><a href="http://www.pronegocio.com.br/" target="_blank">ProNégocio</a></div>
		</footer>

            <div class="mosca active"><div class="close"></div><span class="position"><marquee>Mínimo garantido Brazilian Storm - R$ 1.000.000,00 <span id="segundos2" style="display: none;">3.501.629,44</span></marquee></span></div>
      <script type="text/javascript">

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

 


       $('.parallax-mirror').parallax();


    var curOffset, oldOffset;
    oldOffset = $(window).scrollTop();
    var $el = $('.parallax-mirror'); // cache jquery ref

    setInterval(function() {
      curOffset = $(window).scrollTop();

      if(curOffset >= 1100) {

      if($el.hasClass('parallax-mirror')) $el.addClass('parallax2');

      } else {
        // they've stopped, add the class if it doesn't exist
        if($el.hasClass('parallax-mirror')) $el.removeClass('parallax2');
      }
      oldOffset = curOffset;
    }, 5);


       
       $(function() {
        $('a[href*="#"]:not([href="#"])').click(function() {
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
              $('html, body').animate({
                scrollTop: target.offset().top
              }, 1000);
              return false;
            }
          }
        });
      });

      $(".link-news").click(function () {
          var tabContentId = $(this).attr("href");
          var position = $(this).offset();

          if ($(tabContentId).hasClass('active')) {
            $(tabContentId).removeClass('active');
            $(this).removeClass('active');
          } else {
            event.preventDefault();
            $(tabContentId).addClass('active');
            $(this).addClass('active');
          } 
      });

       $('.mosca .close').click(function (e){
                  //e.preventDefault();
                  if($('.mosca').hasClass('active')) {
                        $('.mosca').removeClass('active');
                  } else {
                        e.preventDefault();
                        $('.mosca').addClass('active');
                  }
       });
 <?php
      $antes = strtotime('27-09-2016 18:00:00');
      $depois = strtotime(date("d-m-Y H:i:s"));
      $diferenca = ($depois - $antes);
      $valor_inicial = 350000000 + $diferenca;
      ?>
      /*setInterval(conta, 1000);
      setInterval(conta2, 1000);

      function conta(){
            if(document.getElementById('segundos').innerHTML == "")
                  document.getElementById('segundos').innerHTML = "<?php print $valor_inicial ?>";
            var valor_atual = document.getElementById('segundos').innerHTML;
            valor_atual = valor_atual.replace(",", "").replace(".", "").replace(".", "").replace(".", "");
            var resultado = parseInt(valor_atual) + 1;
            document.getElementById('segundos').innerHTML = formatReal(resultado);
      }

      function conta2(){
            if(document.getElementById('segundos2').innerHTML == "")
                  document.getElementById('segundos2').innerHTML = "<?php print $valor_inicial ?>";
            var valor_atual = document.getElementById('segundos2').innerHTML;
            valor_atual = valor_atual.replace(",", "").replace(".", "").replace(".", "").replace(".", "");
            var resultado = parseInt(valor_atual) + 1;
            document.getElementById('segundos2').innerHTML = formatReal(resultado);
      }
*/
      function formatReal( int )
      {
            var tmp = int+'';
            tmp = tmp.replace(/([0-9]{2})$/g, ",$1");
            if( tmp.length > 6 )
                  tmp = tmp.replace(/([0-9]{3}),([0-9]{2}$)/g, ".$1,$2");
            if( tmp.length > 9 )  
                  tmp = tmp.replace(/([0-9]{3}).([0-9]{3}),([0-9]{2})$/g,'.$1.$2,$3');
            return tmp;
      }


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


      var count = 1000;
      var clientID = "b27abde1a5c64d04b2567d6163b042ab";
      var accessToken = "3656932907.1677ed0.4594811caf184eb09901450260cb4721";

      var jsonpURL = "https://api.instagram.com/v1/users/self/media/recent?client_id=" + clientID + "&access_token=" + accessToken + "&callback=listImages&count=" + count;

      var script = document.createElement('script');
      script.type = 'text/javascript';
      script.src = jsonpURL;
      var head = document.getElementsByTagName("head")[0];
      head.appendChild(script);

      function listImages(response) {
        var i, item, len, images;
        images = '';
        if (response.data.length > 0) {
          var entries = response.data;
          var wrapper = document.getElementById('instagram-wrapper');
          var wrapper2 = document.getElementById('instagram-wrapper2');
          for (i = 0, len = entries.length; i < len; i++) {
            item = entries[i];
            if(item.type == 'video'){
              images += '<li class="video"><a href="' + item.link + '" target="_blank"><video muted src="' + item.videos.low_bandwidth.url + '" onmouseenter="this.play()" onmouseleave="this.pause()"></video></a></li>';
            }else {
              images += '<li class="image"><a href="' + item.link + '" target="_blank"><img src="' + item.images.standard_resolution.url + '"></a></li>';
            }
          }
          wrapper.innerHTML = images;
          wrapper2.innerHTML = images;
        }
      }



      </script>
      <link rel="icon" href="images/favicon/favicon.ico" type="image/x-icon"/>