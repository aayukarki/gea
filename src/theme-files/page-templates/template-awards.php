<?php

/**
 * Template Name: Awards
 *
 */
get_header();
$fields = get_fields(get_the_ID());
$section1 = $fields['section1'];
?>
<?php get_template_part('parts/section', 'banner'); ?>
<section class="our-awards">
    <div class="container">
        <div class="section1">
            <div class="row align-items-center">
                <div class="col-auto">
                    <h2 class="title font-roboto font-weight-bold text-black"><?= $section1['title'] ?></h2>
                </div>
                <div class="col">
                    <div class="description1"><?= $section1['description1'] ?></div>
                </div>
            </div>
            <div class="description2"><?= $section1['description2'] ?></div>
        </div>
        <div class="section2">
            <?php if (have_rows('awards', 'option')) :  ?>
                <div class="row">
                    <?php while (have_rows('awards', 'option')) : the_row();
                        $image = get_sub_field('image');
                        $award_name = get_sub_field('award_name');
                        $position = get_sub_field('position');
                    ?>
                        <div class="col-xl col-md-4">
                            <div class="award-holder text-center text-black">
                                <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>" />
                                <h4 class="award-name font-weight-medium"><?= $award_name ?></h4>
                                <h5 class="position"><?= $position ?></h5>
                            </div>
                        </div>
                    <?php endwhile;  ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
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
<?php get_footer(); ?>