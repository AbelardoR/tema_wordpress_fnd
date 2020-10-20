<?php
/**
 * fundation functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package fundation
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'fnd_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function fnd_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on fundation, use a find and replace
		 * to change 'fnd' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'fnd', get_template_directory() . '/languages' );

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
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'fnd' ),
				'menu-2' => esc_html__( 'Second', 'fnd' ),
			)
		);

		add_filter('nav_menu_link_attributes','clase_menu_enlace', 10,3);
		  function clase_menu_enlace ($atts, $item, $args){
		  	$class = 'nav-link';
		  	$atts['class'] = $class;
		  	return $atts;
		  }

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'fnd_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 100,
				'width'       => 100,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'fnd_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function fnd_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'fnd_content_width', 640 );
}
add_action( 'after_setup_theme', 'fnd_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function fnd_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'fnd' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'fnd' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	
}
add_action( 'widgets_init', 'fnd_widgets_init' );


/**
 *  Extra  Widgets
 */

if ( ! function_exists( 'profession_widgets' ) ) {
	add_action( 'widgets_init', 'profession_widgets' );

	function profession_widgets() {

		// Galeria Sidebar
		register_sidebar(
			array(
				'name'          => __( 'Galeria Sidebar', 'profession' ),
				'id'            => 'galeria-sidebar',
				'description'   => __( 'The widgets added in this sidebar will appear in the front page.', 'profession' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<div class="widget-title"><h5>',
				'after_title'   => '</h5></div>',
			)
		);

		// Page Sidebar
		register_sidebar(
			array(
				'name'          => __( 'Page Sidebar', 'profession' ),
				'id'            => 'page-sidebar',
				'description'   => __( 'The widgets added in this sidebar will appear on single pages.', 'profession' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<div class="widget-title"><h5>',
				'after_title'   => '</h5></div>',
			)
		);

		// Menu Sidebar
		register_sidebar(
			array(
				'name'          => __( 'Menu Sidebar', 'profession' ),
				'id'            => 'menu-sidebar',
				'description'   => __( 'The widgets added in this sidebar will appear on index.', 'profession' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<div class="widget-title"><h5>',
				'after_title'   => '</h5></div>',
			)
		);

		// Content Sidebar
		register_sidebar(
			array(
				'name'          => __( 'Content Sidebar', 'profession' ),
				'id'            => 'content-sidebar',
				'description'   => __( 'The widgets added in this sidebar will appear in content section from front page.', 'profession' ),
				'before_widget' => '<div id="%1$s" class="%2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '',
				'after_title'   => '',
			)
		);

		// Entry Sidebar
		register_sidebar(
			array(
				'name'          => __( 'Entry Sidebar', 'profession' ),
				'id'            => 'entry-sidebar',
				'description'   => __( 'The widgets added in this sidebar will appear in Entry section from front page.', 'profession' ),
				'before_widget' => '<div id="%1$s" class="%2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '',
				'after_title'   => '',
			)
		);

		// WooCommerce Sidebar
		if ( class_exists( 'WooCommerce' ) ) {
			register_sidebar(
				array(
					'name'          => __( 'WooCommerce Sidebar', 'profession' ),
					'id'            => 'woocommerce-sidebar',
					'description'   => __( 'The widgets added in this sidebar will appear in WooCommerce pages.', 'profession' ),
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget'  => '</div>',
					'before_title'  => '<div class="widget-title"><h5>',
					'after_title'   => '</h5></div>',
				)
			);
		}
	}
}// End if().


/**
 * load cont page.
 */

##page_content_about
add_action( "customize_register", "themegenchild_register_theme_customizer_pc1" ); 
function themegenchild_register_theme_customizer_pc1( $wp_customize ) { 
	$wp_customize->add_panel( "tgpage_contents1_options", array("priority" => 70, "theme_supports" => "","title" => __( "page_contents1", "themesgenerator" ), "description" => __( "Set page content block page.", "themesgenerator" ), ) );
	$wp_customize->add_section( "tgpage_contents1_options", array("title" => __( "Page Content", "themesgenerator" ),"priority" => 20,"capability"  => "edit_theme_options","description" => __("Set the page content block 1", "tgpage_contents1"),) );
	$wp_customize->add_setting( "page_contentz_name1", array("sanitize_callback" => "esc_attr", "default" => "default","type" => "theme_mod", "capability" => "edit_theme_options",));	
	$wp_customize->add_control( new WP_Customize_Control($wp_customize,"tgpage_contents1_theme_name",array("label" => __( "Page to show", "themesgenerator" ),"settings" => "page_contentz_name1","priority" => 10,"section" => "tgpage_contents1_options","type" => "dropdown-pages")));
	
	$wp_customize->selective_refresh->add_partial("tgpage_contents_paragraph_margin1", array( "selector" => "#page_contentz_name1") );
}			


/**
 * Enqueue scripts and styles.
 */
function fnd_scripts() {
	wp_enqueue_style( 'fnd-bootstrapcss', get_template_directory_uri() . '/css/bootstrap.min.css', );

	wp_enqueue_style( 'fnd-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'fnd-style', 'rtl', 'replace' );

	wp_enqueue_style( 'fnd-style2', get_template_directory_uri() . '/css/style2.css', );

	wp_enqueue_style( 'fnd-fa', get_template_directory_uri() . '/fa/css/all.css', );

	wp_enqueue_script( 'fnd-bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '20151215', true );

	wp_enqueue_script( 'fnd-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'fnd-slidepanel', get_template_directory_uri() . '/js/slidepanel.js', array('jquery'), '20160909', true );

	wp_enqueue_script( 'fnd-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'fnd_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}


/**
 * load slider images.
 */
add_action( "customize_register", "themegenchild_register_theme_customizer3" ); function themegenchild_register_theme_customizer3( $wp_customize ) { $wp_customize->add_panel( "featured_backgrounds", array("priority" => 66, "theme_supports" => "","title" => __( "Slider", "themesgenerator" ), "description" => __( "Set slider image.", "themesgenerator" ), ) );
	$wp_customize->add_section( "customtgback-1" , array("title" => __("Change Image 1","themesgenerator"),	"panel"    => "featured_backgrounds","priority" => 20) );
	$wp_customize->add_setting( "tgback-1", array( "sanitize_callback" => "esc_attr", "default" => "".get_template_directory_uri().""));
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, "customtgback-1", array( "label"    => __( "Image 1", "themesgenerator" ), "section"  => "customtgback-1", "settings" => "tgback-1" ) ));
	$wp_customize->selective_refresh->add_partial("tgback-1", array("selector" => "#tgback-1",));

	$wp_customize->add_section( "customtgback-2" , array("title" => __("Change Image 2","themesgenerator"),	"panel"    => "featured_backgrounds","priority" => 20) );
	$wp_customize->add_setting( "tgback-2", array( "sanitize_callback" => "esc_attr", "default" => "".get_template_directory_uri().""));
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, "customtgback-2", array( "label"    => __( "Image 2", "themesgenerator" ), "section"  => "customtgback-2", "settings" => "tgback-2" ) ));
	$wp_customize->selective_refresh->add_partial("tgback-2", array("selector" => "#tgback-2",));

	$wp_customize->add_section( "customtgback-3" , array("title" => __("Change Image 3","themesgenerator"),	"panel"    => "featured_backgrounds","priority" => 20) );
	$wp_customize->add_setting( "tgback-3", array( "sanitize_callback" => "esc_attr", "default" => "".get_template_directory_uri().""));
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, "customtgback-3", array( "label"    => __( "Image 3", "themesgenerator" ), "section"  => "customtgback-3", "settings" => "tgback-3" ) ));
	$wp_customize->selective_refresh->add_partial("tgback-3", array("selector" => "#tgback-3",));	
} /** end slider images */

/**
 * Other images.
 */
add_action( "customize_register", "themegenchild_register_theme_customizer4" ); 
	function themegenchild_register_theme_customizer4( $wp_customize ) { 
	$wp_customize->add_panel( "featured_backgrounds_1", array("priority" => 65, "theme_supports" => "","title" => __( "Other Images", "themesgenerator" ), "description" => __( "Set image.", "themesgenerator" ), ) );
	$wp_customize->add_section( "customtgback-4" , array("title" => __("Change Image 4","themesgenerator"),	"panel"    => "featured_backgrounds_1","priority" => 20) );
	$wp_customize->add_setting( "tgback-4", array( "sanitize_callback" => "esc_attr", "default" => "".get_template_directory_uri().""));
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, "customtgback-4", array( "label"    => __( "Image 4", "themesgenerator" ), "section"  => "customtgback-4", "settings" => "tgback-4" ) ));
	$wp_customize->selective_refresh->add_partial("tgback-4", array("selector" => "#tgback-4",));	

	$wp_customize->add_section( "customtgback-5" , array("title" => __("Change Image 5","themesgenerator"),	"panel"    => "featured_backgrounds_1","priority" => 21) );
	$wp_customize->add_setting( "tgback-5", array( "sanitize_callback" => "esc_attr", "default" => "".get_template_directory_uri().""));
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, "customtgback-5", array( "label"    => __( "Image 5", "themesgenerator" ), "section"  => "customtgback-5", "settings" => "tgback-5" ) ));
	$wp_customize->selective_refresh->add_partial("tgback-5", array("selector" => "#tgback-5",));
	
	$wp_customize->add_section( "customtgback-6" , array("title" => __("Change Image 6","themesgenerator"),	"panel"    => "featured_backgrounds_1","priority" => 21) );
	$wp_customize->add_setting( "tgback-6", array( "sanitize_callback" => "esc_attr", "default" => "".get_template_directory_uri().""));
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, "customtgback-6", array( "label"    => __( "Image 6", "themesgenerator" ), "section"  => "customtgback-6", "settings" => "tgback-6" ) ));
	$wp_customize->selective_refresh->add_partial("tgback-6", array("selector" => "#tgback-6",));
}



