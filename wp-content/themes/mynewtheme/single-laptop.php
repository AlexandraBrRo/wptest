<?php
get_header();

while (have_posts() ) : the_post(); ?>
    <div class="background">
        <div class="wrapper">
            <div class="product-img">
                <div class="img-inside">
					<?='<a href="' . get_permalink( $post->ID ) . '" title="' . esc_attr( $post->post_title ) . '">' .
					   get_the_post_thumbnail( $post->ID, array(500, 500) ) . '</a>';
					?>
                </div>
            </div>
            <div class="right-description">
                <img src="<?= SVG_PATH ?>/logoApproved.svg" alt="logo">
				<?= get_the_content($post->ID) ?>
                <div class="taxonomies"><?php the_taxonomies();?></div>
                <a href="" class="main-button">ADD TO CART</a>
            </div>
        </div>
    </div>

<?php endwhile;
get_footer();
?>
