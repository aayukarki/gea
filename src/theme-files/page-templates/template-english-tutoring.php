<?php

/**
 * Template Name: English Tutoring
 *
 */
get_header();
$fields = get_fields(get_the_ID());
$why_it_works = get_field('why_it_works', 'options');
$english_tutoring = get_field('english_tutoring', 'options');
$section1 = $english_tutoring['section1'];
$section2 = $english_tutoring['section2'];
$section3 = $english_tutoring['section3'];
$section4 = $english_tutoring['section4'];
$section5 = $english_tutoring['section5'];
$section6 = $english_tutoring['section6'];
$year_number = explode(' ', get_the_title())[1];
?>
<?php get_template_part('parts/section', 'banner'); ?>
<section class="english-tutoring">
    <div class="section1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="title font-roboto font-weight-medium text-black"><?= $section1['title'] ?></h2>
                </div>
                <div class="col-lg-6">
                    <div class="description"><?= $section1['description'] ?></div>
                </div>
            </div>
            <div class="more-info"><?= preg_replace('{year_number}', $year_number, $section1['more_info']) ?></div>
        </div>
    </div>
    <div class="section2 bg-primary text-white">
        <div class="container">
            <div class="mb-xl-5 mb-4">
                <h2 class="title font-weight-extrabold"><?= preg_replace('{year_number}', $year_number, $section2['title']) ?></h2>
                <div class="description"><?= preg_replace('{year_number}', $year_number, $section2['description1']) ?></div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg">
                    <h3 class="subtitle font-weight-semibold"><?= preg_replace('{year_number}', $year_number, $section2['sub_title']) ?></h3>
                    <div class="description mr-xl-5"><?= preg_replace('{year_number}', $year_number, $section2['description2']) ?></div>
                </div>
                <div class="col-xl-auto col-lg-4">
                    <img src="<?= $section2['image']['url'] ?>" alt="<?= $section2['image']['alt'] ?>" />
                </div>
            </div>
        </div>
    </div>
    <div class="bg-holder bg-light"><img src="<?= get_template_directory_uri() ?>/images/bg-primary-down.png" class="w-100" /></div>

    <div class="section3 bg-light text-black">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-11">
                    <?php if (have_rows('english_tutoring', 'options')) : while (have_rows('english_tutoring', 'options')) : the_row(); ?>
                            <?php if (have_rows('section3')) : while (have_rows('section3')) : the_row(); ?>
                                    <?php if (have_rows('lists')) : ?>
                                        <div class="row">
                                            <div class="col-lg-4 item">
                                                <div class="main-content">
                                                    <h2 class="title font-weight-bold"><?= preg_replace('{year_number}', $year_number, $section3['title']) ?></h2>
                                                    <h3 class="subtitle"><?= $section3['sub_title'] ?></h3>
                                                </div>
                                            </div>
                                            <?php while (have_rows('lists')) : the_row();
                                                $icon = get_sub_field('icon');
                                                $description = get_sub_field('description');
                                            ?>
                                                <div class="col-lg-4 item">
                                                    <div class="icon text-center mb-4"><img src="<?= $icon['url'] ?>" alt="<?= $icon['alt'] ?>" /></div>
                                                    <div class="description text-center font-weight-medium"><?= $description ?></div>
                                                </div>
                                            <?php endwhile; ?>
                                        </div>
                    <?php endif;
                                endwhile;
                            endif;
                        endwhile;
                    endif; ?>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-holder bg-light"><img src="<?= get_template_directory_uri() ?>/images/bg-secondary-up.png" class="w-100" /></div>
    <div class="section4 bg-secondary text-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-11">
                    <h2 class="title font-weight-medium text-center"><?= preg_replace('{year_number}', $year_number, $section4['title']) ?></h2>
                    <div class="description"><?= preg_replace('{year_number}', $year_number, $section4['description1']) ?></div>
                    <h3 class="subtitle font-weight-medium"><?= $section4['sub_title'] ?></h3>
                    <div class="description"><?= $section4['description2'] ?></div>
                </div>
            </div>
        </div>
    </div>
    <div class="section5 bg-primary text-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-11">
                    <?php if (have_rows('english_tutoring', 'options')) : while (have_rows('english_tutoring', 'options')) : the_row(); ?>
                            <?php if (have_rows('section5')) : while (have_rows('section5')) : the_row(); ?>
                                    <?php if (have_rows('lists')) : ?>
                                        <div class="row">
                                            <div class="col-lg-4 item">
                                                <div class="main-content">
                                                    <h2 class="title font-weight-bold"><?= preg_replace('{year_number}', $year_number, $section5['title']) ?></h2>
                                                    <h3 class="subtitle"><?= $section5['sub_title'] ?></h3>
                                                </div>
                                            </div>
                                            <?php while (have_rows('lists')) : the_row();
                                                $icon = get_sub_field('icon');
                                                $description = get_sub_field('description');
                                            ?>
                                                <div class="col-lg-4 item">
                                                    <div class="icon text-center mb-4"><img src="<?= $icon['url'] ?>" alt="<?= $icon['alt'] ?>" /></div>
                                                    <div class="description text-center font-weight-medium"><?= $description ?></div>
                                                </div>
                                            <?php endwhile; ?>
                                        </div>
                    <?php endif;
                                endwhile;
                            endif;
                        endwhile;
                    endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-holder"><img src="<?= get_template_directory_uri() ?>/images/bg-primary-down.png" class="w-100" /></div>
    <div class="section6">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-11">
                    <div class="why-it-works">
                        <div class="row justify-content-center">
                            <div class="col-xl-11">
                                <div class="text-center">
                                    <h2 class="title font-roboto font-weight-bold text-black d-inline-block"><?= preg_replace('{year_number}', $year_number, $section6['title']) ?></h2>
                                    <div class="subtitle text-black"><?= $section6['description'] ?></div>
                                </div>
                                <?php if (have_rows('why_it_works', 'options')) : while (have_rows('why_it_works', 'options')) : the_row(); ?>
                                        <?php if (have_rows('box')) : ?>
                                            <div class="row">
                                                <?php while (have_rows('box')) : the_row();
                                                    $icon1 = get_sub_field('icon1');
                                                    $heading = get_sub_field('heading');
                                                    $description = get_sub_field('description');
                                                ?>
                                                    <div class="col-xl-4 col-md-6">
                                                        <div class="box text-black">
                                                            <div class="row">
                                                                <div class="col-md-auto">
                                                                    <img src="<?= $icon1['url'] ?>" alt="<?= $icon1['alt'] ?>" />
                                                                </div>
                                                                <div class="col">
                                                                    <h3 class="heading font-roboto font-weight-medium text-capitalize"><?= $heading ?></h3>
                                                                    <div class="description"><?= $description ?></div>
                                                                </div>
                                                            </div>
                                                        </div>
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
        </div>
    </div>
    <?php get_template_part('parts/section', 'parents-students'); ?>
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
<?php get_footer(); ?>