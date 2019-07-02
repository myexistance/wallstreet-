<?php

require get_template_directory() . '/inc/theme-support.php';

function add_custom_files(){
    wp_enqueue_style('my_bootstrap_file', get_template_directory_uri() . '/assets/css/bootstrap.css' , array(), '4.3.1');

    wp_enqueue_style('my_custom_stylesheet', get_template_directory_uri() . '/assets/css/wallstreet.css' , array(), '0.1');

    wp_enqueue_script('jquery');

    wp_enqueue_script('my_bootstrap_script', get_template_directory_uri() . '/assets/js/bootstrap.js', array(), '4.3.1', true);

    // wp_enqueue_script('show_more_posts', get_template_directory_uri() . '/assets/js/showMore.js', array('jquery'), '0.1', true);

    // global $wp_query;
    //
    // $currentPage = get_query_var('paged');
    // if($currentPage == 0){
    //     $currentPage = 1;
    // }

    // wp_localize_script('show_more_posts', 'load_more', array(
    //     'ajax_url' => site_url() . '/wp-admin/admin-ajax.php',
    //     'query' => json_encode($wp_query->query_vars),
    //     'max_page' => $wp_query->max_num_pages,
    //     'current_page' => $currentPage
    // ));

};
add_action('wp_enqueue_scripts', 'add_custom_files');




function register_my_menu() {
    register_nav_menu('left_menu','The menu which appears at the left of the page');
    register_nav_menu('right_menu','The menu which appears at the right of the page');
}
add_action( 'init', 'register_my_menu' );

// Register Custom Navigation Walker
require_once get_template_directory() . '/assets/class-wp-bootstrap-navwalker.php';


// custom logo
add_theme_support( 'custom-logo' );
function wallstreet_custom_logo_setup() {
 $defaults = array(
 'height'      => 180,
 'width'       => 180,
 'flex-height' => true,
 'flex-width'  => true,
 'header-text' => array( 'site-title', 'site-description' ),
 );
 add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'wallstreet_custom_logo_setup' );






add_theme_support( 'custom-header' );

function wallstreet_custom_header_setup() {
    $defaults = array(
        // Default Header Image to display
        'default-image'         => get_template_directory_uri() . '/images/The+Brook+WP+Main+DPS.jpg',
        // Display the header text along with the image
        'header-text'           => false,
        // Header text color default
        'default-text-color'        => '000',
        // Header image width (in pixels)
        'width'             => 1000,
        // Header image height (in pixels)
        'height'            => 400,
        // Header image random rotation default
        'random-default'        => false,
        // Enable upload of image file in admin
        'uploads'       => true,
        // function to be called in theme head section
        'wp-head-callback'      => 'wphead_cb',
        //  function to be called in preview page head section
        'admin-head-callback'       => 'adminhead_cb',
        // function to produce preview markup in the admin screen
        'admin-preview-callback'    => 'adminpreview_cb',
        );
}
add_action( 'after_setup_theme', 'wallstreet_custom_header_setup' );


require get_template_directory() . '/inc/custom_post_types.php';


require get_template_directory() . '/inc/custom_fields.php';


  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'title-tag' );


  add_image_size( 'featured-large', 640, 294, true ); // width, height, crop
  add_image_size( 'featured-small', 320, 147, true );



add_theme_support( 'post-formats', array( 'link') );

//custom post type

function wallstreet_custom_post_type (){

	$labels = array(
		'name' => 'Residential',
		'singular_name' => 'Residential',
		'add_new' => 'Add Item',
		'all_items' => 'All Items',
		'add_new_item' => 'Add Item',
		'edit_item' => 'Edit Item',
		'new_item' => 'New Item',
		'view_item' => 'View Item',
		'search_item' => 'Search Portfolio',
		'not_found' => 'No items found',
		'not_found_in_trash' => 'No items found in trash',
		'parent_item_colon' => 'Parent Item'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array(
			'title',
			'editor',
			'thumbnail',
			'revisions',
		),
		'taxonomies' => array('category', 'post_tag'),
		'menu_position' => 5,
		'exclude_from_search' => false
	);
  $labels1 = array(
		'name' => 'Commercial',
		'singular_name' => 'Commercial',
		'add_new' => 'Add Item',
		'all_items' => 'All Items',
		'add_new_item' => 'Add Item',
		'edit_item' => 'Edit Item',
		'new_item' => 'New Item',
		'view_item' => 'View Item',
		'search_item' => 'Search Portfolio',
		'not_found' => 'No items found',
		'not_found_in_trash' => 'No items found in trash',
		'parent_item_colon' => 'Parent Item'
	);
	$args1 = array(
		'labels' => $labels1,
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'supports' => array(
			'title',
			'editor',
			'thumbnail',
			'revisions',
		),
		'taxonomies' => array('category', 'post_tag'),
		'menu_position' => 6,
		'exclude_from_search' => false
	);
	register_post_type('residential',$args);
  register_post_type('commercial',$args1);
}
add_action('init','wallstreet_custom_post_type');

function add_google_fonts() {
wp_enqueue_style( ' add_google_fonts ', ' https://fonts.googleapis.com/css?family=Open+Sans:300,400', false );}
add_action( 'wp_enqueue_scripts', 'add_google_fonts' );