/**
 * Text Sliders.
 */
add_action( "customize_register", "themesgenchild_register_theme_customizer"); 
function sanitize_text( $text ) { $allowed_html = array("a" => array( "href" => array(), "title" => array(), "target" => array(),"class" => array(), "id" => array() ), "span" => array( "class" => array(), "id" => array() ), "br" => array(), "em" => array(), "strong" => array(),); return wp_kses( $text, $allowed_html );} 
function themesgenchild_register_theme_customizer( $wp_customize ) {	
$wp_customize->add_panel( "text_blocks", array(	"priority" => 68, "theme_supports" => "", "title" => __( "Slide Texts", "themesgenerator" ), "description" => __( "texto editable para cierto contenido.", "themesgenerator" ),)); 

##Slider A
$wp_customize->add_section( "customtgtext-1" , array("title" => __("Change slide label 1","themesgenerator"),	"panel"    => "text_blocks","priority" => 19) );
$wp_customize->add_setting( "tgtext-1", array( "default" => __( "Insert your text here", "themesgenerator" ), "sanitize_callback" => "sanitize_text"	) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, "customtgtext-1", array( "label"    => __( "Text 1", "themesgenerator" ), "section"  => "customtgtext-1", "settings" => "tgtext-1", "type"     => "text" ) ));
$wp_customize->selective_refresh->add_partial("tgtext-1", array("selector" => "#tgtext-1",));
##subtitle A
$wp_customize->add_setting( "tgtext-4", array( "default" => __( "Insert your text here", "themesgenerator" ), "sanitize_callback" => "sanitize_text"	) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, "customtgtext-4", array( "label"    => __( "Text 4", "themesgenerator" ), "section"  => "customtgtext-1", "settings" => "tgtext-4", "type"     => "textarea" ) ));
$wp_customize->selective_refresh->add_partial("tgtext-4", array("selector" => "#tgtext-4",));

