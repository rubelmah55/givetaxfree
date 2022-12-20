<?php 
    // Template Name: FAQ
    get_header();
    require_once('inc/breadcrumb.php');
?>
    <!-- director_wrapper start -->
    <section class="raq_wrapper section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="faq_title">
                        <?php 
                            $faq_content = get_field('faq_content');

                            if(!empty($faq_content['title'])){
                                printf('<h4>%s</h4>', $faq_content['title']);
                            }
                            if(!empty($faq_content['content'])){
                                printf('<p>%s</p>', $faq_content['content']);
                            }
                        ?>
                    </div>
                   <div class="accroding_wrapper">
                    <div class="accordion" id="accordionExample">
                        <?php
                            $faqs = $faq_content['faqs'];
                           
                            if(!empty($faqs)):
                                foreach($faqs as $i => $faq):
                        ?>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="heading_<?php echo $i; ?>">
                            <button class="accordion-button <?php if($i !== 0){echo "collapsed";}?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_<?php echo $i; ?>" aria-expanded="<?php if($i == 0){echo 'true';}else{echo "false";}?>" aria-controls="collapse_<?php echo $i; ?>"><?php if(!empty($faq['question'])){echo $faq['question'];} ?></button>
                          </h2>
                          <div id="collapse_<?php echo $i; ?>" class="accordion-collapse collapse <?php if($i == 0){echo 'show';}?>" aria-labelledby="heading_<?php echo $i; ?>" data-bs-parent="#accordionExample">
                            <?php
                                if(!empty($faq['answer'])){
                                    printf('<div class="accordion-body">%s</div>', $faq['answer']);
                                }
                            ?>
                          </div>
                        </div>
                        <?php endforeach; endif; ?>

                      </div>
                   </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="content-help_right">
                        <h4>Latest Campaign</h4>
                    </div>

                    <div class="single_feaured_item" data-aos="fade-up">
                        <div class="popular-causes__img bg-center bg-cover" style="background-image: url(./assets/img/pople_03.png);"></div>
                        <div class="popular-causes__content">
                            <div class="popular-causes__title">
                                <span>#Donation</span>
                                <h3><a href="campaign-details.html">Donner Poor Children</a></h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed facere explicabo et reiciendis </p>
                            </div>
                            <div class="popular-causes__progress">
                                <div class="popular-causes__goals d-flex justify-content-between align-items-center">
                                    <p>Raised: <span>$25,270</span></p>
                                    <p>Goal: <span>$30,000</span></p>
                                </div>

                                <div class="bar">
                                    <div class="bar-inner count-bar counted" data-percent="36%" style="width: 36%;"></div>
                                </div>
                                
                            </div>
                            <p>Reside by 40 papule 12 papule</p>
                            <a href="#" class="theme-btn">Donate Now <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                    
                    <div class="single_feaured_item" data-aos="fade-up">
                        <div class="popular-causes__img bg-center bg-cover" style="background-image: url(./assets/img/pople_03.png);"></div>
                        <div class="popular-causes__content">
                            <div class="popular-causes__title">
                                <span>#Donation</span>
                                <h3><a href="campaign-details.html">Donner Poor Children</a></h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed facere explicabo et reiciendis </p>
                            </div>
                            <div class="popular-causes__progress">
                                <div class="popular-causes__goals d-flex justify-content-between align-items-center">
                                    <p>Raised: <span>$25,270</span></p>
                                    <p>Goal: <span>$30,000</span></p>
                                </div>

                                <div class="bar">
                                    <div class="bar-inner count-bar counted" data-percent="36%" style="width: 36%;"></div>
                                </div>
                                
                            </div>
                            <p>Reside by 40 papule 12 papule</p>
                            <a href="#" class="theme-btn">Donate Now <i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- director_wrapper end -->

    <!-- header search ber -->
    <div class="overlay overlay-hugeinc">
        <form class="form-inline mt-2 mt-md-0">
            <div class="form-inner">
                <div class="d-flex justify-content-between align-items-center">
                    <i class="fas fa-search"></i>
                    <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                    <a href="#" class="overlay-close link-oragne"><i class="fas fa-plus"></i></a>
                </div>
            </div>
        </form>
    </div>
    <!-- header search ber -->
    
<?php 
    get_footer();
 ?>