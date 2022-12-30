<?php
$menuBtn = get_field('button', 'option');

?>

<header>
	<div class="wrapper">
		<div>
			<img src="<?= SVG_PATH ?>/logo.svg" alt="logo">
		</div>
		<a href="<?= $menuBtn['url'] ?>" target="<?= $menuBtn['target'] ?>"><?= $menuBtn['title'] ?></a>
	</div>
</header>
