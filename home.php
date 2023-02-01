<?php 
/*
Template Name: Home
*/
    get_header();
    global $acf_active;
?>

<?php 
    if($acf_active):
    $banner = get_field('banner');
    if(!empty($banner)):
 ?>
<!-- Hero section Start -->
<section class="hero_wrapper">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="banner_title" data-aos="fade-right" data-aos-delay="200">
                    <?php 
                        

                        if(!empty($banner['title'])){
                            printf('<h3>%s</h3>', $banner['title']);
                        }
                        if(!empty($banner['subtitle'])){
                            printf('<h5>%s</h5>', $banner['subtitle']);
                        }
                        if(!empty($banner['highlight_text'])){
                            printf('<h2>%s</h2>', $banner['highlight_text']);
                        }
                     ?>
                    <ul>
                        <?php 
                            $list_item = $banner['list_items'];
                            if(!empty($list_item)){
                                foreach ($list_item as $item) {
                                    printf('<li><i class="far fa-check-square"></i>%s</li>', $item['item']);
                                }
                            }
                         ?>
                    </ul>
                    <?php 
                        $button1 = $banner['button_1'];
                        $button2 = $banner['button_2'];

                        if(!empty($button1)){
                            printf('<a href="%s" class="theme-btn" target="%s"><i class="fas fa-edit"></i> %s</a>', $button1['url'], $button1['target'], $button1['title']);
                        }
                        if(!empty($button2)){
                            printf('<a href="%s" class="theme-btn" target="%s"><i class="far fa-file-alt"></i> %s</a>', $button2['url'], $button2['target'], $button2['title']);
                        }
                     ?> 
                </div>
            </div>
            <div class="col-lg-6">
                <div class="video-frame">
                    <?php 
                        $video_url = $banner['video_url'];
                        $video_image = $banner['video_image'];

                        if(!empty($video_url)):
                     ?>
                    <video id="video-autoplay" class="video-box" poster="<?php echo $video_image;?>" controls="" width="100%" height="auto" __idm_id__="1892353">
                    <source src="<?php echo $video_url; ?>">
                        Your browser does not support the video tag.
                    </video>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero section End -->
<?php 
    endif; endif;
    if($acf_active):
    $fundraising = get_field('fundraising');
    if(!empty($fundraising)):
?>
<!-- Content Section Start -->
<section class="content_wrapper section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="content_top">
                    <?php 
                        

                        if(!empty($fundraising['title'])){
                            printf('<h2>%s</h2>', $fundraising['title']);
                        }
                        if(!empty($fundraising['subtitle'])){
                            printf('<h6>%s</h6>', $fundraising['subtitle']);
                        }
                        if(!empty($fundraising['table_title'])){
                            printf('<p class="text-center td_title">%s</p>', $fundraising['table_title']);
                        }
                    ?>
                    <table class="compare" width="100%">
                        <thead>
                            <tr>
                                <?php 
                                    $table = $fundraising['table'];

                                    $heading = $table['heading'];

                                    if(!empty($heading)){
                                        foreach ($heading as $h) {
                                            printf('<th>%s</th>', $h['title']);
                                        }
                                    }
                                 ?>
                            </tr>
                        </thead>

                        <tbody>
                            <?php 
                                $table_row = $table['table_row'];
                                if(!empty($table_row)):
                                    foreach($table_row as $i => $row):
                                        if($i == 0){
                             ?>
                            <tr>
                                <?php 
                                    $criteria = $row['criteria'];
                                    $givetaxfreeorg = $row['givetaxfreeorg*'];
                                    $other = $row['other*'];
                                    
                                    if(!empty($criteria)){
                                        printf('<td class="td_1"><strong>%s</strong></td>', $criteria);
                                    }

                                    if($givetaxfreeorg){
                                        echo '<td class="td_2"><strong><i class="fa fa-check"></i> Yes</strong></td>';
                                    }else{
                                        echo '<td class="td_3"><strong><i class="fas fa-times"></i> No</strong></td>';
                                    }
                                    if($other){
                                        echo '<td class="td_2"><strong><i class="fa fa-check"></i> Yes</strong></td>';
                                    }else{
                                        echo '<td class="td_3"><strong><i class="fas fa-times"></i> No</strong></td>';
                                    }
                                 ?>
                            </tr>
                            <?php 
                                }else{
                             ?>
                            <tr>
                                <?php
                                    $criteria = $row['criteria'];
                                    $givetaxfreeorg = $row['givetaxfreeorg*'];
                                    $other = $row['other*'];
                                    if(!empty($criteria)){
                                        printf('<td>%s</td>', $criteria);
                                    }

                                    if($givetaxfreeorg){
                                        echo '<td>Yes</td>';
                                    }else{
                                        echo '<td>No</td>';
                                    }
                                    if($other){
                                        echo '<td>Yes</td>';
                                    }else{
                                        echo '<td>No</td>';
                                    }
                                 ?>
                            </tr>
                            <?php 
                                }
                                endforeach; endif;
                             ?>
                        </tbody>
                    </table>
                    <?php 
                        $table_bottom_content = $fundraising['table_bottom_content'];
                        if(!empty($table_bottom_content)){
                            printf('<p>%s</p>', $table_bottom_content);
                        }
                    ?>
                </div> <!-- .content-left -->

                <hr>

                <div class="content_bottom">
                    <?php 
                        $content = $fundraising['content'];
                        if(!empty($content)){
                            printf('%s', $content);
                        }
                    ?>
                </div> <!-- .content-left -->
            </div>

            <div class="col-lg-4">
                <div class="content-right">
                    <div class="inner-content inner_top" data-aos="fade-up">
                        <?php 
                            $fundraising_right = get_field('fundraising_right');

                            $crowdfunding = $fundraising_right['crowdfunding_with_us'];

                            if(!empty($crowdfunding['title'])){
                                printf('<h4>%s</h4>', $crowdfunding['title']);
                            }
                            if(!empty($crowdfunding['content'])){
                                printf('<p>%s</p>', $crowdfunding['content']);
                            }
                        ?>
                    </div>

                    <div class="inner-content inner_middle" data-aos="fade-up" data-aos-delay="200">
                        <?php 
                            $mission = $fundraising_right['our_mission'];
                            if(!empty($mission['title'])){
                                printf('<h4>%s</h4>', $mission['title']);
                            }
                            if(!empty($mission['content'])){
                                printf('%s', $mission['content']);
                            }
                            if(!empty($mission['button'])){
                                printf('<a href="%s" class="theme-btn" target="%s">%s</a>', $mission['button']['url'], $mission['button']['target'], $mission['button']['title']);
                            }
                         ?>
                    </div> 

                    <div class="inner-content" data-aos="fade-up" data-aos-delay="300">
                        <?php 
                            $important = $fundraising_right['important_points'];

                            if(!empty($important['title'])){
                                printf('<h4>%s</h4>', $important['title']);
                            }
                            if(!empty($important['content'])){
                                printf('%s', $important['content']);
                            }
                         ?>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Content Section End -->
