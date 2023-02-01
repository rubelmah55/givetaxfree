(function($) {
    "use strict";

    $(document).ready(function () {
        
        /* =============================================
            # sticky Menu
        ===============================================*/
        $(window).scroll(function() {
            var Width = $(document).width();

            if ($("body").scrollTop() > 10 || $("html").scrollTop() > 10) {
                if (Width > 200) {
                    $("header").addClass("sticky");
                } else if(Width < 200) {
                    $("header").addClass("hide");
                }
            } else {
                $("header").removeClass("sticky");
            }
        });

        /* =============================================
            # Mobile Menu
        ===============================================*/

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

         /* =============================================
            # Filter Init
        ===============================================*/
        $('.tab-btn').click(function() {
            // Remove active class from currently active button and content
            $('.tab-btn').removeClass('active');
            $('.tab-content div').removeClass('active');
            
            // Add active class to clicked button and corresponding content
            $(this).addClass('active');
            $('.' + $(this).attr('id')).addClass('active');
        });

        /* =============================================
            # AOS Init
        ===============================================*/
        AOS.init();

        /* =============================================
            # AOS Init
        ===============================================*/
        $('.tab-btn').click(function() {
          $('.tab-btn').removeClass('active');
          $(this).addClass('active');
          
          $('.tab-content').removeClass('active');
          $('#' + $(this).data('tab')).addClass('active');
        });
        
        /* =============================================
            # Magnific popup
        ===============================================*/
        $('.image-popup-vertical-fit').magnificPopup({
            type: 'image',
            mainClass: 'mfp-with-zoom',
            gallery:{
                    enabled:true,
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

        //Rang Bar
        var output = document.getElementById("value_rang");
        var value_tup = document.getElementById("value_tup");

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

        $(".login_btn").click(function(){
            $(".drop").toggle();
        });

         //search popup
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
        
    });

    $(document).on(
      'keydown', function(event) {
        if (event.key == "Escape") {
            $(".overlay-hugeinc").removeClass("open");
        }
    });

})(jQuery);//Jquery end
