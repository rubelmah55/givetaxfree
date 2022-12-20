<?php 
    // Template Name: Contact Us
    get_header();
    require_once('inc/breadcrumb.php');
 ?>
    <!-- become_wrapper start -->
    <section class="become_wrapper section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="content-help_right">
                        <?php
                            $contact_body = get_field('contact_body');
                            if(!empty($contact_body['left_title'])){
                                printf('<h4>%s</h4>', $contact_body['left_title']);
                            }
                        ?>
                        <div class="content_contact">
                            <?php
                                if(!empty($contact_body['left_content'])){
                                    echo $contact_body['left_content'];
                                } 
                            ?>
                        </div>
                        <!-- <div class="contact-info">
                            <h3>Head office</h3>
                            <p><strong>Address:</strong></p>
                            <p>1135 Heatherstone Dr. <br>
                                Suite 102</p>
                            <p>Fredericksburg, VA 22407</p>
                            <p><strong>Email:</strong></p>
                            <a href="#">Help@givetaxfree.org</a>
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="content-help_right">
                        <?php
                            $contact_body = get_field('contact_body');
                            if(!empty($contact_body['right_title'])){
                                printf('<h4>%s</h4>', $contact_body['right_title']);
                            }
                        ?>
                    </div>
                    <div class="become_from_widget">
                        <form action="#">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="input-group my-3">
                                        <input type="text" class="form-control" name="name"  placeholder="Name *">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-group my-3">
                                        <input type="email" class="form-control" name="email"  placeholder="Email *">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-group my-3">
                                        <input type="text" class="form-control" name="Subject"  placeholder="Subject ">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-group my-3">
                                        <textarea name="text" class="form-control" id="would" placeholder="Message" cols="6" rows="8"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                   <input type="submit" value="Submit" class="my-3">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- become_wrapper end -->

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