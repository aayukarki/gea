<?php
$contact = get_field('contact', 'options');
$args = array(
    'post_type'      => 'page',
    'posts_per_page' => 6,
    'order'          => 'ASC',
    'orderby'        => 'publish_date',
    'meta_query' => array(
        array(
            'key' => '_wp_page_template',
            'value' => 'page-templates/template-courses-inner-inner.php'
        )
    )
);
?>
<section class="fp-courses">
    <div class="container">
        <?php
        // The Query
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) $i = 1; {
        ?>
            <div class="row">
                <?php
                while ($the_query->have_posts()) {
                    $the_query->the_post();
                    $course_icon = get_field('course_icon');
                    $icon_bg_color = get_field('icon_bg_color');
                    $course_description = get_field('course_description');
                    $title = get_the_title();
                    $link = get_the_permalink();
                ?>
                    <div class="col-xl-4 col-md-6 item text-center">
                        <div class="icon-holder d-inline-block rounded-pill" style="background: <?= $icon_bg_color ?>"><img src="<?= $course_icon['url'] ?>" alt="<?= $course_icon['alt'] ?>" /></div>
                        <div class="number">
                            <div class="d-inline-block number-bg bg-white text-tertiary rounded-pill font-weight-black">0<?= $i ?></div>
                        </div>
                        <h3 class="title font-weight-black text-darkgray"><?= $title ?></h3>
                        <div class="description text-darkgray"><?= $course_description ?></div>
                        <div class="row">
                            <div class="col-lg-6">
                                <a href="<?= $link ?>" class="btn-information btn btn-secondary text-uppercase d-block"><img src="<?= get_template_directory_uri() ?>/images/info.png" class="mr-2" /> More Info</a>
                            </div>
                            <div class="col-lg-6">
                                <a href="./contact-us/" class="btn-phone-call btn btn-primary text-uppercase d-none d-md-block"><img src="<?= get_template_directory_uri() ?>/images/phone-call.png" class="mr-2" /> Contact Us</a>
                                <a href="tel:<?= $contact['phone_number'] ?>" class="btn-phone-call btn btn-primary text-uppercase d-block d-md-none"><img src="<?= get_template_directory_uri() ?>/images/phone-call.png" class="mr-2" /> Contact US</a>
                            </div>
                        </div>
                    </div>
                <?php $i++;
                } ?>
            </div>
        <?php }
        // Reset Post Data
        wp_reset_postdata(); ?>
    </div>
</section>
</div>
</section>