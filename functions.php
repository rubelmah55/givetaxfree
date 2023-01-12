<?php 

require_once('wp_bootstrap_navwalker.php');
require_once('inc/tgm-plugins.php');

if ( ! function_exists( 'givetaxfree_setup' ) ) {

	function givetaxfree_setup() {
		/** Make theme available for translation. */
		load_theme_textdomain( 'givetaxfree', get_template_directory() . '/languages' );

		/** Enable support for Post Thumbnails on posts and pages. */
		add_theme_support( 'post-thumbnails' );

		/** This theme uses wp_nav_menu() in one location. */
		register_nav_menus( array(
		  'menu-1' => esc_html__( 'Primary Menu', 'givetaxfree' ),
		  'menu-3' => esc_html__( 'Mobile Menu', 'givetaxfree' ),
		  'menu-2' => esc_html__( 'Footer Menu', 'givetaxfree' ),
		) );

	}
}
add_action( 'after_setup_theme', 'givetaxfree_setup' );

/*** Enqueue scripts and styles. */
function givetaxfree_scripts() {

	/*** Enqueue styles. */
	wp_enqueue_style('icons', get_template_directory_uri() . '/assets/css/icons.css', array(), time(), 'all');
	wp_enqueue_style('metismenu', get_template_directory_uri() . '/assets/css/metismenu.css', array(), time(), 'all');
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), time(), 'all');
	wp_enqueue_style('aos', get_template_directory_uri() . '/assets/css/aos.min.css', array(), time(), 'all');
	wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.min.css', array(), time(), 'all');
	wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css', array(), time(), 'all');
	wp_enqueue_style( 'givetaxfree-style', get_stylesheet_uri(), array(), time());

	/*** Enqueue scripts. */
	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), time(), true);
	wp_enqueue_script('aos', get_template_directory_uri() . '/assets/js/aos.min.js', array(), time(), true);
	wp_enqueue_script('metismenu', get_template_directory_uri() . '/assets/js/metismenu.js', array(), time(), true);
	wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/assets/js/magnific-popup.min.js', array(), time(), true);
	wp_enqueue_script('scripts', get_template_directory_uri() . '/assets/js/scripts.js', array(), time(), true);

}
add_action( 'wp_enqueue_scripts', 'givetaxfree_scripts' );


/** Options Page Header Background */
function givetaxfree_admin_dashboard_css() {
	echo '<style type="text/css">
		#acf-group_5a2badeb476ba .hndle { color: #333; background: #fff; }
	  	#acf-group_5a2badeb476ba .hndle img { max-width: 170px; margin-right: 15px; }
	  	#acf-group_5a2badeb476ba .hndle span { display: inline-flex; align-items: center; }
	</style>';
}
add_action('admin_head', 'givetaxfree_admin_dashboard_css');


/*** ACF OPTIONS PAGE */
if(function_exists('acf_add_options_page')) {
	acf_add_options_page();
}

$acf_active = class_exists('ACF');
