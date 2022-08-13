<?php
/*
    Template Name: Gallery
*/

get_header();
?>
<section class="contact section">
    <div class="container flex">
        <h1 class="section-heading" data-aos="fade-right"><?php the_field('gallery-heading') ?></h1>
        <div class="gallery">
            <?php 
                $images = get_field('gallery');
                if( $images ): ?>
                    <?php foreach( $images as $image ): ?>
                            <a href="<?php echo esc_url($image['url']); ?>">
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            </a>
                    <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>