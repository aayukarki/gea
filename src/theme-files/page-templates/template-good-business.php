<?php

/**
 * Template Name: Business for Good
 *
 */
get_header();
$fields = get_fields(get_the_ID());
$section1 = $fields['section1'];
$section2 = $fields['section2'];
$section3 = $fields['section3'];
$section5 = $fields['section5'];
$section6 = $fields['section6'];
?>
<?php get_template_part('parts/section', 'banner'); ?>

<section class="business-for-good">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="section1">
                    <h2 class="title font-roboto font-weight-medium text-black text-center"><?= $section1['title'] ?></h2>
                    <div class="row">
                        <div class="col-12 order-2 order-md-1">
                            <div class="description"><?= $section1['description'] ?></div>
                        </div>
                        <div class="col-12 order-1 order-md-2">
                            <img src="<?= $section1['image']['url'] ?>" alt="<?= $section1['image']['alt'] ?>" class="mb-md-0 mb-4 section1-img" />
                        </div>
                    </div>
                </div>

                <div class="section2">
                    <h2 class="title font-roboto font-weight-medium text-black"><?= $section2['title'] ?></h2>
                    <div class="description"><?= $section2['description'] ?></div>
                </div>
            </div>
        </div>
    </div>

    <div class="section3">
        <div class="container-fluid px-lg-0">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img src="<?= $section3['image']['url'] ?>" alt="<?= $section3['image']['alt'] ?>" />
                </div>
                <div class="col-lg-7">
                    <div class="content-holder">
                        <h2 class="title font-roboto font-weight-medium text-black"><?= $section3['title'] ?></h2>
                        <div class="description"><?= $section3['description'] ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="section4">
                    <?php if (have_rows('support')) : $i = 1;  ?>
                        <div class="row">
                            <?php while (have_rows('support')) : the_row();
                                $image = get_sub_field('image');
                                $background = get_sub_field('background');
                                $title = get_sub_field('title');
                                $description = get_sub_field('description');
                            ?>
                                <div class="col-lg-4 support text-center">
                                    <div class="icon-holder d-inline-block rounded-pill" style="background: <?= $background ?>"><img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>"></div>
                                    <div class="number">
                                        <div class="d-inline-block number-bg bg-white text-tertiary rounded-pill font-weight-black"><?= $i ?></div>
                                    </div>
                                    <h3 class="title font-weight-black text-darkgray"><?= $title ?></h3>
                                    <div class="description text-darkgray"><?= $description ?></div>
                                </div>
                            <?php $i++;
                            endwhile;  ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid px-0">
        <div class="proud-supporter">
            <h2 class="title font-roboto font-weight-medium text-black text-center"><?= $section5['title'] ?> </h2>
            <?php if (have_rows('section5')) : ?>
                <?php while (have_rows('section5')) : the_row();
                    $images = get_sub_field('images');
                    if ($images) :
                ?>
                        <div class="support-img-slider">
                            <?php foreach ($images as $image) : ?>
                                <div class="item">
                                    <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>" />
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                <?php endwhile;  ?>
            <?php endif; ?>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="global-goals">
                    <img src="<?= $section6['image']['url'] ?>" alt="<?= $section6['image']['alt'] ?>" />
                </div>
            </div>
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