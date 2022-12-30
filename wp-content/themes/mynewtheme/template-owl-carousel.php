<?php

/**
 *  *Template name: Owl carousel
 */

get_header();
//wp_enqueue_style('owl-css', CSS_PATH . '/dist/owl.carousel.min.css', '1.0.0', true);
wp_enqueue_script('owl-css', CSS_PATH . '/dist/owl.carousel.min.css', '1.0.0', true);
wp_enqueue_script('owl-carousel',JS_PATH . '/dist/owl.carousel.min.js', '1.0.0', true);

wp_enqueue_script('my-custom-script', get_template_directory_uri() .'/js/my-custom-script.js', array('jquery'), null, true);
?>

<h1></h1>

<?php
get_footer();
?>


