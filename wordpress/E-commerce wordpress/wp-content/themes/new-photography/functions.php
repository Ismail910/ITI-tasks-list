<?php 
// Do not allow direct access to the file.
if( ! defined( 'ABSPATH' ) ) {
    exit;
}
if ( ! function_exists( 'new_photography__setup' ) ) :
/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 */
	function new_photography__setup() {
		/*
		 * Make theme available for translation.
		 */
		load_theme_textdomain( 'new-photography', get_template_directory() . '/languages' );
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );
		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );
		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 */
		add_theme_support( 'post-thumbnails' );
		/*
		 * WooCommerce Support
		 */		
		add_theme_support( 'woocommerce' );
		add_theme_support( 'wc-product-gallery-zoom' );
		add_theme_support( 'wc-product-gallery-lightbox' );
		add_theme_support( 'wc-product-gallery-slider' );
		/*
		 * Gutenberg Support
		 */			
		add_theme_support( 'align-wide' );
		add_theme_support( 'disable-custom-font-sizes');
		add_theme_support( 'disable-custom-colors' );
		add_theme_support( 'wp-block-styles' );		
		add_theme_support( 'responsive-embeds' );
		// This theme uses wp_nav_menu() in one location.
		add_theme_support( 'nav-menus' );
		register_nav_menu('primary', esc_html__( 'Primary', 'new-photography' ) );
		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'new_photography__custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );
		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );
		/**
		 * Add support for core custom logo.
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 70,
			'width'       => 140,
			'flex-width'  => true,
			'flex-height' => false,
		) );
		register_default_headers( array(
			'img1' => array(
				'url'           => get_template_directory_uri() . '/images/header.webp',
				'thumbnail_url' => get_template_directory_uri() . '/images/header.webp',
				'description'   => esc_html__( 'Default Image 1', 'new-photography' )
			)
		));		
	}
endif;
add_action( 'after_setup_theme', 'new_photography__setup' );
/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 */
function new_photography__content_width() {
	// This variable is intended to be overruled from themes.
	$GLOBALS['content_width'] = apply_filters( 'new_photography__content_width', 640 );
}
add_action( 'after_setup_theme', 'new_photography__content_width', 0 );
/**
 * Register widget area.
 */
function new_photography__widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'new-photography' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'new-photography' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 1', 'new-photography' ),
		'id'            => 'footer-1',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 2', 'new-photography' ),
		'id'            => 'footer-2',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 3', 'new-photography' ),
		'id'            => 'footer-3',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 4', 'new-photography' ),
		'id'            => 'footer-4',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'new_photography__widgets_init' );
/**
 * Enqueue scripts and styles.
 */
