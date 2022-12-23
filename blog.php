<?php 
/*
Template Name: Resource Blog
*/
    get_header();
    require_once('inc/breadcrumb.php');
?>

    <!-- Blog_wrapper start -->
    <section class="blog_wrapper section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <?php 
                            $query = new WP_Query( [
                                'post_type'      => 'post',
                                'posts_per_page' => '12',
                            ] );

                            if ( $query->have_posts() ) : 
                                while ( $query->have_posts() ) : $query->the_post();
                                    
                                    $image = get_the_post_thumbnail_url();
                                    $image_url = "";
                                    if(!empty($image)){
                                        $image_url = get_the_post_thumbnail_url();
                                    }else{
                                        $image_url = get_template_directory_uri() . '/assets/img/placeholder.png';
                                    }
                        ?>
                        <div class="col-md-4 col-12 mt-3">
                            <div class="blog-item mb-4">
                                <div class="blog-featured-thumb ">
                                    <div class="media overflow-hidden">
                                        <img src="<?php echo $image_url; ?>" class="img-fluid" alt="">
                                    </div>
                                    <div class="date">
                                        <?php 
                                            printf('<span>%s</span>', date("d"));
                                            printf('<span>%s</span>', date("M"));
                                            printf('<span>%s</span>', date("Y"));
                                         ?>
                                    </div>
                                </div>
        
                                <div class="content ">
                                    <div class="post-author">
                                        <?php
                                            $cats = wp_get_post_categories(get_the_ID(), array( 'fields' => 'all' ));
                                            foreach ($cats as $key => $cat) {
                                                printf('<a href="%s">%s</a>', get_category_link($cat->term_taxonomy_id), $cat->name);
                                            }
                                        ?>
                                    </div>
        
                                    <h4><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></h4>
        
                                    <div class="btn-link-share ">
                                        <a href="<?php echo get_the_permalink(); ?>" class="theme-btn">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php 
                           endwhile; endif;
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
    <!-- Blog_wrapper end -->
<?php 
    get_footer();
 ?>