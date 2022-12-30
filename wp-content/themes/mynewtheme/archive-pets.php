<?php
get_header();
$args = array('post_type'=> 'pets', 'post_par_page'=>5);
$loop = new WP_Query($args);
?>

	<div class="wrapper">
		<div class="all-pets">
			<?php
			while ($loop->have_posts()) : $loop->the_post();
			?>
			<div class="animal">
				<div class="thumbnail-pets"><?php the_post_thumbnail();?></div>
				<div class="taxonomies"><?php the_taxonomies();?></div>
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
