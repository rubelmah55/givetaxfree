<!DOCTYPE html>
<!-- lang -->
<html <?php language_attributes(); ?>>

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="RRDevs">
    <!-- ======== Page title ============ -->
    <title><?php if(is_front_page()){ echo' Home '; echo' | '; echo bloginfo('name'); } else { wp_title(''); echo' | '; bloginfo('name');  } ?></title>
    <!-- ========== Favicon Icon ========== -->
    <?php
        if(class_exists('ACF')):
            $favicon = get_field( 'favicon', 'options' );
                if (isset($favicon)): 
    ?>
    <link rel="icon" type="image/png" href="<?php echo $favicon['url']; ?>" sizes="32x32">
    <?php endif; endif; ?>
    <!-- ===========  All Stylesheet ================= -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>    
     <!-- Header start -->
     <header>
        <div class="main-header-wraper">
            <div class="container">
                <div class="d-flex align-items-center justify-content-between">

                    <div class="header-logo">
                        <div class="logo">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                <?php
                                    if(class_exists('ACF')){
                                        $logo = get_field( 'logo', 'options' );
                                        if(!empty($logo)){
                                            printf('<img src="%1$s" class="img-fluid" alt="%2$s">', esc_url($logo['url']), get_bloginfo('name'));
                                        }
                                    }
                                        
                                ?>
                            </a>
                        </div>
                    </div>

                    <div class="header-menu d-none d-xl-block">
                        <div class="main-menu">
                            <?php   
                                wp_nav_menu( array(
                                    'menu'               => 'Primary Menu',
                                    'theme_location'     => 'menu-1',
                                    'depth'              => 2,
                                    'menu_id'            => '',
                                    'container'          => false,
                                    'menu_class'         => 'metismenu',
                                    'fallback_cb'        => 'wp_bootstrap_navwalker::fallback',
                                    'walker'             => new wp_bootstrap_navwalker(),
                                ));
                            ?>
                        </div>
                    </div>

                    <div class="header-right d-flex align-items-center">
                       <div class="user_widget">
                        <div class="login_btn"><i class="fas fa-user"></i></div>
                        <?php 
                            if(is_user_logged_in()){
                         ?>
                        <ul class="drop">
                            <li><a href="#">My Profile</a></li>
                            <li><a href="#">All Campaigns</a></li>
                            <li><a href="#">Payment Options</a></li>
                        </ul>
                        <?php 
                            }else{
                         ?>
                         <ul class="drop">
                            <li><a href="#">Login</a></li>
                            <li><a href="#">Register</a></li>
                        </ul>
                        <?php } ?>
                       </div>
                        <div class="header-search">
                            <a class="search-toggle search_bar">
                                <i class="fas fa-search"></i>
                            </a>
                        </div>

                        <div class="header-btn-cta">
                            <?php 
                                if(class_exists('ACF')){
                                    $cta_button = get_field('cta_button', 'options');
                                    if(!empty($cta_button)){
                                        printf('<a class="theme-btn" href="%s" target="%s"><i class="fas fa-edit"></i>%s</a>', $cta_button['url'], $cta_button['target'], $cta_button['title']);
                                    }
                                }
                                
                            ?>
                        </div>

                        <div class="mobile-nav-bar d-block ml-3 ml-sm-5 d-xl-none">
                            <div class="mobile-nav-wrap">                    
                                <div id="hamburger">
                                    <i class="fas fa-bars"></i>
                                </div>
                               
                                <div class="mobile-nav">
                                    <button type="button" class="close-nav">
                                        <i class="far fa-times-circle"></i>
                                    </button>
                                    <nav class="sidebar-nav">
                                        <?php   
                                            wp_nav_menu( array(
                                                'menu'               => 'Mobile Menu',
                                                'theme_location'     => 'menu-3',
                                                'depth'              => 2,
                                                'menu_id'            => 'mobile-menu',
                                                'container'          => false,
                                                'menu_class'         => 'metismenu',
                                                'fallback_cb'        => 'wp_bootstrap_navwalker::fallback',
                                                'walker'             => new wp_bootstrap_navwalker(),
                                            ));
                                        ?>

                                    </nav>

                                    <div class="header-btn-cta ">
                                        <?php 
                                            if(class_exists('ACF')){
                                                $cta_button = get_field('cta_button', 'options');
                                                if(!empty($cta_button)){
                                                    printf('<a class="theme-btn" href="%s" target="%s"><i class="fas fa-edit"></i>%s</a>', $cta_button['url'], $cta_button['target'], $cta_button['title']);
                                                }
                                            }
                                        ?>
                                    </div>
                                </div>                            
                            </div>
                            <div class="overlay"></div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </header>
    <div class="header-gutter"></div>
    <!-- Header end -->