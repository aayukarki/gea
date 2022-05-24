<?php
get_header();
get_template_part('parts/section', 'banner'); 
if (have_posts()) {
    while (have_posts()) {
        the_post();
        ?>
        <section class="inner-wrapper ">
            <div class="container">
                <?php the_content(); ?>
            </div>
        </section>
        <?php
    }
    wp_reset_postdata();
}
?>
<section class="review-and-contact">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <div class="icon-holder1">
                    <img src="<?= get_template_directory_uri() ?>/images/testimonial-icon1.png" />
                </div>
                <?php get_template_part('parts/section', 'testimonials'); ?>
                <div class="icon-holder2">
                    <img src="<?= get_template_directory_uri() ?>/images/testimonial-icon2.png" />
                </div>
                <?php get_template_part('parts/section', 'enquiry-form'); ?>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
?>