<?php 
/*
Template Name: User Guide
*/
    get_header();
    require_once('inc/breadcrumb.php');
?>

    <!-- director_wrapper start -->
    <section class="director_wrapper section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="user-grid_widget">
                        <?php 
                            echo get_the_content();
                         ?>
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