##Slider B
$wp_customize->add_section( "customtgtext-2" , array("title" => __("Change slide label 2","themesgenerator"),	"panel"    => "text_blocks","priority" => 19) );
$wp_customize->add_setting( "tgtext-2", array( "default" => __( "Insert your text here", "themesgenerator" ), "sanitize_callback" => "sanitize_text"	) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, "customtgtext-2", array( "label"    => __( "Text 2", "themesgenerator" ), "section"  => "customtgtext-2", "settings" => "tgtext-2", "type"     => "text" ) ));
$wp_customize->selective_refresh->add_partial("tgtext-2", array("selector" => "#tgtext-2",));
##subtitle B
$wp_customize->add_setting( "tgtext-5", array( "default" => __( "Insert your text here", "themesgenerator" ), "sanitize_callback" => "sanitize_text"	) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, "customtgtext-5", array( "label"    => __( "Text 5", "themesgenerator" ), "section"  => "customtgtext-2", "settings" => "tgtext-5", "type"     => "textarea" ) ));
$wp_customize->selective_refresh->add_partial("tgtext-5", array("selector" => "#tgtext-5",));

##Slider C
$wp_customize->add_section( "customtgtext-3" , array("title" => __("Change slide label 3","themesgenerator"),	"panel"    => "text_blocks","priority" => 19) );
$wp_customize->add_setting( "tgtext-3", array( "default" => __( "Insert your text here", "themesgenerator" ), "sanitize_callback" => "sanitize_text"	) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, "customtgtext-3", array( "label"    => __( "Text 3", "themesgenerator" ), "section"  => "customtgtext-3", "settings" => "tgtext-3", "type"     => "text" ) ));
$wp_customize->selective_refresh->add_partial("tgtext-3", array("selector" => "#tgtext-3",));
##subtitle C
$wp_customize->add_setting( "tgtext-6", array( "default" => __( "Insert your text here", "themesgenerator" ), "sanitize_callback" => "sanitize_text"	) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, "customtgtext-6", array( "label"    => __( "Text 6", "themesgenerator" ), "section"  => "customtgtext-3", "settings" => "tgtext-6", "type"     => "textarea" ) ));
$wp_customize->selective_refresh->add_partial("tgtext-6", array("selector" => "#tgtext-6",));

}

