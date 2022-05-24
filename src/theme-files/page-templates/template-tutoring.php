<?php

/**
 * Template Name: Tutoring
 *
 */
get_header();
$fields = get_fields(get_the_ID());
$section1 = $fields['section1'];
$section2 = $fields['section2'];
$section3 = $fields['section3'];
$section4 = $fields['section4'];
$section5 = $fields['section5'];
?>

<?php get_template_part('parts/section', 'banner'); ?>

<section class="tutoring">
    <div class="section1">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <h2 class="title text-primary font-weight-semibold"><?= $section1['title'] ?></h2>
                </div>
                <div class="col-xl-6">
                    <div class="subtitle"><?= $section1['sub_title'] ?></div>
                    <div class="description"><?= $section1['description'] ?></div>
                </div>
            </div>
        </div>
    </div>

    <div class="section2 text-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-11">
                    <h2 class="title font-weight-bold"><?= the_title(); ?></h2>
                    <div class="description"><?= $section2['description'] ?></div>
                </div>
            </div>
        </div>
    </div>

    <?php if (!empty($section3['title'])) { ?>
        <div class="section3 bg-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-11">
                        <h2 class="title text-black font-weight-medium text-center"><?= $section3['title'] ?></h2>
                        <?php if (have_rows('section3')) : while (have_rows('section3')) : the_row(); ?>
                                <?php if (have_rows('strategies')) : ?>
                                    <div class="strategies">
                                        <?php while (have_rows('strategies')) : the_row();
                                            $image = get_sub_field('image');
                                            $bg_color = get_sub_field('bg_color');
                                            $title = get_sub_field('title');
                                            $description = get_sub_field('description');
                                        ?>
                                            <div class="strategy text-center text-lg-left">
                                                <div class="row align-items-center justify-content-center">
                                                    <div class="col-auto">
                                                        <div class="icon-holder d-inline-block rounded-pill" style="background: <?= $bg_color ?>"><img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>" /></div>
                                                        <div class="initial text-center">
                                                            <div class="d-inline-block initial-bg bg-white text-tertiary rounded-pill font-weight-black">U</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-2 col-lg-3">
                                                        <h3 class="title font-weight-black text-darkgray"><?= $title ?></h3>
                                                    </div>
                                                    <div class="col-lg">
                                                        <div class="description text-darkgray"><?= $description ?></div>
                                                    </div>
                                                </div>
                                            </div>
                            <?php endwhile;
                                    endif;
                                endwhile;
                            endif; ?>
                                    </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>

    <div class="section4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-11">
                    <h2 class="title text-black font-weight-medium"><?= $section4['title'] ?></h2>
                    <div class="description"><?= $section4['description'] ?></div>
                    <h2 class="title text-black font-weight-medium text-center">Course Outlines for <?= the_title(); ?>:</h2>
                    <?php if (have_rows('section4')) : while (have_rows('section4')) : the_row(); ?>
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

    <?php get_template_part('parts/section', 'success-story'); ?>

    <div class="section5 bg-secondary text-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-11">
                    <div class="description"><?= $section5['description'] ?></div>
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
                <div class="icon-holder2">
                    <img src="<?= get_template_directory_uri() ?>/images/testimonial-icon2.png" />
                </div>
                <?php get_template_part('parts/section', 'enquiry-form'); ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>