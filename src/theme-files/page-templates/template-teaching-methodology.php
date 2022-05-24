<?php

/**
 * Template Name: Teaching Methodology
 *
 */
get_header();
$fields = get_fields(get_the_ID());
$section1 = $fields['section1'];
$section2 = $fields['section2'];
$section3 = $fields['section3'];
$section4 = $fields['section4'];
$timeline = $fields['timeline'];
?>
<?php get_template_part('parts/section', 'banner'); ?>
<section class="teaching-content1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="section1">
                    <h2 class="title font-roboto font-weight-bold text-black"><?= $section1['title'] ?></h2>
                    <div class="description"><?= $section1['description'] ?></div>
                </div>
                <div class="section2">
                    <h2 class="title font-roboto font-weight-medium text-black"><?= $section2['title'] ?></h2>
                    <h3 class="subtitle"><?= $section2['subtitle'] ?></h3>
                    <div class="assessments">
                        <?php if (have_rows('section2')) :  ?>
                            <?php while (have_rows('section2')) : the_row(); ?>
                                <?php if (have_rows('assessments')) :  ?>
                                    <div class="row">
                                        <?php while (have_rows('assessments')) : the_row();
                                            $icon_title = get_sub_field('icon_title');
                                            $info = get_sub_field('info');
                                        ?>
                                            <div class="col-xl content">
                                                <div class="row no-gutters align-items-xl-start align-items-center justify-content-center">
                                                    <div class="col-auto">
                                                        <div class="icon rounded-pill bg-secondary text-white font-roboto font-weight-black d-flex align-items-center justify-content-center"><?= $icon_title ?></div>
                                                    </div>
                                                    <div class="col-md">
                                                        <div class="info text-black text-center text-md-left ml-3"><?= $info ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endwhile;  ?>
                                    </div>
                                <?php endif; ?>
                        <?php endwhile;
                        endif; ?>
                    </div>
                    <div class="description"><?= $section2['description'] ?></div>
                </div>
                <div class="section3">
                    <h2 class="title font-weight-black text-center"><?= $section3['title'] ?></h2>
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <h3 class="heading font-weight-semibold text-black"><?= $section3['heading'] ?></h3>
                            <div class="description text-black"><?= $section3['description'] ?></div>
                        </div>
                        <div class="col-lg-6">
                            <img src="<?= $section3['image']['url'] ?>" alt="<?= $section3['image']['alt'] ?>" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<section class="clarity-stage text-white">
    <div class="container">
        <div class="row justify-content-center">
            <?php if (have_rows('timeline')) : while (have_rows('timeline')) : the_row(); ?>
                    <?php if (have_rows('stages')) : ?>
                        <div class="col-xl-10">
                            <h2 class="title font-roboto font-weight-semibold font-italic"><?= $timeline['title'] ?></h2>
                            <?php while (have_rows('stages')) : the_row();
                                $heading = get_sub_field('heading');
                                $description = get_sub_field('description');
                            ?>
                                <div class="heading font-roboto font-weight-semibold d-none d-md-block"><?= $heading ?></div>
                                <div class="description two-columns d-none d-md-block"><?= $description ?></div>
                                <?php break;  ?>
                            <?php endwhile; ?>
                        </div>
            <?php endif;
                endwhile;
            endif; ?>
            <div class="col-xl-10">
                <?php if (have_rows('timeline')) : while (have_rows('timeline')) : the_row(); ?>
                        <?php if (have_rows('stages')) : ?>
                            <div class="timeline">
                                <?php while (have_rows('stages')) : the_row();
                                    $image = get_sub_field('image');
                                    $heading = get_sub_field('heading');
                                    $subheading = get_sub_field('subheading');
                                    $description = get_sub_field('description');
                                ?>
                                    <div class="events">
                                        <div class="row align-items-center">
                                            <?php if ($image) : ?>
                                                <div class="col-md-6 order-1">
                                                    <div class="image-holder">
                                                        <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>" />
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                            <div class="col-md-6 order-2">
                                                <div class="content direction-r">
                                                    <h3 class="heading font-roboto font-weight-medium"><?= $heading ?></h3>
                                                    <h4 class="sub-heading font-roboto font-weight-medium"><?= $subheading ?></h4>
                                                    <div class="info"><?= $description ?></div>
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
</section>

<section class="teaching-content2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="section1">
                    <div class="row">
                        <div class="col-lg-6">
                            <h2 class="title font-roboto font-weight-medium text-black"><?= $section4['title'] ?></h2>
                        </div>
                        <div class="col">
                            <div class="description"><?= $section4['description'] ?></div>
                        </div>
                    </div>
                </div>
                <div class="strategies">
                    <?php if (have_rows('strategies')) :  ?>
                        <div class="row">
                            <?php while (have_rows('strategies')) : the_row();
                                $icon = get_sub_field('icon');
                                $background = get_sub_field('background');
                                $title = get_sub_field('title');
                                $description = get_sub_field('description');
                            ?>
                                <div class="col-lg-3 col-md-6 strategy text-center">
                                    <div class="icon-holder d-inline-block rounded-pill" style="background: <?= $background ?>"><img src="<?= $icon['url'] ?>" alt="<?= $icon['alt'] ?>" /></div>
                                    <div class="initial">
                                        <div class="d-inline-block initial-bg bg-white text-tertiary rounded-pill font-weight-black"><?= $title[0] ?></div>
                                    </div>
                                    <h3 class="title font-weight-black text-darkgray"><?= $title ?></h3>
                                    <div class="description text-darkgray"><?= $description ?></div>
                                </div>
                            <?php endwhile;  ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php if (have_rows('videos')) :  ?>
    <section class="videos-slider px-md-0 px-4">
        <?php while (have_rows('videos')) : the_row();
            $title = get_sub_field('title');
            $video_link = get_sub_field('video_link');
        ?>
            <div class="youtube-videos" data-slide-name="<?= $title ?>">
                <div class="video-title font-weight-bold text-center text-black"><?= $title ?></div>
                <div class="video-frame">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="<?= $video_link ?>"></iframe>
                    </div>
                </div>
            </div>
        <?php endwhile;  ?>
    </section>
<?php endif; ?>
<section class="slick-arrows">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-md-10 col-11">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-auto">
                        <div class="prev-slide text-left"></div>
                    </div>
                    <div class="col-md-6 col-auto">
                        <div class="next-slide text-right"></div>
                    </div>
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