<?php

/**
 * Template Name: The Book
 *
 */
get_header();
$fields = get_fields(get_the_ID());
$section1 = $fields['section1'];
$section2 = $fields['section2'];
$section3 = $fields['section3'];
?>
<?php get_template_part('parts/section', 'banner'); ?>
<section class="the-book">
    <div class="section1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-11">
                    <div class="row align-items-center">
                        <div class="col-xl-4">
                            <h2 class="title font-roboto font-weight-medium text-black"><?= $section1['title'] ?></h2>
                        </div>
                        <div class="col-xl-8">
                            <h3 class="subtitle text-black"><?= $section1['subtitle'] ?></h3>
                            <div class="description"><?= $section1['description'] ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section2 text-white">
        <div class="container">
            <div class="content-with-video ">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="<?= $section2['video_link'] ?>"></iframe>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h2 class="title font-roboto font-weight-bold"><?= $section2['title'] ?></h2>
                        <h3 class="subtitle font-roboto"><?= $section2['subtitle'] ?></h3>
                    </div>
                </div>
            </div>
            <div class="description"><?= $section2['description'] ?></div>
        </div>
    </div>
    <div class="section3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-11">
                    <div class="buy-book">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-auto">
                                <h2 class="title text-black text-uppercase"><?= $section3['title'] ?></h2>
                            </div>
                            <div class="col-auto">
                                <a href="<?= $section3['buy_link']['url'] ?>" class="btn btn-primary"><?= $section3['buy_text'] ?></a>
                            </div>
                        </div>
                        <h3 class="subtitle text-center text-black text-uppercase"><?= $section3['subtitle'] ?></h3>
                    </div>
                    <div class="book-form">
                        <div class="row no-gutters">
                            <div class="col-md-5 order-2 order-md-1">
                                <h2 class="title font-weight-extrabold text-black"><?= $section3['form_title'] ?>.</h2>
                                <div class="subtitle text-black"><?= $section3['form_subtitle'] ?></div>
                                <div class="form-contain"><?= do_shortcode($section3['form_shortcode']) ?></div>
                            </div>
                            <div class="col-md-7 order-1 order-md-2">
                                <img src="<?= get_template_directory_uri() ?>/images/the-book.png" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php get_template_part('parts/section', 'featured'); ?>
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