<?php 
    endif; endif;
    if($acf_active):
    $call_to_action = get_field('call_to_action');
    if(!empty($call_to_action)):
?>
<!-- cta section start -->
<div class="cta_wrapper bg-center bg-cover" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/poor_01.png);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="cta_content">
                    <?php 

                        if(!empty($call_to_action['title'])){
                            printf('<h2>%s</h2>', $call_to_action['title']);
                        }
                        if(!empty($call_to_action['subtitle'])){
                            printf('<p>%s</p>', $call_to_action['subtitle']);
                        }
                     ?>
                    
                </div>
            </div>
            <div class="col-md-4 text-md-end text-center">
                <?php 
                    if(!empty($call_to_action['button'])){
                        printf('<a href="%s" class="theme-btn" target="%s"> <i class="fa fa-envelope"></i>%s</a>', $call_to_action['button']['url'], $call_to_action['button']['target'], $call_to_action['button']['title']);
                    }
                 ?>
            </div>
        </div>
    </div>
</div>
<!-- cta section end -->
<?php 
    endif; endif;
?>
<!-- featured section Start -->
<section class="featured_wrapper section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="section-title text-center">
                    <h2>latest campaigns</h2>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-lg-4 col-md-6">
                <div class="single_feaured_item" data-aos="fade-up">
                    <div class="popular-causes__img bg-center bg-cover" style="background-image: url( <?php echo get_stylesheet_directory_uri(); ?>/assets/img/pople_03.png);"></div>
                    <div class="popular-causes__content">
                        <div class="popular-causes__title">
                            <h3><a href="campaign-details.html">Donner Poor Children</a></h3>
                        </div>
                        <div class="popular_bar">
                            <div class="popular-causes__progress">
                                <div class="popular-causes__goals d-flex justify-content-between align-items-center">
                                    <p>Raised: <span>$25,270</span></p>
                                    <p>Goal: <span>$30,000</span></p>
                                </div>
    
                                <div class="bar">
                                    <div class="bar-inner count-bar counted" data-percent="36%" style="width: 36%;"></div>
                                </div>
                                
                            </div>
                            <a href="#" class="theme-btn">Donate Now <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single_feaured_item" data-aos="fade-up">
                    <div class="popular-causes__img bg-center bg-cover" style="background-image: url( <?php echo get_stylesheet_directory_uri(); ?>/assets/img/pople_03.png);"></div>
                    <div class="popular-causes__content">
                        <div class="popular-causes__title">
                            <h3><a href="campaign-details.html">Donner Poor Children</a></h3>
                        </div>
                        <div class="popular_bar">
                            <div class="popular-causes__progress">
                                <div class="popular-causes__goals d-flex justify-content-between align-items-center">
                                    <p>Raised: <span>$25,270</span></p>
                                    <p>Goal: <span>$30,000</span></p>
                                </div>
    
                                <div class="bar">
                                    <div class="bar-inner count-bar counted" data-percent="36%" style="width: 36%;"></div>
                                </div>
                                
                            </div>
                            <a href="#" class="theme-btn">Donate Now <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single_feaured_item" data-aos="fade-up">
                    <div class="popular-causes__img bg-center bg-cover" style="background-image: url( <?php echo get_stylesheet_directory_uri(); ?>/assets/img/pople_03.png);"></div>
                    <div class="popular-causes__content">
                        <div class="popular-causes__title">
                            <h3><a href="campaign-details.html">Donner Poor Children</a></h3>
                        </div>
                        <div class="popular_bar">
                            <div class="popular-causes__progress">
                                <div class="popular-causes__goals d-flex justify-content-between align-items-center">
                                    <p>Raised: <span>$25,270</span></p>
                                    <p>Goal: <span>$30,000</span></p>
                                </div>
    
                                <div class="bar">
                                    <div class="bar-inner count-bar counted" data-percent="36%" style="width: 36%;"></div>
                                </div>
                                
                            </div>
                            <a href="#" class="theme-btn">Donate Now <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- featured section end -->

<?php 
    get_footer();
?>