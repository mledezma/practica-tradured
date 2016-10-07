<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Events Section Content',
		'id'            => 'events_section_content',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );



/*
 * Custom Post Type - Team Members
*/
function team_post_type() {

   // Labels
	$labels = array(
		'name' => _x("Team", "post type general name"),
		'singular_name' => _x("Team", "post type singular name"),
		'menu_name' => 'Miembros del equipo',
		'add_new' => _x("Add New", "team item"),
		'add_new_item' => __("Add New Profile"),
		'edit_item' => __("Edit Profile"),
		'new_item' => __("New Profile"),
		'view_item' => __("View Profile"),
		'search_items' => __("Search Profiles"),
		'not_found' =>  __("No Profiles Found"),
		'not_found_in_trash' => __("No Profiles Found in Trash"),
		'parent_item_colon' => ''
	);

	// Register post type
	register_post_type('team' , array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => false,
		'rewrite' => false,
		'supports' => array('title', 'editor', 'thumbnail')
	) );
}
add_action( 'init', 'team_post_type', 0 );


/*
 * Custom Post Type - Reviews
*/
function review_post_type() {

   // Labels
	$labels_review = array(
		'name' => _x("Review", "post type general name"),
		'singular_name' => _x("Review", "post type singular name"),
		'menu_name' => 'Reviews',
		'add_new' => _x("Add New", "review item"),
		'add_new_item' => __("Add New Review"),
		'edit_item' => __("Edit Review"),
		'new_item' => __("New Review"),
		'view_item' => __("View Review"),
		'search_items' => __("Search Reviews"),
		'not_found' =>  __("No Reviews Found"),
		'not_found_in_trash' => __("No Reviews Found in Trash"),
		'parent_item_colon' => ''
	);

	// Register post type
	register_post_type('review' , array(
		'labels' => $labels_review,
		'public' => true,
		'has_archive' => false,
		'rewrite' => false,
		'supports' => array('title', 'editor', 'thumbnail')
	) );
}
add_action( 'init', 'review_post_type', 0 );


/*
 * Custom Post Type - Events
*/
function event_post_type() {

   // Labels
	$labels_event = array(
		'name' => _x("Event", "post type general name"),
		'singular_name' => _x("Event", "post type singular name"),
		'menu_name' => 'Events',
		'add_new' => _x("Add New", "event item"),
		'add_new_item' => __("Add New Event"),
		'edit_item' => __("Edit Event"),
		'new_item' => __("New Event"),
		'view_item' => __("View Event"),
		'search_items' => __("Search Events"),
		'not_found' =>  __("No Events Found"),
		'not_found_in_trash' => __("No Events Found in Trash"),
		'parent_item_colon' => ''
	);

	// Register post type
	register_post_type('event' , array(
		'labels' => $labels_event,
		'public' => true,
		'has_archive' => false,
		'rewrite' => false,
		'supports' => array('title', 'editor', 'thumbnail')
	) );
}
add_action( 'init', 'event_post_type', 0 );


/*
 * Custom Menu
*/
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );


function mytheme_post_thumbnails() {
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'mytheme_post_thumbnails' );
?>
