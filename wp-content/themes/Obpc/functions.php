<?php
add_action( 'after_setup_theme', 'theme_setup' );

/**
 * Customização do Admin
 */
require get_template_directory() . '/inc/custom-admin/custom-admin.php';

/**
 * Marca
 */
require get_template_directory() . '/inc/marca.php';

/**
 * Customizer
 */
require get_template_directory() . '/inc/customize.php';

/**
 * Registro de Sidebar
 */
require get_template_directory() . '/inc/sidebars.php';

/**
 * Registro de Custom Posts
 */
require get_template_directory() . '/inc/custom_post.php';

/**
 * Background com Thumbnail
 * Usar <?php thumbnail_bg( 'full' ); ?>
 */
function thumbnail_bg ( $tamanho = 'thumbnail' ) {
	global $post;
	$get_post_thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), $tamanho, false, '' );
	echo $get_post_thumbnail[0];
}


/**
 * Carregar Pressets
 */
function theme_setup(){
	load_theme_textdomain( 'theme', get_template_directory() . '/languages' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	global $content_width;
	
	if ( ! isset( $content_width ) ) $content_width = 640;
}

/**
 * Registrando Menus
 * Usar <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
 */
function register_theme_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' )
    )
  );
}
add_action( 'init', 'register_theme_menus' );

/**
 * Enqueue scripts and styles.
 */
function theme_scripts() {
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/slick.css');
	wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/assets/css/slick-theme.css');
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css');
	wp_enqueue_style( 'theme-style', get_stylesheet_uri() );

	wp_enqueue_script('jquery');

	wp_enqueue_script( 'mask', get_template_directory_uri() . '/assets/js/lib/jquery.maskedinput.min.js');
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/lib/slick.min.js');
	wp_enqueue_script( 'scripts', get_template_directory_uri() . '/assets/js/script.js');
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );

/**
 * Pagination
 * Usar <?php wp_pagination();?>
 */
require get_template_directory() . '/inc/pagination.php';

/**
 * Breadcrumbs
 * Usar <?php wp_custom_breadcrumbs(); ?>
 */
require get_template_directory() . '/inc/breadcrumbs.php';

/**
 * Theme Options
 * Usar <?php $options = get_option( $option_name ); ?>
 */
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title'	=> 'Opções do Tema',
		'menu_title'	=> 'Opções do Tema',
		'menu_slug'		=> 'theme-options',
		'capatibility'	=> 'edit_posts',
		'parent_slug'	=> '',
		'position'		=> false,
		'icon_url'		=> false,
		));
}

/**
 * Limitando Excerpt
 */
function excerpt($limit) {
	$excerpt = explode(' ', get_the_excerpt(), $limit);
	if (count($excerpt)>=$limit) {
		array_pop($excerpt);
		$excerpt = implode(" ",$excerpt).'...';
	} else {
		$excerpt = implode(" ",$excerpt);
	}
	$excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
	return $excerpt;
}

/**
 * Redirect non-admins to the homepage after logging into the site.
 *
 * @since 	1.0
 */
function acme_login_redirect( $redirect_to, $request, $user  ) {
	return ( is_array( $user->roles ) && in_array( 'administrator', $user->roles ) ) ? admin_url() : site_url();
}
add_filter( 'login_redirect', 'acme_login_redirect', 10, 3 );






