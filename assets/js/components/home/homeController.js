(function (MEGAMAZON, $) {
    //////////////////////////
    //   HOME CONTROLLER    //
    //////////////////////////
    'use strict';
    WSOP.controller('HomeController', ['$interval', 'appConfig', function ($interval, appConfig) {
        var self = this;
        self.fixedBar = {
            opened: false,
            openToggle: function () {
                if (this.opened) {
                    this.opened = false;
                } else {
                    this.opened = true;
                }
            }
        };
        ///////////
        // MENU  //
        ///////////
        
        $('.menu-btn').click(function (e) {
            console.log(this)
        });


        self.menu = {
            opened: false,
            openToggle: function () {
                if (this.opened) {
                    this.opened = false;
                } else {
                    this.opened = true;
                    $('a').click(function (e) {
                        $('.menu-btn').removeClass('opened');
                        $('.menu-btn__bar').removeClass('opened');
                        $('.menu').addClass('ng-hide');
                    });
                }
            }
        };
        //NAVIGATION
        $('a.scrollTo').click(function (e) {
            e.preventDefault();
            //var w_width = $window.innerWidth;
            //var marginTop = 65;
            //if (w_width >= 768) {
            //    marginTop = 66;
            //}
            //if (w_width >= 992) {
            //    marginTop = 66;
            //}
            //if (w_width >= 1200) {
            //    marginTop = 66;
            //}
            var section = $($(this).data('section'));
            var topo = section.offset().top;
            if (section.data('offset') !== undefined) {
                topo = topo - section.data('offset');
            }
            $('html, body').stop().animate({
                scrollTop: topo
            }, 800);
        });
    }]);
}(this.WSOP, this.jQuery));