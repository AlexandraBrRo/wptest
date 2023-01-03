<?php get_template_part('inc/frontend/footers/global-footer', '', (!empty($args))  ? $args : [] );
$menuBtn = get_field('button-header', 'option');

?>


<footer>
    <div class="wrapper">
        <div class="logo-footer">
            <img src="<?= SVG_PATH ?>/logoApproved1.svg" alt="logo">
        </div>
        <div class="info-footer">
            <p>Cookie statement</p>
            <p>Approved Selection is a part of Flex IT Distribution</p>
            <p>&copy 2021 - Flex IT </p>
        </div>

    </div>
</footer>

<?php wp_footer(); ?>


