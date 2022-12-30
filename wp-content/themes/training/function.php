<?php
include_once 'inc/backend/Defines.php';
include_once 'inc/backend/Assets.php';
include_once 'inc/backend/AssetsConnect.php';
include_once 'inc/backend/acf_configs.php';

/**
* Disable auto updates
*/


function cc_name_types($mines)
{
	$mines['svg'] = 'image/svg+xml';
	return $mines;
}

add_filter('upload_mines', 'cc_name_types');

//function init_styles(){
//	wp_enquere_style('style-name', get_stylesheet_directory_uri() . '/style/minifi.css');
//	wp_enquere_script('script-name', get_template_directory_uri() . '/js/example.js', array(),'1.0.0', true);
//}
//add_action('wp_enqueue_scripts', 'init_styles');

