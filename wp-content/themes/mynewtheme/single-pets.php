<?php

get_header();

$args = array('post_type'=>'pets');
$loop = new WP_Query($args);

?>
<div class="wrappper">
	<div class="all-pets">
		<?php
		while($loop->have_posts()) : $loop->the_post();
		?>

		<div class="product">
			<h1>this is single page</h1>
			<div class="thumbnail-product"><?php the_post_thumbnail(); ?></div>

			<div class="taxonomies"><?php the_taxonomies();?></div>
			<p><?php the_title();?></p>
			<?php
			echo '<div class="description">';
			the_content();

			?><a href="<?php the_permalink();?>">link</a><?php
			echo '</div></div>';
			endwhile;
			?>
		</div>
	</div>
</div>

