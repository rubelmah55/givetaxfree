
(function($) {
    "use strict";

    $(document).ready( function() {


        // Sticky Menu
        $(window).scroll(function() {
            var Width = $(document).width();

            if ($("body").scrollTop() > 10 || $("html").scrollTop() > 10) {
                if (Width > 767) {
                    $("header").addClass("sticky");
                } else if(Width < 767) {
                    $("header").addClass("hide");
                }
            } else {
                $("header").removeClass("sticky");
            }
        });

         /*** Mobile Menu */
        $('#hamburger').on('click', function() {            
            $('.mobile-nav').addClass('show');
            $('.overlay').addClass('active');
        });

        $('.close-nav').on('click', function() {            
            $('.mobile-nav').removeClass('show');            
            $('.overlay').removeClass('active');          
        });

        $(".overlay").on("click", function () {
            $(".mobile-nav").removeClass("show");
            $('.overlay').removeClass('active');
        });

        $("#mobile-menu").metisMenu();


        $('.single_slider').slick({
            arrows: false,
            infinite: true,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 3,
            responsive: [
              {
                breakpoint: 1024,
                settings: {
                  slidesToShow: 2,
                  slidesToScroll: 2,
                  infinite: true,
                  dots: false
                }
              },
              {
                breakpoint: 600,
                settings: {
                  slidesToShow: 2,
                  slidesToScroll: 2
                }
              },
              {
                breakpoint: 480,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1
                }
              }
            ]
          });

        AOS.init({
            disable: function () {
            var maxWidth = 768;
            return window.innerWidth < maxWidth;
          }});

        /*** Search bar */
        // $('.header-search').on('click', '.search-toggle', function(e) {
        //     e.preventDefault();
        //     var selector = $(this).data('selector');
        //     $(selector).toggleClass('show').find('.search-input').focus();
        // });

        const serce_bar = document.querySelector('.overlay-hugeinc');
        const search_bar = document.querySelector('.search_bar');
        const overlay_close = document.querySelector('.overlay-close');

        $(".login_btn").click(function(){
            $(".drop").toggle();
        });
        
        search_bar.addEventListener('click', () => {
            serce_bar.classList.add('open');
        });

        overlay_close.addEventListener('click', () => {
            serce_bar.classList.remove('open');
        });


        // popup image
        $('.img-popup').magnificPopup({
            delegate: 'a',
            type: 'image',
            closeOnContentClick: true, 
            closeOnBgClick: true,
            showCloseBtn: true,
            closeBtnInside: true,
        
        });
        
    }); // end document ready function


})(jQuery); // End jQuery
