<?php 
/*
Template Name: Board of Directors
*/
    get_header();
    require_once('inc/breadcrumb.php');
    global $acf_active;
?>

    <!-- director_wrapper start -->
    <section class="director_wrapper section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="director_wrapper">
                        <?php 
                            if($acf_active):
                            $directors = get_field('directors');
                            if(!empty($directors)):
                                foreach ($directors as $key => $director):
                         ?>
                        <div class="row <?php if($key % 2 !== 0){echo "flex-row flex-lg-row-reverse";} ?> mb-4">
                            <div class="col-lg-6 mt-4">
                                <div class="director_img">
                                    <?php 
                                        $image = $director['image'];
                                        if(!empty($image)){
                                            printf('<img src="%s" class="img-fluid" alt="%s">', $image['url'], $image['alt']);
                                        }
                                     ?>
                                </div>    
                            </div>
                            <div class="col-lg-6 mt-4">
                                <div class="director_content">
                                    <div class="director_title">
                                        <?php 
                                            $name = $director['name'];
                                            $designation = $director['designation'];
                                            if(!empty($name)){
                                                printf('<h2>%s</h2>', $name);
                                            }
                                            if(!empty($designation)){
                                                printf('<h5>%s</h5>', $designation);
                                            }
                                        ?>
                                    </div>
                                    <div class="director_info">
                                        <?php 
                                            $bio = $director['bio'];
                                            if(!empty($bio)){
                                                printf('%s', $bio);
                                            }
                                            if(!empty($name)){
                                                printf('<h6>%s</h6>', $name);
                                            }
                                        ?>
                                    </div>
                                </div>    
                            </div>
                        </div>
                        
                        <?php
                            if($key % 2 == 0){
                                echo "<hr>";
                            }
                            endforeach; endif; endif;
                        ?>
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