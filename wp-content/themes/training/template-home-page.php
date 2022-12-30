<?php
/**
* * Template name: my new template
*/

?>
<?php
$text = get_field('first_field');
//var_dump($text);
$description = get_field('description');
$img = get_field('image');
//print_r($img);
?>

<div class="post">
    <div class="img">
        <img src="<?=$img['sizes']['thumbnail']?>" alt="">
    </div>
    <div class="description">
        <h1><?=$text?></h1>
        <p><?=$description?></p>
    </div>
</div>



