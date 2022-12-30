<?php get_header();?>


<!doctype html>
<html lang="en">
<?php global $wp;?>
<head>
	<meta charset="UTF-8">
	<title><?php wp_title(''); ?></title>
	<?php wp_head(); ?>
</head>
<?php
$bodyClasses = ($args['body_classes'] ?? '');
?>
<body <?php body_class($bodyClasses); ?>>

<p>Hello world</p>


</body>
</html>