/**
 * Text Titles.
 */
add_action( "customize_register", "themesgenchild_register_theme_customizer_1"); 
function sanitize_text_1( $text ) { $allowed_html = array("a" => array( "href" => array(), "title" => array(), "target" => array(),"class" => array(), "id" => array() ), "span" => array( "class" => array(), "id" => array() ), "br" => array(), "em" => array(), "strong" => array(),); return wp_kses( $text, $allowed_html ); } 
function themesgenchild_register_theme_customizer_1( $wp_customize ) {
$wp_customize->add_panel( "text_blocks_1", array(	"priority" => 69, "theme_supports" => "", "title" => __( "Titles", "themesgenerator" ), "description" => __( "texto editable para cierto contenido.", "themesgenerator" ),)); 

##Section News
$wp_customize->add_section( "customtgtext-7" , array("title" => __("Change Titles 1","themesgenerator"),	"panel"    => "text_blocks_1","priority" => 19) );
$wp_customize->add_setting( "tgtext-7", array( "default" => __( "Insert your text here", "themesgenerator" ), "sanitize_callback" => "sanitize_text_1"	) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, "customtgtext-7", array( "label"    => __( "Text 7", "themesgenerator" ), "section"  => "customtgtext-7", "settings" => "tgtext-7", "type"     => "text" ) ));
$wp_customize->selective_refresh->add_partial("tgtext-7", array("selector" => "#tgtext-7",));

##Section Goals
$wp_customize->add_section( "customtgtext-8" , array("title" => __("Change Title 2","themesgenerator"),	"panel"    => "text_blocks_1","priority" => 19) );
$wp_customize->add_setting( "tgtext-8", array( "default" => __( "Insert your text here", "themesgenerator" ), "sanitize_callback" => "sanitize_text_1"	) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, "customtgtext-8", array( "label"    => __( "Text 8", "themesgenerator" ), "section"  => "customtgtext-8", "settings" => "tgtext-8", "type"     => "text" ) ));
$wp_customize->selective_refresh->add_partial("tgtext-8", array("selector" => "#tgtext-8",));
##Subsection Goals a
$wp_customize->add_setting( "tgtext-8a", array( "default" => __( "Insert your text here", "themesgenerator" ), "sanitize_callback" => "sanitize_text_1"	) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, "customtgtext-8a", array( "label"    => __( "Text 8a", "themesgenerator" ), "section"  => "customtgtext-8", "settings" => "tgtext-8a", "type"     => "text" ) ));
$wp_customize->selective_refresh->add_partial("tgtext-8a", array("selector" => "#tgtext-8a",));
##Subsection Goals b
$wp_customize->add_setting( "tgtext-8b", array( "default" => __( "Insert your text here", "themesgenerator" ), "sanitize_callback" => "sanitize_text_1"	) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, "customtgtext-8b", array( "label"    => __( "Text 8b", "themesgenerator" ), "section"  => "customtgtext-8", "settings" => "tgtext-8b", "type"     => "text" ) ));
$wp_customize->selective_refresh->add_partial("tgtext-8b", array("selector" => "#tgtext-8b",));
##Content Goals a
$wp_customize->add_setting( "tgtext-8ac", array( "default" => __( "Insert your text here", "themesgenerator" ), "sanitize_callback" => "sanitize_text_1"	) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, "customtgtext-8ac", array( "label"    => __( "Text 8ac", "themesgenerator" ), "section"  => "customtgtext-8", "settings" => "tgtext-8ac", "type"     => "textarea" ) ));
$wp_customize->selective_refresh->add_partial("tgtext-8ac", array("selector" => "#tgtext-8ac",));
##Content Goals b
$wp_customize->add_setting( "tgtext-8bc", array( "default" => __( "Insert your text here", "themesgenerator" ), "sanitize_callback" => "sanitize_text_1"	) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, "customtgtext-8bc", array( "label"    => __( "Text 8bc", "themesgenerator" ), "section"  => "customtgtext-8", "settings" => "tgtext-8bc", "type"     => "textarea" ) ));
$wp_customize->selective_refresh->add_partial("tgtext-8bc", array("selector" => "#tgtext-8bc",));


