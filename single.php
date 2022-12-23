<?php 
    get_header();
 ?>
    <!-- browse-campaign start -->
    <div class="browse-campaign section-padding">
        <div class="container">
            <div class="browse_widget">
                <div class="page_info">
                    <h4><?php echo get_the_title(); ?></h4>
                </div>
            </div>
        </div>
    </div>
    <!-- browse-campaign end -->

    <!-- director_wrapper start -->
    <section class="blog_wrapper section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mt-3">
                    <div class="blog_widget">
                        <?php 
                            if(!empty(get_the_post_thumbnail_url())):
                                $alt = get_post_meta ( $image_id, '_wp_attachment_image_alt', true );
                         ?>
                        <div class="blog_img">
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid" alt="<?php echo $alt; ?>">
                        </div>
                        <?php endif; ?>
                        <div class="blog_content">
                            <p>This is my Dad, Edson.  He is one of the hardest workers I know, whom everyone loves, and is talented at so many things.  He’s my mom’s best friend and an amazing architect, seasoned fly-fisherman, handyman, and artist.  He is humble, kind, generous, and an amazing leader, despite his never-ending supply of “dad jokes”.</p>
                            <p>He has 3 different aggressive stage 4 prostate cancers, but they can’t remove his prostate (because of his glaucoma), and he just found out it’s going to be at least $1,500/month for 2 years out of pocket after insurance!  I am heartbroken to see him go through this, seeing him get so tired all the time…(he tries so hard to hide it). He is being forced to retire this year too, which also is a big financial hit.  I was told they are looking at selling their house (which I have so many precious memories in!) to help pay for the treatment!</p>
                            <p>My Christmas wish for 2022 and New Years’ Resolution is to raise as much money as we can for him and my mom.  I would love to raise enough so they can pay for his treatment, pay off their house so that they won’t have those weights over them, and get to keep the family home with so many memories.  Please join us and even send a few dollars for this cause.  Every little bit helps.</p>
                            <p>P.S. – THIS IS A SURPRISE!  HE DOESN’T KNOW I’M DOING THIS.  Please share this with everyone you know so that we can help them out!  If I could pay for them myself, I would!  But I need your help.</p>
                            <div class="d-flex align-items-center users">
                                <div class="QR-code">
                                    <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&amp;data=https://givetaxfree.org/campaigns/lets-help-cure-my-dads-cancer-keep-his-house/" alt="QR">
                                </div>
                                <div class="icons">
                                    <p>Please share this campaign on social media so that others can help and make donations.</p>
                                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                                    <a href="#"><i class="fab fa-twitter-square"></i></a>
                                    <a href="#"><i class="fab fa-linkedin"></i></a>
                                    <a href="#"><i class="fab fa-instagram-square"></i></a>
                                    <a href="#"><i class="fas fa-plus-square"></i></a>
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