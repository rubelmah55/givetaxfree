
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


        // tabb

        $('.tab-nav li').click(function () {
            // $('.clickme').removeClass('ac_color');
            $(this).addClass('ac_color').siblings().removeClass('ac_color');
            $('.dash_bord_conten').hide()
            $(this).data('value')
            // var tagid = $(this).data('tag');
            // $('.dash_bord_conten').removeClass('active').addClass('hide');
            // $('#'+tagid).addClass('active').removeClass('hide');
        });

        $(".login_btn").click(function(){
            $(".drop").toggle();
        });
    }); // end document ready function

    // search popup

    $(".search_bar").on('click', function(){
        $(".overlay-hugeinc").addClass("open");
    });

    $(".overlay-close").on('click', function(){
        $(".overlay-hugeinc").removeClass("open");
    });

    $(document).on(
      'keydown', function(event) {
        if (event.key == "Escape") {
            $(".overlay-hugeinc").removeClass("open");
        }
    });

})(jQuery); // End jQuery


 // popup
 const overly_popup = document.querySelector('.overly_popup'),
     share = document.querySelector('.share'),
     head_popup = document.querySelector('.head_popup');
 
 const overly_popup_2 = document.querySelector('.overly_popup_2'),
     share_2 = document.querySelector('.share_2'),
     head_popup_2 = document.querySelector('.head_popup_2');
 
 const overly_popup_3 = document.querySelector('.overly_popup_3'),
     share_3 = document.querySelector('.share_3'),
     head_popup_3 = document.querySelector('.head_popup_3');
 
     share.addEventListener('click', () => {
         overly_popup.classList.add('show-2');
     });

     head_popup.addEventListener('click', () => {
         overly_popup.classList.remove('show-2');
     });
 
     share_2.addEventListener('click', () => {
         overly_popup_2.classList.add('show-3');
     });

     head_popup_2.addEventListener('click', () => {
         overly_popup_2.classList.remove('show-3');
     });
 
     share_3.addEventListener('click', () => {
         overly_popup_3.classList.add('show-4');
     });

     head_popup_3.addEventListener('click', () => {
         overly_popup_3.classList.remove('show-4');
     });