##Section Activities
$wp_customize->add_section( "customtgtext-9" , array("title" => __("Change Title 3","themesgenerator"),	"panel"    => "text_blocks_1","priority" => 19) );
$wp_customize->add_setting( "tgtext-9", array( "default" => __( "Insert your text here", "themesgenerator" ), "sanitize_callback" => "sanitize_text_1"	) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, "customtgtext-9", array( "label"    => __( "Text 9", "themesgenerator" ), "section"  => "customtgtext-9", "settings" => "tgtext-9", "type"     => "text" ) ));
$wp_customize->selective_refresh->add_partial("tgtext-9", array("selector" => "#tgtext-9",));

##Section Galery
$wp_customize->add_section( "customtgtext-10" , array("title" => __("Change Title 4","themesgenerator"),	"panel"    => "text_blocks_1","priority" => 19, 'capability' => 'edit_theme_options') );
$wp_customize->add_setting( "tgtext-10", array( "default" => __( "Insert your text here", "themesgenerator" ), "sanitize_callback" => "sanitize_text_1"	) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, "customtgtext-10", array( "label"    => __( "Text 10", "themesgenerator" ), "section"  => "customtgtext-10", "settings" => "tgtext-10", "type"     => "text" ) ));
$wp_customize->selective_refresh->add_partial("tgtext-10", array("selector" => "#tgtext-10",));
}


/**
 * Other Texts.
 */
add_action( "customize_register", "themesgenchild_register_theme_customizer_2"); 
function sanitize_text_2( $text ) { $allowed_html = array("a" => array( "href" => array(), "title" => array(), "target" => array(),"class" => array(), "id" => array() ), "span" => array( "class" => array(), "id" => array() ), "br" => array(), "em" => array(), "strong" => array(),); return wp_kses( $text, $allowed_html ); } 
function themesgenchild_register_theme_customizer_2( $wp_customize ) {
$wp_customize->add_panel( "text_blocks_2", array(	"priority" => 69, "theme_supports" => "", "title" => __( "Other texts", "themesgenerator" ), "description" => __( "texto editable para cierto contenido.", "themesgenerator" ),)); 
##Section jumbotron
$wp_customize->add_section( "customtgtext-11" , array("title" => __("Change text jumbotron","themesgenerator"),	"panel"    => "text_blocks_2","priority" => 19, 'capability' => 'edit_theme_options') );
##Title jumbotron
$wp_customize->add_setting( "tgtext-11", array( "default" => __( "Insert your text here", "themesgenerator" ), "sanitize_callback" => "sanitize_text_2"	) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, "customtgtext-11", array( "label"    => __( "Text 11", "themesgenerator" ), "section"  => "customtgtext-11", "settings" => "tgtext-11", "type"     => "text" ) ));
$wp_customize->selective_refresh->add_partial("tgtext-11", array("selector" => "#tgtext-11",));
##Subitle jumbotron
$wp_customize->add_setting( "tgtext-12", array( "default" => __( "Insert your text here", "themesgenerator" ), "sanitize_callback" => "sanitize_text_2"	) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, "customtgtext-12", array( "label"    => __( "Text 12", "themesgenerator" ), "section"  => "customtgtext-11", "settings" => "tgtext-12", "type"     => "textarea" ) ));
$wp_customize->selective_refresh->add_partial("tgtext-12", array("selector" => "#tgtext-12",));


##Buttom in Single
$wp_customize->add_section( "customtgtext-13" , array("title" => __("Change Buttom Comment","themesgenerator"), "description" => __( "texto para el boton en las entradas.", "themesgenerator" ), "panel"    => "text_blocks_2","priority" => 25, 'capability' => 'edit_theme_options') );
## Comment
$wp_customize->add_setting( "tgtext-13", array( "default" => __( "Insert your text here", "themesgenerator" ), "sanitize_callback" => "sanitize_text_2"	) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, "customtgtext-13", array( "label"    => __( "Text 13", "themesgenerator" ), "section"  => "customtgtext-13", "settings" => "tgtext-13", "type"     => "text" ) ));
$wp_customize->selective_refresh->add_partial("tgtext-13", array("selector" => "#tgtext-13",));

