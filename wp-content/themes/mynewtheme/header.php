<?php get_template_part('inc/frontend/headers/global-header', '', (!empty($args))  ? $args : [] );
$menuBtn = get_field('button-header', 'option');

?>


<header>
    <div class="wrapper">
        <div>
            <a href="<?php get_bloginfo('url');  ?>" ><img src="<?= SVG_PATH ?>/logoApproved.svg" alt="logo"></a>
        </div>
        <a class="main-button" href="<?= $menuBtn['url'] ?>" target="<?= $menuBtn['target'] ?>"><?= $menuBtn['title'] ?></a>
    </div>
</header>

<?php wp_head(); ?>