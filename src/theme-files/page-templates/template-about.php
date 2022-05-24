<?php

/**
 * Template Name: About Us
 *
 */
get_header();
$fields = get_fields(get_the_ID());
$section1 = $fields['section1'];
$section2 = $fields['section2'];
$section3 = $fields['section3'];
?>
<?php get_template_part('parts/section', 'banner'); ?>
<section class="about-content1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="row align-items-center mb-md-5 mb-3">
                    <div class="col-lg-auto">
                        <h2 class="title font-roboto font-weight-medium text-black"><?= $section1['title'] ?></h2>
                    </div>
                    <div class="col-lg">
                        <div class="description"><?= $section1['description1'] ?></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row align-items-lg-start align-items-center">
                            <div class="col-md-auto">
                                <div class="icon bg-secondary rounded-pill"></div>
                            </div>
                            <div class="col">
                                <div class="description"><?= $section1['description2'] ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row align-items-lg-start align-items-center">
                            <div class="col-md-auto">
                                <div class="icon bg-secondary rounded-pill"></div>
                            </div>
                            <div class="col">
                                <div class="description"><?= $section1['description3'] ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about-content2 text-white text-center text-lg-left">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="title font-roboto font-weight-bold"><?= $section2['title'] ?></h2>
                        <div class="description"><?= $section2['description'] ?></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="image-holder"><img src="<?= $section2['image']['url'] ?>" alt="<?= $section2['image']['alt'] ?>" /></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about-content3 text-black">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="row">
                    <div class="col-lg-4">
                        <h2 class="title font-roboto font-weight-black"><?= $section3['title'] ?></h2>
                    </div>
                    <div class="col-lg-8">
                        <?php if (have_rows('section3')) :  ?>
                            <?php while (have_rows('section3')) : the_row(); ?>
                                <?php if (have_rows('points')) :  ?>
                                    <div class="row">
                                        <?php while (have_rows('points')) : the_row();
                                            $icon = get_sub_field('icon');
                                            $info = get_sub_field('info');
                                        ?>
                                            <div class="col-md-6">
                                                <div class="item text-center">
                                                    <img src="<?= $icon['url'] ?>" alt="<?= $icon['alt'] ?>" />
                                                    <div class="info font-roboto font-weight-medium"><?= $info ?></div>
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