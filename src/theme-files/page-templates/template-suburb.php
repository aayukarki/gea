<?php

/**
 * Template Name: Suburb
 *
 */
get_header();
get_template_part('parts/section', 'banner');
$section1 = get_field('section1', 'option');
$section2 = get_field('section2', 'option');
$section4 = get_field('section4', 'option');
$section6 = get_field('section6', 'option');
$testimonials = get_field('testimonials', 'options');
$footer = get_field('footer', 'options');
$suburb = get_the_title();
?>
<section class="inner-suburb">
    <div class="section1 text-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-11">
                    <h2 class="title font-roboto font-weight-medium text-black text-left text-md-center"><?= preg_replace('{suburb_name}', $suburb, $section1['title']) ?></h2>
                    <?php if (have_rows('section1', 'options')) : while (have_rows('section1', 'options')) : the_row(); ?>
                            <?php if (have_rows('class')) : ?>
                                <div class="row justify-content-between">
                                    <?php while (have_rows('class')) : the_row();
                                        $icon = get_sub_field('icon');
                                        $bg_color = get_sub_field('bg_color');
                                        $heading = get_sub_field('heading');
                                        $description = get_sub_field('description');
                                    ?>
                                        <div class="col-lg-3 col-md-6 class">
                                            <div class="icon d-inline-block" style="background: <?= $bg_color ?>;"><img src="<?= $icon['url'] ?>" alt="<?= $icon['alt'] ?>" class="img-fluid" /></div>
                                            <div class="year-name text-black font-weight-black"><?= $heading ?></div>
                                            <div class="description text-black"><?= $description ?></div>
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                    <?php endif;
                        endwhile;
                    endif; ?>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="section2 bg-secondary text-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-11">
                    <?php if (have_rows('section2', 'options')) : while (have_rows('section2', 'options')) : the_row(); ?>
                            <?php if (have_rows('lists')) : ?>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <h2 class="title font-roboto font-weight-bold"><?= preg_replace('{suburb_name}', $suburb, $section2['title']) ?></h2>
                                    </div>
                                    <?php while (have_rows('lists')) : the_row();
                                        $description = get_sub_field('description');
                                    ?>
                                        <div class="content col-xl-3">
                                            <div class="content-holder">
                                                <div class="description"><?= preg_replace('{suburb_name}', $suburb, $description) ?></div>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                    <?php endif;
                        endwhile;
                    endif; ?>
                    <a href="<?= $section2['button_link']['url'] ?>" class="btn btn-primary"><?= $section2['button_text'] ?></a>
                </div>
            </div>
        </div>
    </div>
    <div class="section3 text-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-11">
                    <h2 class="title font-roboto font-weight-bold text-center"><?= preg_replace('{suburb_name}', $suburb, $testimonials['title2']) ?></h2>
                    <div class="reviews">
                        <?php if (have_rows('testimonials', 'options')) :  ?>
                            <?php while (have_rows('testimonials', 'options')) : the_row(); ?>
                                <?php if (have_rows('reviews')) :  ?>
                                    <div class="row">
                                        <?php while (have_rows('reviews')) : the_row();
                                            $image = get_sub_field('image');
                                            $reviewer = get_sub_field('reviewer');
                                            $course = get_sub_field('course');
                                            $review = get_sub_field('review');
                                        ?>
                                            <div class="col-md-6">
                                                <div class="testimonial text-center">
                                                    <div class="image-holder">
                                                        <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>" class="img-fluid" />
                                                    </div>
                                                    <h3 class="heading font-weight-black font-italic"><?= $reviewer ?></h3>
                                                    <h4 class="subheading font-weight-medium font-italic"><?= $course ?></h4>
                                                    <div class="description font-italic"><?= $review ?></div>
                                                </div>
                                            </div>
                                        <?php endwhile;  ?>
                                    </div>
                                <?php endif; ?>
                        <?php endwhile;
                        endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section4 text-black">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-11">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="title font-roboto font-weight-bold"><?= preg_replace('{suburb_name}', $suburb, $section4['title']) ?></h2>
                        </div>
                        <div class="col-md-6">
                            <div class="description font-roboto"><?= preg_replace('{suburb_name}', $suburb, $section4['description']) ?></div>
                            <a href="<?= $section4['book_link']['url'] ?>" class="btn btn-secondary"><?= $section4['book_text'] ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section5 bg-light text-black">
        <?php get_template_part('parts/section', 'featured'); ?>
    </div>

    <div class="section6 text-center">
        <div class="container">
            <div class="logo"><img src="<?= $footer['logo']['url'] ?>" alt="<?= $footer['logo']['alt'] ?>" /></div>
            <h2 class="title font-roboto font-weight-bold text-black"><?= preg_replace('{suburb_name}', $suburb, $section6['title']) ?></h2>
            <?php if (have_rows('section6', 'options')) : while (have_rows('section6', 'options')) : the_row(); ?>
                    <?php if (have_rows('class')) : ?>
                        <div class="row justify-content-between">
                            <?php while (have_rows('class')) : the_row();
                                $icon = get_sub_field('icon');
                                $bg_color = get_sub_field('bg_color');
                                $heading = get_sub_field('heading');
                                $description = get_sub_field('description');
                            ?>
                                <div class="col-lg-3 class">
                                    <div class="icon d-inline-block" style="background: <?= $bg_color ?>;"><img src="<?= $icon['url'] ?>" alt="<?= $icon['alt'] ?>" class="img-fluid" /></div>
                                    <div class="year-name text-black font-weight-black"><?= $heading ?></div>
                                    <div class="description text-black"><?= $description ?></div>
                                </div>
                            <?php endwhile; ?>
                        </div>
            <?php endif;
                endwhile;
            endif; ?>
            <div class="keywords"><?= preg_replace('{suburb_name}', $suburb, $section6['keywords']) ?></div>
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