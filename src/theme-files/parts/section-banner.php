<?php
$title = get_the_title();
if (is_home()) {
    $title = "Blogs & Guides";
}
$contact = get_field('contact', 'options');
$featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
if (!$featured_img_url) {
    $featured_img_url = get_template_directory_uri() . '/images/banner.png';
}
if (is_home() || is_single()) {
    $featured_img_url = get_template_directory_uri() . '/images/banner.png';
}
if (is_page_template('page-templates/template-courses-inner.php') || is_page_template('page-templates/template-courses-inner-inner.php')) {
    $justify_content = "start offset-xl-2";
    $text_color = "black";
} else {
    $justify_content = "end";
    $text_color = "white";
}
?>
<div class="inner-banner text-white" style="background: url(<?= $featured_img_url ?>) center/cover no-repeat;">
    <?php get_template_part('parts/section', 'navigation'); ?>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-11">
                <div class="row justify-content-<?= $justify_content ?>">
                    <div class="col-xl-6">
                        <?php
                        if (is_page_template('page-templates/template-suburb.php')) { ?>
                            <h1 class="title font-weight-bold">Boost Confidence & Grades with Personalised & Expert Tutoring Near <?= $title ?></h1>
                        <?php } else { ?>
                            <h1 class="title font-weight-bold text-<?= $text_color ?>"><?= $title ?></h1>
                        <?php } ?>
                        <div class="text-center mt-5"><a href="tel:<?= $contact['phone_number'] ?>" class="btn btn-secondary text-uppercase d-inline-block d-md-none">Call Us</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>