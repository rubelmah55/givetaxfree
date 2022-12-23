<?php 
/*
Template Name: Become A Volunteer
*/
    get_header();
    require_once('inc/breadcrumb.php');
?>
    <!-- become_wrapper start -->
    <section class="become_wrapper section-padding">
        <div class="container">
            <div class="row ">
                <div class="col-lg-12">
                    <div class="director_wrapper mb-4">
                        <div class="row">
                            <?php
                                $become = get_field('become_a_volunteer');
                                if(!empty($become['kind_heart'])){
                                    printf('<p>%s</p>', $become['kind_heart']);
                                }
                            ?>
                        </div>
                        <div class="row align-items-center flex-row flex-lg-row-reverse">
                            <div class="col-lg-5">
                                <div class="become_bg text-center">
                                    <?php 
                                        
                                        if(!empty($become['image'])){
                                            printf('<img src="%s" class="img-fluid" alt="%s">', $become['image']['url'], $become['image']['alt']);
                                        }
                                     ?>
                                </div>
                            </div>
                            <div class="col-lg-7 mt-4">
                                <div class="become_content">
                                    <?php 
                                        
                                        if(!empty($become['title'])){
                                            printf('<h5>%s</h5>', $become['title']);
                                        }
                                        if(!empty($become['subtitle'])){
                                            printf('<h4>%s</h4>', $become['subtitle']);
                                        } 
                                        if(!empty($become['content'])){
                                            printf('%s', $become['content']);
                                        }
                                     ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="become_from_widget">
                        <form action="#">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group my-3">
                                        <label for="fast-name">First Name *</label>
                                        <input type="text" class="form-control" name="fast-name" id="fast-name" placeholder="fast-name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group my-3">
                                        <label for="last-name">Last Name *</label>
                                        <input type="text" class="form-control" name="last-name" id="last-name" placeholder="last-name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group my-3">
                                        <label for="email">Email address *</label>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Email address">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group my-3">
                                        <label for="phone">Phone *</label>
                                        <input type="email" class="form-control" name="phone" id="phonr" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group my-3">
                                        <label for="city">City *</label>
                                        <input type="text" class="form-control" name="city" id="city" placeholder="City">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group my-3">
                                        <label for="State">State</label>
                                        <input type="text" class="form-control" name="State" id="State" placeholder="State">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group my-3">
                                        <label for="State">Zip</label>
                                        <input type="text" class="form-control" name="Zip" id="Zip" placeholder="Zip">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group my-3">
                                        <label for="day">Days and times you can volunteer *</label>
                                        <input type="text" class="form-control" name="day" id="day" placeholder="City">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-group my-3">
                                        <label for="would">How would you like to help?</label>
                                        <textarea name="text" class="form-control" id="would" cols="6" rows="8"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                   <input type="submit" value="Send" class="my-3">
                                </div>
                            </div>
                        </form>
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
    <!-- become_wrapper end -->
<?php 
    get_footer();
 ?>