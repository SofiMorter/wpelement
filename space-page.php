<?php
/*
Template Name: Страница пространства
*/
?>
<?php get_header(); ?>

<div class="space-header-img" style="background-image: url(<?php echo get_field('kartinka-zagolovok')['url']; ?>);">
</div>
<section class="space-page-sec">
    <h3>
        <?php the_field('zagolovok'); ?>
</h3>

    <p class="space-page-p">
        <?php the_field('kratkoe_opisanie'); ?>
    </p>
</section>
<section class="space-page-sec" style="width: 100%">
    <div class="space-page-p">
        <?php the_field('podrobnoe_opisanie'); ?>
    </div>



    <div class="fotorama1 space-slider" 
     data-autoplay="true" 
     data-loop="true" 
     data-arrows="true" 
     data-click="true" 
     data-swipe="true" 
     data-fit="cover">
        <img src="<?php echo get_field('space-slider1')['url']; ?>" alt="">
        <img src="<?php echo get_field('space-slider2')['url']; ?>" alt="">
        <img src="<?php echo get_field('space-slider3')['url']; ?>" alt="">
        <img src="<?php echo get_field('space-slider4')['url']; ?>" alt="">
        <img src="<?php echo get_field('space-slider5')['url']; ?>" alt="">
    </div>



</section>

<section class="prods">
    <h3>Товары</h3>
<div class="prods-grid">
<?php the_field('produkty'); ?>
</div>

<a href="../catalog/"><button type="button" name="button">В каталог</button></a>
</section>









<?php get_footer(); ?>