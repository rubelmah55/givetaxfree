    <!-- header search ber -->
    <div class="overlay overlay-hugeinc">
        <form class="form-inline mt-2 mt-md-0" role="search" method="get" action="<?php echo site_url( '/' ); ?>">
            <div class="form-inner">
                <div class="d-flex justify-content-between align-items-center">
                    <input class="form-control" type="text" placeholder="Search" aria-label="Search" value="<?php echo get_search_query(); ?>" name="s" id="s">
                    <button type="submit"><i class="fas fa-search"></i></button>
                    <a href="#" class="overlay-close link-oragne"><i class="fas fa-times"></i></a>
                </div>
            </div>
        </form>
    </div>
    <!-- header search ber -->    
    <?php 
        global $acf_active;
        if($acf_active):
        $footer = get_field('footer', 'options');
        if(!empty($footer)):
     ?>
    <!-- Footer start -->
    <footer class="footer_wrapper">
       <div class="footer_top">
         <div class="container">
            <div class="row">
                <?php
                    

                    $footer_items = $footer['footer_items'];

                    if(!empty($footer_items)):
                        foreach ($footer_items as $key => $item):
                ?>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div  class="footer_widget">
                        <?php 
                            if(!empty($item['title'])){
                                printf('<h3 class="widget-title">%s</h3>', $item['title']);
                            }
                        ?>
                        <div class="<?php if($key == 3){
                            echo "footer_element";
                        }else{echo "footer_link_element";} ?>">
                            <ul>
                                <?php 
                                    if(!empty($item['menu_items'])){
                                        foreach ($item['menu_items'] as $mi) {
                                            if($key == 3){
                                                printf('<li>%s</li>',$mi['item']['title']);
                                            }else{
                                                printf('<li><a href="%s" target="%s"><i class="fas fa-angle-right"></i>%s</a></li>', $mi['item']['url'],$mi['item']['target'], $mi['item']['title']);
                                            }
                                        }
                                        
                                    }
                                ?>
                            </ul>
                        </div>  
                    </div>
                </div>
                <?php 
                    endforeach; endif;
                 ?>

            </div>
        </div>
       </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="footer-bottom-content">
                    <?php 
                        if(!empty($footer['copyright'])){
                            printf('<span>%s</span>', $footer['copyright']);
                        }
                     ?>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer end -->
    <?php endif; endif; ?>
    <!--  ALl JS Plugins
    ====================================== -->
    <?php wp_footer(); ?>
</body>

</html>