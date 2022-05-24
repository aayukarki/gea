<?php

/**
 * Template Name: Home Page
 * The home page
 * 
 */
get_header();
$fields = get_fields(get_the_ID());
$banner = $fields['banner'];
$content1 = $fields['content1'];
$section1 = $fields['section1'];
$section2 = $fields['section2'];
$header = get_field('header', 'options');
$contact = get_field('contact', 'options');
?>


<header style="background: url(<?= get_template_directory_uri() ?>/images/banner.png) center/cover no-repeat;">
    <?php get_template_part('parts/section', 'navigation'); ?>
    <section class="banner text-white text-center">
        <div class="container">
            <h1 class="title font-weight-black"><?= $banner['title'] ?></h1>
            <a href="tel:<?= $contact['phone_number'] ?>" class="btn btn-secondary text-uppercase">Call Us</a>
        </div>
    </section>
</header>

<section class="fp-content1 text-center text-md-left">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-xl-7 col-lg-8 order-2 order-md-1">
                <h2 class="title text-primary font-weight-black mr-md-n3"><?= $content1['title'] ?></h2>
                <div class="description"><?= $content1['description'] ?></div>
                <a href="<?= $content1['button_link']['url'] ?>" class="btn btn-secondary text-uppercase"><?= $content1['button_text'] ?></a>
            </div>
            <div class="col-xl-5 col-lg-4 order-1 order-md-2">
                <div class="image-holder mt-md-4"><img src="<?= $content1['image']['url'] ?>" alt="<?= $content1['image']['alt'] ?>" /></div>
            </div>
        </div>
    </div>
</section>

<section class="fp-content2 text-white text-center text-md-left">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h2 class="title1 font-roboto font-weight-bold"><?= $section1['title'] ?></h2>
                    </div>
                    <div class="col-lg-6">
                        <div class="description1"><?= $section1['description'] ?></div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h2 class="title2 font-roboto font-weight-bold"><?= $section2['title'] ?></h2>

                        <div class="description2"><?= $section2['description'] ?></div>
                        <a href="<?= $section2['button_link']['url'] ?>" class="btn btn-secondary text-uppercase"><?= $section2['button_text'] ?></a>
                    </div>
                    <div class="col-lg-6">
                        <div class="image-holder"><img src="<?= get_template_directory_uri() ?>/images/fp-content2-img1.png" /></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('parts/section', 'list-courses'); ?>
<?php get_template_part('parts/section', 'review-contact'); ?>

<?php get_footer(); ?>