<?php 
/*
Template Name: Research & Resources Pdf
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
                                <th><strong>#</strong></th>
                                <th><Strong>File Name</Strong></th>
                                <th><strong>Action</strong></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $files = get_field('files');

                                if(!empty($files)):
                                    foreach ($files as $i => $file):
                             ?>
                            <tr>
                                <?php 
                                    if(isset($i)){
                                        printf('<td>%s</td>', $i);
                                    } 
                                    if(!empty($file['name'])){
                                        printf('<td>%s</td>', $file['name']);
                                    } 
                                    if(!empty($file['pdf'])){
                                        printf('<td><a href="%s">Download Pdf</a></td>', $file['pdf']);
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