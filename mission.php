<?php 
/*
Template Name: Our Mission
*/
    get_header();
    require_once('inc/breadcrumb.php');
    global $acf_active;
?>

    <!-- mission_wrapper start -->
    <section class="mission_wrapper section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="director_wrapper director_wrapper_2">
                        <div class="row">
                            <?php 
                                if($acf_active):
                                $mission = get_field('our_mission');
                            ?>
                            <div class="col-12 mt-4">
                                <div class="director_bg bg-cover bg-center" style="background-image: url(<?php echo $mission['image']['url']; ?>);"></div>    
                            </div>
                            <div class="col-12 mt-4">
                                <div class="director_content">
                                    <?php 
                                        echo $mission['content'];
                                     ?>
                                </div>    
                            </div>
                            <?php 
                                endif;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-3">
                <?php 
                    require_once('inc/sidebar.php');
                ?>
            </div>
        </div>
    </section>
    <!-- director_wrapper end -->
<?php 
    get_footer();
 ?>