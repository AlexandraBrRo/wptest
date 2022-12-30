<?php
get_header();
?>

<div class="wrapper">
        <div class="filter">
            <?php
            get_template_part('templates/filter' , '', (!empty($args)) ? $args : []);
            ?>
        </div>
        <div class="all-laptop">
			<?php
			while (have_posts()) : the_post();
			?>
            <div class="product">
                <div class="thumbnail-product"><?php the_post_thumbnail();?></div>
				<?php
                the_title();
//				the_content();
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