##Section ubication
$wp_customize->add_section( "customtgtext-14" , array("title" => __("Change title 1 ","themesgenerator"), "description" => __( "Titulo para ubicacion", "themesgenerator" ), "panel"    => "text_blocks_2","priority" => 20, 'capability' => 'edit_theme_options') );
##Title ubication 
$wp_customize->add_setting( "tgtext-14", array( "default" => __( "Insert your text here", "themesgenerator" ), "sanitize_callback" => "sanitize_text_2"	) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, "customtgtext-14", array( "label"    => __( "Text 14", "themesgenerator" ), "section"  => "customtgtext-14", "settings" => "tgtext-14", "type"     => "text" ) ));
$wp_customize->selective_refresh->add_partial("tgtext-14", array("selector" => "#tgtext-14",));
##Text ubication 
$wp_customize->add_setting( "tgtext-15", array( "default" => __( "Insert your text here", "themesgenerator" ), "sanitize_callback" => "sanitize_text_2"	) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, "customtgtext-15", array( "label"    => __( "Text 15", "themesgenerator" ), "section"  => "customtgtext-14", "settings" => "tgtext-15", "type"     => "textarea" ) ));
$wp_customize->selective_refresh->add_partial("tgtext-15", array("selector" => "#tgtext-15",));

##Section Donar
$wp_customize->add_section( "customtgtext-18" , array("title" => __("Change Title of d","themesgenerator"),	"panel"    => "text_blocks_1","priority" => 19, 'capability' => 'edit_theme_options') );
$wp_customize->add_setting( "tgtext-18", array( "default" => __( "Insert your text here", "themesgenerator" ), "sanitize_callback" => "sanitize_text_2"	) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, "customtgtext-18", array( "label"    => __( "Text 18", "themesgenerator" ), "section"  => "customtgtext-18", "settings" => "tgtext-18", "type"     => "text" ) ));
$wp_customize->selective_refresh->add_partial("tgtext-18", array("selector" => "#tgtext-18",));
## Subsection Donar
$wp_customize->add_setting( "tgtext-18a", array( "default" => __( "Insert your text here", "themesgenerator" ), "sanitize_callback" => "sanitize_text_2"	) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, "customtgtext-18a", array( "label"    => __( "Text 18a", "themesgenerator" ), "section"  => "customtgtext-18", "settings" => "tgtext-18a", "type"     => "textarea" ) ));
$wp_customize->selective_refresh->add_partial("tgtext-18a", array("selector" => "#tgtext-18a",));

##Section Beneficios
$wp_customize->add_section( "customtgtext-19" , array("title" => __("Change Title of d","themesgenerator"),	"panel"    => "text_blocks_1","priority" => 19, 'capability' => 'edit_theme_options') );
$wp_customize->add_setting( "tgtext-19", array( "default" => __( "Insert your text here", "themesgenerator" ), "sanitize_callback" => "sanitize_text_2"	) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, "customtgtext-19", array( "label"    => __( "Text 19", "themesgenerator" ), "section"  => "customtgtext-19", "settings" => "tgtext-19", "type"     => "text" ) ));
$wp_customize->selective_refresh->add_partial("tgtext-19", array("selector" => "#tgtext-19",));
## Subsection Beneficios
$wp_customize->add_setting( "tgtext-19a", array( "default" => __( "Insert your text here", "themesgenerator" ), "sanitize_callback" => "sanitize_text_2"	) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, "customtgtext-19a", array( "label"    => __( "Text 19", "themesgenerator" ), "section"  => "customtgtext-18", "settings" => "tgtext-19a", "type"     => "textarea" ) ));
$wp_customize->selective_refresh->add_partial("tgtext-19a", array("selector" => "#tgtext-19a",));

}

////////////////////

add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );


/**
 * Enqueue your own stylesheet
 */
function wp_enqueue_woocommerce_style(){
	wp_register_style( 'mytheme-woocommerce', get_template_directory_uri() . '../css/bootstrap.min.css' );
	
	if ( class_exists( 'woocommerce' ) ) {
		wp_enqueue_style( 'mytheme-woocommerce' );
	}
}
add_action( 'wp_enqueue_scripts', 'wp_enqueue_woocommerce_style' );