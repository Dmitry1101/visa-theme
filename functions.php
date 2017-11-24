<?php
/**
 * visa_reservation functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package visa_reservation
 */

if ( ! function_exists( 'visa_reservation_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function visa_reservation_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on visa_reservation, use a find and replace
		 * to change 'visa_reservation' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'visa_reservation', get_template_directory() . '/languages' );

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
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'visa_reservation' ),
			'menu-2' => esc_html__( 'Language', 'visa_reservation' ),

			'menu-foot-1' => esc_html__( 'Footer 1', 'visa_reservation' ),
			'menu-foot-2' => esc_html__( 'Footer 2', 'visa_reservation' ),
			'menu-foot-3' => esc_html__( 'Footer 3', 'visa_reservation' ),

		) );

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
		add_theme_support( 'custom-background', apply_filters( 'visa_reservation_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'visa_reservation_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function visa_reservation_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'visa_reservation_content_width', 640 );
}
add_action( 'after_setup_theme', 'visa_reservation_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function visa_reservation_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'visa_reservation' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'visa_reservation' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'visa_reservation_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function visa_reservation_scripts() {
	wp_enqueue_style( 'visa_reservation-style', get_stylesheet_uri() );

	wp_enqueue_style( 'visa_reservation--sprite-css', get_template_directory_uri() . '/dist/css/sprite.css' );

	wp_enqueue_style( 'visa_reservation--main-css', get_template_directory_uri() . '/dist/css/main.css' );

	wp_enqueue_style( 'visa_reservation--grav-styles-css', get_template_directory_uri() . '/dist/css/custom-grav-form.css' );

	wp_enqueue_script( 'visa_reservation-all-js', get_template_directory_uri() . '/dist/js/all.js', array(), '20151215', true );
	wp_enqueue_script( 'init', get_template_directory_uri() . '/dist/js/init.js', array(), '20151215', true );

	// wp_enqueue_script( 'visa_reservation-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'visa_reservation_scripts' );

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



add_filter("gform_init_scripts_footer", "init_scripts");
function init_scripts() {
	return true;
}



if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}



function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }	
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}
 
function content($limit) {
  $content = explode(' ', get_the_content(), $limit);
  if (count($content)>=$limit) {
    array_pop($content);
    $content = implode(" ",$content).'...';
  } else {
    $content = implode(" ",$content);
  }	
  $content = preg_replace('/[.+]/','', $content);
  $content = apply_filters('the_content', $content); 
  $content = str_replace(']]>', ']]&gt;', $content);
  return $content;
}













//EMAIL SENDING
add_action( 'wp_footer', 'kd89_ajx_mail_fun', 100 );
function  kd89_ajx_mail_fun(){

  //Ajax SENDING EMAIL frontend side ?>
  <script>
		

    (function($){
    
      var ajaxUrl = "<?php echo admin_url('admin-ajax.php')?>";


      $('body').on('click', '.morre', function(e){

      	e.preventDefault();	
      	var obj = {};

        obj.latesst  = $('.blog__list .blog__item').length;	
        // $('.kd-preload').css('display',)
        $('.kd-preload').fadeIn(300);	
        console.log( obj );

        $.post( ajaxUrl , {
         	latesst: obj.latesst,
          action:   "kd_89_mail_sending",
        }).done(function( rezz ){ 
        	$('.blog__list').append( rezz );	     
        	$('.kd-preload').fadeOut(300);	

        });

      });



     
    
    
    
    }) (jQuery);


  </script><?php
}




//Ajax Sending email server side
function kd_89_mail_sending( ){
  header("Content-Type: text/html");

  
		$args = array(
								
			// Type & Status Parameters
			'post_type'   => 'post',
	
			// Order & Orderby Parameters
			'order'               => 'DESC',
			'orderby'             => 'date',
	
			// Pagination Parameters
			'posts_per_page'         => 6,
			'offset'                 => $_POST['latesst'],
		);
		

		// the query
		$kd2_query = new WP_Query( $args );  

		if ( $kd2_query->have_posts() ) : 

			 while ( $kd2_query->have_posts() ) : $kd2_query->the_post(); ?>

				<div data-id="<?php echo get_the_ID(); ?>" class="blog__item" style="background: url('<?php echo get_the_post_thumbnail_url( get_the_ID(), "medium_large" ); ?>') center no-repeat; -webkit-background-size: cover; background-size: cover;">
					<div class="blog__img">
						<img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), "medium_large" ); ?>" alt="">	
					</div>				
					<div class="blog__content">
						<div class="blog__date"><?php the_time('M j, Y'); ?> | <?php echo get_comments_number(); ?> comments</div>
						<div class="blog__content-title">

							<?php the_title(); ?>
						
						</div>
						<div class="blog__content-txt">
							<p>
								<?php 
									echo excerpt(30);
								?>
							</p>
						</div>
						<p class="blog__content-read">
							<a href="<?php the_permalink(); ?>">Read More ></a>
						</p>
					</div>
				</div>	
				
			<?php 
			endwhile; 
				
			wp_reset_postdata(); 

		endif; 

  exit; 
}
add_action('wp_ajax_nopriv_kd_89_mail_sending', 'kd_89_mail_sending'); 
add_action('wp_ajax_kd_89_mail_sending', 'kd_89_mail_sending');