function new_photography__scripts() {	
	wp_enqueue_script( 'jquery');	
	wp_enqueue_script( 'jquery-ui-accordion' );
	wp_enqueue_script( 'jquery-ui-core' );
	wp_enqueue_script( 'jquery-ui-tabs' );
	wp_enqueue_style( 'custom-style-css', get_stylesheet_uri() );
	wp_enqueue_style( 'dashicons' );
	wp_enqueue_style( 'style-animate-css', get_template_directory_uri() . '/css/animate.css' );
	wp_enqueue_script( 'style-search-top-js', get_template_directory_uri() . '/js/search-top.js', array(), '', false );	
	wp_enqueue_style( 'style-font-awesome', get_template_directory_uri() . '/css/font-awesome.css', array(), '4.7.0'  );
	wp_enqueue_style( 'style-font-woo-css', get_template_directory_uri() . '/include/woocommerce/woo-css.css', array(), '4.7.0'  );
	wp_enqueue_script( 'style-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '', true );
	wp_enqueue_script( 'style-mobile-menu', get_template_directory_uri() . '/js/mobile-menu.js', array(), '', false );
	wp_enqueue_script( 'style-viewportchecker', get_template_directory_uri() . '/js/viewportchecker.js', array(), '', true );
	wp_enqueue_script( 'style-top', get_template_directory_uri() . '/js/to-top.js', array(), '', true );
	wp_enqueue_style( 'style-back-top-css', get_template_directory_uri() . '/include/back-to-top/style.css' );
	wp_enqueue_script( 'style-search-top-main-js', get_template_directory_uri() . '/include/back-to-top/main.js', array(), '', true );	
	wp_enqueue_script( 'style-search-top-util-js', get_template_directory_uri() . '/include/back-to-top/util.js', array(), '', true );		
	wp_enqueue_script( 'style-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'new_photography__scripts' );
/**
 * Includes
 */

require_once get_template_directory() . '/include/content-customizer.php';
require_once get_template_directory() . '/include/custom-header.php';
require_once get_template_directory() . '/include/template-tags.php';
require_once get_template_directory() . '/include/customizer.php';
require_once get_template_directory() . '/include/header-top.php';
require_once get_template_directory() . '/include/back-to-top-button.php';
require_once get_template_directory() . '/include/read-more-button.php';
require_once get_template_directory() . '/include/animations/animations.php';
require_once get_template_directory() . '/include/menu-options.php';
require_once get_template_directory() . '/include/post-options.php';
require_once get_template_directory() . '/include/breadcrumbs.php';
require_once get_template_directory() . '/include/color-scheme.php';
require_once get_template_directory() . '/include/back-to-top/back-to-top-button.php';
require_once get_template_directory() . '/include/customize-pro/class-customize.php';
require_once get_template_directory() . '/include/header-buttons.php';
require_once get_template_directory() . '/include/home-images.php';
require_once get_template_directory() . '/include/conveyor-ticker/conveyor-ticker.php';
require_once get_template_directory() . '/include/pro/pro.php';
if( class_exists( 'WooCommerce' ) ) {
	require_once get_template_directory() . '/include/plugins/class-tgm-plugin-activation.php';
	require_once get_template_directory() . '/include/plugins/tgm-plugin-activation.php';
}
/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require_once get_template_directory() . '/include/jetpack.php';
}
/**
 * Adds custom classes to the array of body classes.
 */
function new_photography__body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}
	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}
	return $classes;
}
add_filter( 'body_class', 'new_photography__body_classes' );
function new_photography__sidebar_position() {
	if ( ( is_active_sidebar('sidebar-1') ) ) { 
		wp_enqueue_style( 'style-sidebar', get_template_directory_uri() . '/layouts/left-sidebar.css' );
	}
}
add_action( 'wp_enqueue_scripts', 'new_photography__sidebar_position' );
/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function new_photography__pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'new_photography__pingback_header' );


/*********************************************************************************************************
* Customizer Styles
**********************************************************************************************************/
function new_photography__customize_checkbox_styles( $input ) { ?>
	<style>
		/**
		 * Checkbox Toggle UI
		 */
		#customize-theme-controls input[type="checkbox"] {
			-webkit-appearance: none;
			-moz-appearance: none;
			appearance: none;
			-webkit-tap-highlight-color: transparent;
			width: auto;
			height: auto;
			vertical-align: middle;
			position: relative;
			border: 0;
			outline: 0;
			cursor: pointer;
			background: none;
			box-shadow: none;
		}
		#customize-theme-controls input[type="checkbox"]:focus {
			box-shadow: none;
		}
		#customize-theme-controls input[type="checkbox"]:after {
			content: '';
			font-size: 8px;
			font-weight: 400;
			line-height: 18px;
			text-indent: -14px;
			color: #ffffff;
			width: 36px;
			height: 18px;
			display: inline-block;
			background-color: #064441;
			border-radius: 72px;
			box-shadow: 0 0 12px rgb(0 0 0 / 15%) inset;
		}
		#customize-theme-controls input[type="checkbox"]:before {
			content: '';
			width: 14px;
			height: 14px;
			display: block;
			position: absolute;
			top: 2px;
			left: 2px;
			margin: 0;
			border-radius: 50%;
			background-color: #ffffff;
		}
		#customize-theme-controls input[type="checkbox"]:checked:before {
			left: 20px;
			margin: 0;
			background-color: #ffffff;
		}
		#customize-theme-controls input[type="checkbox"],
		#customize-theme-controls input[type="checkbox"]:before,
		#customize-theme-controls input[type="checkbox"]:after,
		#customize-theme-controls input[type="checkbox"]:checked:before,
		#customize-theme-controls input[type="checkbox"]:checked:after {
			transition: ease .15s;
		}
		#customize-theme-controls input[type="checkbox"]:checked:after {
			content: 'ON';
			background-color: #064441;
		}
		#_customize-input-new_photography__shortcode_top_news {
			display: none;
		}
		.customize-range {
			width: 100%;
		}
		.seos-range-value {
			color: #50575e;
			font-family: Impact;
			font-size: 17px;
		}
	</style>
	<?php }
add_action( 'customize_controls_print_styles', 'new_photography__customize_checkbox_styles');