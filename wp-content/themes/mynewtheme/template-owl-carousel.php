<?php

/**
 *  *Template name: Owl carousel
 */

get_header();
wp_enqueue_style('owl-css', CSS_PATH . '/dist/owl.carousel.min.css','1.0.0', true);
wp_enqueue_script('owl-carousel',JS_PATH . '/dist/owl.carousel.min.js', ['jquery'], true);
wp_enqueue_script('product',JS_PATH . '/slider-owl.js', ['jquery'], '1.0.0',true);

//wp_enqueue_script('my-custom-script', get_template_directory_uri() .'/js/my-custom-script.js', array('jquery'), null, true);

$args = array('post_type'=> 'laptop');
$loop = new WP_Query($args);
?>
<div class="wrapper">
    <div class="owl-carousel owl-theme">
	<?php
	while ($loop->have_posts()) : $loop->the_post();
	?>

        <div class="product item">
            <div class="thumbnail-product"><?php the_post_thumbnail('100px');?></div>
            <div class="taxonomies"><?php the_taxonomies();?></div>
            <p><?php the_title(); ?></p>
            <?php
            echo '<div class="description">';
            the_content();
            ?> <a href="<?php the_permalink();?>">link</a><?php
            echo '</div></div>';
            endwhile;
            ?>

        </div>
    </div>
</div>


<?php
get_footer();
?>


