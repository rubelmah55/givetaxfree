
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

        AOS.init({
            disable: function () {
            var maxWidth = 768;
            return window.innerWidth < maxWidth;
        }});


        $('.image-popup-vertical-fit').magnificPopup({
            type: 'image',
          mainClass: 'mfp-with-zoom', 
          gallery:{
                    enabled:true
                },
          zoom: {
            enabled: true, 
        
            duration: 300, 
            easing: 'ease-in-out',
        
            opener: function(openerElement) {
        
              return openerElement.is('img') ? openerElement : openerElement.find('img');
          }
        }
        
        });
        
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

        
    }); // end document ready function


})(jQuery); // End jQuery
