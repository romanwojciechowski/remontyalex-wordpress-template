<?php
/*
    Template Name: Home
*/

get_header();
?>

<section class="hero">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <?php if( have_rows('slider') ): ?>
                <?php while( have_rows('slider') ): the_row(); ?>
                    <div class="swiper-slide" style="background-image: url('<?php image('slider-image') ?>');"></div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <div class="hero-container container flex">
        <div class="hero__heading" data-aos="fade-right">
            <div class="hero__heading--title"><?php the_field('hero-heading') ?></div>
        </div>
        <a href="#offer" class="btn" data-aos="fade-right"><?php the_field('hero-button') ?></a>
    </div>
</section>

<section class="about" id="about">
    <div class="container flex">
        <h1 class="about-heading" data-aos="fade-right"><?php the_field('about-heading') ?></h1>
        <ol class="about-gradient-list">
            <?php if( have_rows('about-list') ): ?>
                <?php while( have_rows('about-list') ): the_row(); ?>
                    <li data-aos="fade-right"><?php the_sub_field('about-list-item') ?></li>
                <?php endwhile; ?>
            <?php endif; ?>
        </ol>
    </div>
</section>



<?php get_footer(); ?>