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

        var slider = document.getElementById("myRange");
        var output = document.getElementById("value_rang");
        var value_tup = document.getElementById("value_tup");
        // output.innerHTML = slider.value; 

       

        $("#myRange").on("input", function(){
            if (this.value == 5){
                output.style.left = "5%";
            }else if(this.value == 10){
                output.style.left = "26%";
            }else if(this.value == 15){
                output.style.left = "50%";
            }else if(this.value == 20){
                output.style.left = "75%";
            }else if(this.value == 25){
                output.style.left = "99%";
            }
            value_tup.innerHTML = this.value+"%";
        })
    
        
        // tabb

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

    // see all
    $(".share_2").on('click', function(){
        $(".overly_popup_2").addClass("show");
    });

    $(".head_popup_2").on('click', function(){
        $(".overly_popup_2").removeClass("show");
    });

    // see top donation
    $(".share_3").on('click', function(){
        $(".overly_popup_3").addClass("show");
    });

    $(".head_popup_3").on('click', function(){
        $(".overly_popup_3").removeClass("show");
    });

    $(document).on(
      'keydown', function(event) {
        if (event.key == "Escape") {
            $(".overlay-hugeinc").removeClass("open");
        }
    });

})(jQuery); // End jQuery
