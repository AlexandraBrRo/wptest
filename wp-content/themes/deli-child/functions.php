<?php

function shoptimizer_child_enqueue_scripts(){
	$parent_style = 'shoptumizer-style';
	$parent_base_dir = 'shoptimizer';
	wp_enqueue_style($parent_style, get_template_directory_uri() . '/stile.css', array(), wp_get_theme($parent_base_dir) ? wp_get_theme($parent_base_dir)->get('Version') : '');

	if(is_rtl()){
		wp_enqueue_style('shoptimizer-rtl', get_template_directory_uri() . '/rtl.css', array(), wp_get_theme($parent_base_dir) ? wp_get_theme($parent_base_dir)->get('Version') : '');
	}

	wp_enqueue_style('shoptimizer-child-style', get_template_directory_uri() . '/assets/css/styles.css', array($parent_style));
}

add_action('wp_enqueue_scripts', 'shoptimizer_child_enqueue_scripts');

//add_filter('woocommerce_product_add_to_cart_text', 'woocommerce_custom_product_add_to_cart_text');
//function woocommerce_custom_product_add_to_cart_text(){
//	return __('Buy Now', 'woocommerce');
//}