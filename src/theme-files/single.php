<?php
get_header();

get_template_part('parts/section', 'banner');
$fields = get_fields(get_the_ID());

if (have_posts()) {
    while (have_posts()) {
        the_post();
        ?>
        <div class="inner-blog-section" data-aos="fade-up">
            <div class="container">
                <div class="inner-blog">
                    <!-- <h2 class="font-hk font-weight-bold"><?= get_the_title(); ?></h2> -->
                </div>
                <div class="inner-blog-part">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
        <?php
    }
    wp_reset_postdata();
}
get_footer();
?>