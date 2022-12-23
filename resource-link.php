<?php 
/*
Template Name: Resources Links
*/
    get_header();
    require_once('inc/breadcrumb.php');
?>
    <!-- director_wrapper start -->
    <section class="director_wrapper section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 content_top">
                    <table width="100%">
                        <thead>
                            <tr>
                                <th><Strong>Links</Strong></th>
                                <th><strong>Website</strong></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $links = get_field('resources_links');
                                if(!empty($links)):
                                    foreach ($links as $link):
                             ?>
                            <tr>
                                <?php 
                                    if(!empty($link['link'])){
                                        printf('<td><a href="%s" target="%s">%s</a></td>', $link['link']['url'],$link['link']['target'], $link['link']['title'] );
                                    } 
                                    if(!empty($link['website'])){
                                        printf('<td><a href="%s" target="%s">%s</a></td>', $link['website']['url'],$link['website']['target'], $link['website']['title'] );
                                    }
                                 ?>
                            </tr>
                            <?php 
                                endforeach; endif;
                             ?>
                        </tbody>
                    </table>
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