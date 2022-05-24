<?php

/**
 * Template Name: Courses Innner
 *
 */
get_header();
$fields = get_fields(get_the_ID());
$section1 = $fields['section1'];
$section2 = $fields['section2'];
$section3 = $fields['section3'];
$section4 = $fields['section4'];
$why_it_works = get_field('why_it_works', 'options');
?>
<?php get_template_part('parts/section', 'banner'); ?>
<section class="inner-courses">
    <div class="section1">
        <div class="container">
            <h2 class="title font-roboto font-weight-medium text-black text-center"><?= $section1['title'] ?></h2>
            <?php if (have_rows('section1')) : while (have_rows('section1')) : the_row(); ?>
                    <?php if (have_rows('year')) : ?>
                        <div class="row justify-content-md-between justify-content-center">
                            <?php while (have_rows('year')) : the_row();
                                $year_name = get_sub_field('year_name');
                                $year_number = get_sub_field('year_number');
                                $page_link = get_sub_field('page_link');
                                $bg_color = get_sub_field('bg_color');
                            ?>
                                <div class="col-auto class text-center">
                                    <a href="<?= $page_link['url'] ?>">
                                        <div class="number font-roboto d-inline-block text-white font-weight-black d-inline-block" style="background: <?= $bg_color ?>;"> <?= $year_number ?></div>
                                        <div class="padlock">
                                            <div class="padlock-bg bg-white d-inline-block">
                                                <img src="<?= get_template_directory_uri() ?>/images/padlock.png" />
                                            </div>
                                        </div>
                                        <div class="year-name text-black font-weight-black">
                                            <?= $year_name ?>
                                        </div>
                                    </a>
                                </div>
                            <?php endwhile; ?>
                        </div>
                <?php endif;
                endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
    <div class="section2 text-white">
        <div class="container">
            <?php if (have_rows('section2')) : while (have_rows('section2')) : the_row(); ?>
                    <?php if (have_rows('box')) : ?>
                        <div class="row">
                            <div class="col-xl-4 col-md-6">
                                <h3 class="title font-roboto font-weight-bold"><?= $section2['title'] ?></h3>
                                <div class="description"><?= $section2['description'] ?></div>
                            </div>
                            <?php while (have_rows('box')) : the_row();
                                $icon = get_sub_field('icon');
                                $info = get_sub_field('info');
                            ?>
                                <div class="col-xl-4 col-md-6">
                                    <div class="box text-center">
                                        <div class="icon"><img src="<?= $icon['url'] ?>" />
                                            <div class="info font-weight-medium"><?= $info ?></div>
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
    <div class="section3">
        <div class="container">
            <h3 class="title font-roboto text-black font-weight-bold text-center"><?= $section3['title'] ?></h3>
            <?php if (have_rows('section3')) : while (have_rows('section3')) : the_row(); ?>
                    <?php if (have_rows('curriculum')) : $i = 1; ?>
                        <div class="panel-group" id="accordion" role="tablist">
                            <?php while (have_rows('curriculum')) : the_row();
                                $subject = get_sub_field('subject');
                                $subject_url = str_replace(' ', '-', strtolower($subject));
                                $description = get_sub_field('description');
                            ?>
                                <div class="panel panel-default">
                                    <h4 class="panel-title <?php if ($i != 1) echo 'collapsed'; ?>" data-toggle="collapse" data-parent="#accordion" href="#collapse<?= $subject_url ?>" aria-expanded="true" aria-controls="collapse<?= $subject_url ?>"><?= $subject ?></h4>
                                    <div id="collapse<?= $subject_url ?>" class="panel-collapse collapse <?php if ($i == 1) echo 'show'; ?>" role="tabpanel" aria-labelledby="heading<?= $subject_url ?>" aria-expanded="true" data-parent="#accordion">
                                        <div class="panel-body"><?= $description ?></div>
                                    </div>
                                </div>
                            <?php $i++;
                            endwhile; ?>
                        </div>
            <?php endif;
                endwhile;
            endif; ?>
        </div>
    </div>

    <div class="section4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-2 order-lg-1">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="<?= $section4['video_url'] ?>"></iframe>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <h3 class="subtitle font-roboto font-weight-medium text-black text-center"><?= $section4['subtitle'] ?></h3>
                    <h2 class="title font-roboto font-weight-bold text-black"><?= $section4['title'] ?></h2>
                </div>
            </div>
        </div>
    </div>
    <div class="section5 text-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-11">
                    <h2 class="title font-roboto font-weight-bold text-center"><?= $why_it_works['title'] ?></h2>
                    <?php if (have_rows('why_it_works', 'options')) : while (have_rows('why_it_works', 'options')) : the_row(); ?>
                            <?php if (have_rows('box')) : ?>
                                <div class="row">
                                    <?php while (have_rows('box')) : the_row();
                                        $icon1 = get_sub_field('icon1');
                                        $heading = get_sub_field('heading');
                                        $description = get_sub_field('description');
                                    ?>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="box">
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
    <div class="section6">
        <?php get_template_part('parts/section', 'online-face'); ?>
        <?php get_template_part('parts/section', 'featured'); ?>
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