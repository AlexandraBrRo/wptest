<?php
/**
 * * Template name: Home page
 */
get_header();
?>

<?php
    $heroSection = get_field('hero_section');
    // var_dump($heroSection);
    $heroTitle = $heroSection['title'];
    $heroDescription = $heroSection['description'];
    $heroGreenButton = $heroSection['green_button'];
    $heroUrlLink = $heroSection['url_link'];
    $heroImage = $heroSection['image'];

    $heroTitleItem = $heroSection['title_item'];
    $heroTitlePart = $heroTitleItem['title_part_copy2'];
    $heroTitlePart2 = $heroTitleItem['title_part_copy3'];

    $rectanglePanel = $heroSection['rectangle_panel'];
    $heroCirculaireTitle = $heroSection['circulaire_title'];
    $heroCirculaireText = $heroSection['circulaire_text'];
    $heroCirculaireTitleList = $heroSection['title_circulaire_list'];
    $heroCirculaireList = $heroSection['circulaire_list'];
    $heroApprovedTitle = $heroSection['approved_title'];
    $heroApprovedText = $heroSection['approved_text'];
    $heroApprovedButton = $heroSection['approved_green_button'];
    $heroFlexitTitle = $heroSection['flexit_title'];
    $heroFlexitText = $heroSection['flexit_text'];
    $heroFlexitButton = $heroSection['flexit_button'];
    $heroHPtitle = $heroSection['hp_title'];
    $heroHPtext = $heroSection['hp_text'];
    $heroDiferentColor = $heroSection['title_with_diferent_color'];

//    $seperatedText = explode("/", $heroDiferentColor );
    $seperatedText = explode("/", $heroFlexitTitle );

    $secondSection = get_field('second_section');
    $secondMyForm = $secondSection['contact_form'];

?>

<?php
$args = array(
        'theme_location' => 'top_menu',
        'menu_id' => 'second',
        'container_class' => 'test',
        'container_aria_label' => 'custom',
//        'container'=> 'div',
);
wp_nav_menu($args);

?>
<div class="main">

    <div class="background-wrapper">
        <div class="wrapper">
            <div class="left-side">
                <h1 class="title"><?= $heroTitle ?></h1>
                <P class="description"><?= $heroDescription ?></P>
                <div class="buttons">
                    <a class="main-button long-button" href="<?= $heroGreenButton['url'] ?>" target="<?= $heroGreenButton['target'] ?>"><?= $heroGreenButton['title'] ?></a>
                    <a class="button-url" href="<?= $heroUrlLink['url']?>" target="<?= $heroUrlLink['target']?>"><?= $heroUrlLink['title'] ?></a>
                </div>
            </div>

            <div class="right-side">
                <div class="txt-img">
                    <span><?=$heroTitleItem['title_part'] ?></span>
                    <div class="line-txt"></div>
                </div>
                <div class="txt1-img">
                    <span><?=$heroTitleItem['title_part_copy'] ?></span>
                    <div class="line-txt"></div>
                </div>
                <div class="txt2-img">
                    <span><?=$heroTitlePart['title_part'] ?></span>
                    <div class="line-txt"></div>
                    <p class="block-txt"><?=$heroTitlePart['info_text'] ?></p>
                </div>
                <div class="img-part">
                    <img src="http://wptest/wp-content/uploads/2022/11/rectangle.png" alt="">
                </div>
                <div class="txt3-img txt-right">
                    <span><?=$heroTitlePart2['title_part'] ?></span>
                    <div class="line-txt"></div>
                    <p class="block-txt move-txt"><?=$heroTitlePart2['info_text']?></p>
                </div>
            </div>
        </div>
        <div class="panel-list wrapper">
            <?php $i = 1 ?>
            <?php
            foreach ($rectanglePanel as $item):
                if($item['item'] !== "") {
            ?>
                <div class="position item-<?=$i++ ?>">
                    <div class="element-panel">
                        <div class="rectangle-btn">
                            <a class="rectangle-txt" href="<?=$item['voordeel_block']['title'] ?>"><?=$item['voordeel_block']['title'] ?></a>
                        </div>
                    </div>
                </div>
            <?php
                }
            endforeach;
            ?>
        </div>
        <div class="circulaire-block wrapper">
            <div class="circulaire-left">
                <h2 class="title circulaire-title"><?= $heroCirculaireTitle ?></h2>
                <div class="circulaire-img">
                    <img src="http://wptest/wp-content/uploads/2022/12/circular1.png" alt="">
                    <img class="img-centered" src="http://wptest/wp-content/uploads/2022/12/circular2.png" alt="">
                    <img src="http://wptest/wp-content/uploads/2022/12/circular3.png" alt="">
                </div>
            </div>
            <div class="circulaire-right">
                <div class="circulaire-txt-block">
                    <?php $i = 1 ?>
                    <?php foreach ($heroCirculaireText as $item){?>
                        <div class="position item-<?=$i++ ?>">
                            <div class="circulaire-text">
                                <p class="circulaire-text-element"><?=$item['text'] ?></p>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <h3 class="title-list"><?= $heroCirculaireTitleList ?></h3>
                <div class="circulaire-list">
                    <?php $i = 1 ?>
                    <?php foreach ($heroCirculaireList as $item){?>
                        <div class="position item-<?=$i++ ?>">
                            <ul class="decor-list">
                                <li><?=$item['term_of_the_list'] ?></li>
                            </ul>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="color-block">
            <div class="wrapper approved-block ">
                <div class="approved-left">
                    <img src="http://wptest/wp-content/uploads/2022/12/approved.png" alt="">
                </div>
                <div class="approved-right">
                    <h2 class="title approved-title"><?= $heroApprovedTitle ?></h2>
                    <div class="approved-txt-block">
                        <?php $i = 1 ?>
                        <?php
                        foreach ($heroApprovedText as $item){?>
                            <div class="position item-<?=$i++ ?>">
                                <div class="approved-text">
                                    <p class="approved-text-element"><?=$item['text'] ?></p>
                                </div>
                            </div>
                        <?php
                        };                         
                        ?>
                    </div>
                    <a class="main-button long-button" href="<?= $heroApprovedButton['url'] ?>" target="<?= $heroApprovedButton['target'] ?>"><span class="long-btn"><?= $heroApprovedButton['title'] ?></span></a>
                </div>
            </div>
        </div>
        <div class="flexit-block wrapper">
            <div class="flexit-left">
                <h2><span><?= $seperatedText[0]?></span> <b><?= $seperatedText[1]?></b></h2>
                <h3><?= $heroFlexitText ?></h3>
                <a class="main-button long-button" href="<?= $heroFlexitButton['url'] ?>" target="<?= $heroFlexitButton['target'] ?>"><span class="long-btn"><?= $heroFlexitButton['title'] ?></span></a>
            </div>
            <div class="flexit-right approved-left">
                <img src="http://wptest/wp-content/uploads/2022/12/flexit.png" alt="">
            </div>
        </div>
        <div class="color-block hp-block">
            <div class="hp-img">
                <img src="http://wptest/wp-content/uploads/2022/12/xp_img.png" alt="">
            </div>
            <div class="hp-txt">
                <h2><?= $heroHPtitle ?></h2>
                <h3><?= $heroHPtext ?></h3>
            </div>
        </div>
        <div class="wrapper">
            <div  class="txt-form">
                <h2 class="title-form">Meer weten over circulaire IT?</h2>
                <span class="">Neem contact met ons op</span>
            </div>
        </div>
        <div class="wrapper form-block">
            <span><?= do_shortcode($secondMyForm)?></span>
        </div>
        <?php get_footer();?>
    </div>
</div>







