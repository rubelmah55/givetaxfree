<?php 
/*
Template Name: Our Mission
*/
    get_header();
    require_once('inc/breadcrumb.php');
?>

    <!-- mission_wrapper start -->
    <section class="mission_wrapper section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="director_wrapper director_wrapper_2">
                        <div class="row">
                            <div class="col-12 mt-4">
                                <?php 
                                    $mission = get_field('our_mission');

                                 ?>
                                <div class="director_bg bg-cover bg-center" style="background-image: url(<?php echo $mission['image']['url']; ?>);"></div>    
                            </div>
                            <div class="col-12 mt-4">
                                <div class="director_content">
                                    <?php 
                                        echo $mission['content'];
                                     ?>
                                </div>    
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <?php 
                        require_once('inc/sidebar.php');
                    ?>
                </div>
            </div>
        </div>
    </section>
    <!-- director_wrapper end -->
<?php 
    get_footer();
 ?>