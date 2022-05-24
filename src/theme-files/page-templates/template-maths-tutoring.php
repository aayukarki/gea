<?php

/**
 * Template Name: Maths Tutoring
 *
 */
get_header();
$fields = get_fields(get_the_ID());
$section1_main = $fields['section1'];
$section4_main = $fields['section4'];
$why_it_works = get_field('why_it_works', 'options');
$maths_tutoring = get_field('maths_tutoring', 'options');
$section1 = $maths_tutoring['section1'];
$section2 = $maths_tutoring['section2'];
$section5 = $maths_tutoring['section5'];
$year_number = explode(' ', get_the_title())[1];
?>
<?php get_template_part('parts/section', 'banner'); ?>
<section class="maths-tutoring">
    <div class="section1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="title font-roboto font-weight-medium text-black"><?= $section1_main['title'] ?></h2>
                </div>
                <div class="col-lg-6">
                    <div class="description"><?= $section1_main['description'] ?></div>
                </div>
            </div>
            <div class="more-info"><?= preg_replace('{year_number}', $year_number, $section1['more_info']) ?></div>
        </div>
    </div>
    <div class="section2 bg-secondary text-white">
        <div class="container">
            <div class="row align-items-center mb-xl-5 mb-4">
                <div class="col-lg">
                    <div class="content-holder">
                        <h2 class="title font-weight-extrabold"><?= preg_replace('{year_number}', $year_number, $section2['title']) ?></h2>
                        <div class="description"><?= preg_replace('{year_number}', $year_number, $section2['description1']) ?></div>
                    </div>
                </div>
                <div class="col-xl-auto col-lg-4">
                    <img src="<?= $section2['image']['url'] ?>" alt="<?= $section2['image']['alt'] ?>" />
                </div>
            </div>
            <h3 class="subtitle font-weight-semibold"><?= preg_replace('{year_number}', $year_number, $section2['sub_title']) ?></h3>
            <div class="description"><?= preg_replace('{year_number}', $year_number, $section2['description2']) ?></div>
            <div class="key-points">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <h2 class="heading font-weight-semibold"><?= $section2['heading'] ?></h2>
                    </div>
                    <div class="col-lg-7">
                        <div class="steps">
                            <?php if (have_rows('maths_tutoring', 'options')) : while (have_rows('maths_tutoring', 'options')) : the_row(); ?>
                                    <?php if (have_rows('section2')) : while (have_rows('section2')) : the_row(); ?>
                                            <?php if (have_rows('key_points')) : ?>
                                                <div class="row">
                                                    <?php while (have_rows('key_points')) : the_row();
                                                        $number = get_sub_field('number');
                                                        $bg_color = get_sub_field('bg_color');
                                                        $sub_heading = get_sub_field('sub_heading');
                                                    ?>
                                                        <div class="col-lg-4 step text-center">
                                                            <div class="icon-holder font-weight-bold text-white rounded-pill" style="background: <?= $bg_color ?>"><?= $number ?></div>
                                                            <div class="sub-heading font-weight-black"><?= $sub_heading ?></div>
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
        </div>
    </div>
    <div class="bg-holder bg-light"><img src="<?= get_template_directory_uri() ?>/images/bg-secondary-down.png" class="w-100" /></div>

    <div class="section3 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-11">
                    <div class="text-center">
                        <h2 class="title text-black font-weight-medium d-inline-block">The UPSL™ Strategy.</h2>
                    </div>
                    <?php if (have_rows('upsl_strategy', 'options')) : ?>
                        <div class="strategies">
                            <?php while (have_rows('upsl_strategy', 'options')) : the_row();
                                $icon = get_sub_field('icon');
                                $bg_color = get_sub_field('bg_color');
                                $title = get_sub_field('title');
                                $description = get_sub_field('description');
                            ?>
                                <div class="strategy text-center text-lg-left">
                                    <div class="row align-items-center justify-content-center">
                                        <div class="col-auto">
                                            <div class="icon-holder d-inline-block rounded-pill" style="background: <?= $bg_color ?>"><img src="<?= $icon['url'] ?>" alt="<?= $icon['alt'] ?>"></div>
                                            <div class="initial text-center">
                                                <div class="d-inline-block initial-bg bg-white text-tertiary rounded-pill font-weight-black"><?= $title['0'] ?></div>
                                            </div>
                                        </div>
                                        <div class="col-xl-2 col-lg-3">
                                            <h3 class="heading font-weight-black text-darkgray"><?= $title ?></h3>
                                        </div>
                                        <div class="col-lg">
                                            <div class="description text-darkgray"><?= $description ?></div>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <?php if (!is_page('42284')) { ?>
        <div class="bg-holder bg-light"><img src="<?= get_template_directory_uri() ?>/images/bg-primary-up.png" class="w-100" /></div>
        <div class="section4 bg-primary text-white">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-11">
                        <h2 class="title font-weight-medium text-center"><?= $section4_main['title1'] ?></h2>
                        <div class="description"><?= $section4_main['description1'] ?></div>
                        <h2 class="title font-weight-medium text-center"><?= $section4_main['title2'] ?></h2>
                        <div class="description1"><?= $section4_main['description2'] ?></div>
                        <h3 class="subtitle font-weight-medium"><?= $section4_main['sub_title'] ?></h3>
                        <div class="description"><?= $section4_main['description3'] ?></div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    <?php if (is_page('42284')) { ?>
        <div class="section4-maths bg-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-11">
                        <h2 class="title font-weight-medium text-black text-center"><?= $section4_main['title1'] ?></h2>
                        <div class="description"><?= $section4_main['description1'] ?></div>
                        <div class="description"><?= get_field('section4', 42144)['description'] ?></div>
                        <h2 class="title text-black font-weight-medium text-center">Course Outlines for Mathematics:</h2>
                        <?php if (have_rows('section4', 42144)) : while (have_rows('section4', 42144)) : the_row(); ?>
                                <?php if (have_rows('course_outline')) : $i = 1 ?>
                                    <div class="panel-group" role="tablist">
                                        <?php while (have_rows('course_outline')) : the_row();
                                            $level_number = get_sub_field('level_number');
                                            $level_url = str_replace(' ', '-', strtolower($level_number));
                                            $level_description = get_sub_field('level_description');
                                        ?>
                                            <div class="panel panel-default">
                                                <h4 class="panel-title collapsed" data-toggle="collapse" data-parent=".panel-group" href="#<?= $level_url ?>" aria-expanded="false" aria-controls="<?= $level_url ?>"><?= $level_number ?></h4>
                                                <div id="<?= $level_url ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="<?= $level_url ?>" aria-expanded="true" data-parent=".panel-group">
                                                    <div class="panel-body"><?= $level_description ?></div>
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
            </div>
        </div>
    <?php } ?>
    <?php if (!is_page('42284')) { ?>
        <div class="section5 bg-secondary text-white">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-11">
                        <?php if (have_rows('maths_tutoring', 'options')) : while (have_rows('maths_tutoring', 'options')) : the_row(); ?>
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
        <div class="bg-holder"><img src="<?= get_template_directory_uri() ?>/images/bg-secondary-down.png" class="w-100" /></div>
    <?php } ?>
    <?php if (!is_page('42284')) { ?>
        <div class="section6">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-11">
                        <div class="why-it-works">
                            <div class="row justify-content-center">
                                <div class="col-xl-11">
                                    <div class="text-center">
                                        <h2 class="title font-roboto font-weight-bold text-primary d-inline-block"><?= $why_it_works['title'] ?></h2>
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
                </div>
            </div>
        </div>
    <?php } ?>
    <?php get_template_part('parts/section', 'success-story'); ?>
    <?php if (is_page('42284')) { ?>
        <div class="section5-maths text-white">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-11">
                        <div class="description"><?= get_field('section5', 42144)['description'] ?></div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
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