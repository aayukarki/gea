<?php

/**
 * Template Name: Courses Innner Inner
 *
 */
get_header();
$fields = get_fields(get_the_ID());
$section1 = $fields['section1'];
$section2 = $fields['section2'];
$section3 = $fields['section3'];
$section4 = $fields['section4'];
$section5 = $fields['section5'];
$why_it_works = get_field('why_it_works', 'options');
?>
<?php get_template_part('parts/section', 'banner'); ?>
<section class="inner-inner-courses">
    <div class="section1">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="title font-roboto font-weight-medium text-black"><?= $section1['title'] ?></h2>
                </div>
                <div class="col-md-6">
                    <div class="description"><?= $section1['description'] ?></div>
                </div>
            </div>
            <?php if ($section1['subtitle']) : ?><div class="subtitle font-roboto text-center text-black"><?= $section1['subtitle'] ?></div><?php endif; ?>
            <?php if ($section1['more_info']) : ?><div class="more-info font-roboto text-center text-black"><?= $section1['more_info'] ?></div><?php endif; ?>
        </div>
    </div>
    <div class="section2 text-white">
        <div class="container position-relative">
            <div class="row justify-content-center">
                <div class="col-xl-11">
                    <?php if (have_rows('section2')) : while (have_rows('section2')) : the_row(); ?>
                            <?php if (have_rows('lists')) : ?>
                                <div class="row">
                                    <?php while (have_rows('lists')) : the_row();
                                        $title = get_sub_field('title');
                                        $description = get_sub_field('description');
                                    ?>
                                        <div class="content col-xl-6">
                                            <h2 class="title font-roboto font-weight-bold"><?= $title ?></h2>
                                            <div class="description"><?= $description ?></div>
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                        <?php endif;
                        endwhile; ?>
                    <?php endif; ?>
                    <!-- <div class="row">
                        <div class="content col-xl-10">
                            <h2 class="title2 font-roboto font-weight-bold"><?= $section2['preparation_program']['title'] ?></h2>
                            <div class="description"><?= $section2['preparation_program']['description'] ?></div>
                        </div>
                    </div> -->
                </div>
            </div>
            <?php if ($section2['image']) : ?>
                <div class="image-holder"><img src="<?= $section2['image']['url'] ?>" alt="<?= $section2['image']['alt'] ?>" /></div>
            <?php endif; ?>
        </div>
    </div>

    <div class="section3 text-center">
        <div class="container-fluid">

            <?php if (have_rows('section3')) : while (have_rows('section3')) : the_row(); ?>
                    <?php if (have_rows('class')) : $i = 1 ?>
                        <ul class="nav nav-tabs mb-3 border-0 justify-content-center">
                            <?php while (have_rows('class')) : the_row();
                                $icon = get_sub_field('icon');
                                $class_name = get_sub_field('class_name');
                                $class_url = str_replace(' ', '-', strtolower($class_name));
                                $link = get_sub_field('link');
                                $bg_color = get_sub_field('bg_color');
                            ?>
                                <li class="class <?php if ($i == 1) echo 'active'; ?>"><a href="#<?= $class_url ?>" data-toggle="tab">
                                        <div class="icon d-inline-block" style="background: <?= $bg_color ?>;"><img src="<?= $icon['url'] ?>" alt="<?= $icon['alt'] ?>" /></div>
                                        <div class="year-name text-black font-weight-black"><?= $class_name ?></div>
                                        <a href="#">Read More</a>
                                    </a></li>
                            <?php $i++;
                            endwhile; ?>
                        </ul>
                <?php endif;
                endwhile; ?>
            <?php endif; ?>
            <div class="row justify-content-center">
                <div class="col-xl-11">
                    <?php if (have_rows('section3')) : while (have_rows('section3')) : the_row(); ?>
                            <?php if (have_rows('class')) : $i = 1 ?>
                                <div class="tab-content text-left mt-xl-5">
                                    <?php while (have_rows('class')) : the_row();
                                        $class_name = get_sub_field('class_name');
                                        $class_url = str_replace(' ', '-', strtolower($class_name));
                                        $description = get_sub_field('description');
                                    ?>
                                        <div class="tab-pane <?php if ($i == 1) echo 'active'; ?>" id="<?= $class_url ?>">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent=".tab-pane" href="#collapse<?= $class_url ?>"><?= $class_name ?></a>
                                                    </h4>
                                                </div>
                                                <div id="collapse<?= $class_url ?>" class="panel-collapse collapse in <?php if ($i == 1) echo 'show'; ?>">
                                                    <div class="panel-body"><?= $description ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php $i++;
                                    endwhile; ?>
                                </div>
                        <?php endif;
                        endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
            <a href="<?= $section3['book_link']['url'] ?>" class="btn btn-primary"><?= $section3['book_text'] ?></a>
        </div>
    </div>
    <div class="section4">
        <div class="container">
            <?php if (have_rows('section4')) : ?>
                <div class="row">
                    <?php while (have_rows('section4')) : the_row();
                        $title = get_sub_field('title');
                        $video_link = get_sub_field('video_link');
                    ?>
                        <div class="col-lg-6">
                            <h2 class="title text-center font-weight-extrabold text-black"><?= $title ?></h2>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="<?= $video_link ?>"></iframe>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <div class="section5 text-white">
        <div class="container">
            <div class="content-with-video">
                <div class="row align-items-center">
                    <div class="col-lg-6 order-2 order-lg-1">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="<?= $section5['video_link'] ?>"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2">
                        <h2 class="title font-roboto font-weight-bold"><?= $section5['title'] ?></h2>
                    </div>
                </div>
            </div>
            <div class="why-it-works">
                <div class="row justify-content-center">
                    <div class="col-xl-11">
                        <h2 class="title font-roboto font-weight-bold text-center"><?= $why_it_works['title'] ?></h2>
                        <?php if (have_rows('why_it_works', 'options')) : while (have_rows('why_it_works', 'options')) : the_row(); ?>
                                <?php if (have_rows('box')) : ?>
                                    <div class="row">
                                        <?php while (have_rows('box')) : the_row();
                                            $icon2 = get_sub_field('icon2');
                                            $heading = get_sub_field('heading');
                                            $description = get_sub_field('description');
                                        ?>
                                            <div class="col-xl-4 col-md-6">
                                                <div class="box">
                                                    <div class="row">
                                                        <div class="col-md-auto">
                                                            <img src="<?= $icon2['url'] ?>" alt="<?= $icon2['alt'] ?>" />
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
    <div class="section6 text-black">
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