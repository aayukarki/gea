<?php
get_header();
get_template_part('parts/section', 'banner');
$fields = get_fields(get_the_ID());
$featured_img_url = get_the_post_thumbnail_url($post->ID, 'full');
$service_content1 = $fields['service_content1'];
$header = get_field('header', 'options');
$contact = get_field('contact', 'options');
$phone_number = $contact['phone_number'];

?>
<?php get_template_part('parts/section', 'list_services'); ?>
<div class="service-content1 bg-primary text-white">
    <div class="container">
        <div class="row align-items-xl-center align-items-end">
            <div class="col-lg-7">
                <div class="left-content">
                    <h2 class="title font-weight-extrabold"><?= $service_content1['title'] ?></h2>
                    <h3 class="title2 font-weight-extrabold"><?= $service_content1['title2'] ?></h3>
                    <div class="description"><?= $service_content1['description'] ?></div>
                    <div class="row no-gutters align-items-center mt-xl-5 mt-4">
                        <div class="col-md-auto">
                            <a href="<?= $header['book_link']['url'] ?>" class="btn btn-lightgray d-block rounded-0 px-5 py-3 mr-md-2 my-md-0 my-3"><?= $header['book_text'] ?></a>
                        </div>
                        <div class="col-md-auto">
                            <a href="tel:<?= $contact['phone_number'] ?>" class="btn btn-lightgray d-block rounded-0 px-5 py-3"><img src="<?php echo get_template_directory_uri(); ?>/images/phone.png" alt="phone-icon" class="img-fluid mr-2" /><?= $contact['phone_number'] ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <img src="<?= $service_content1['image']['url'] ?>" alt="<?= $service_content1['image']['alt'] ?>" class="img-fluid mt-lg-n5 mt-4">
            </div>
        </div>
    </div>
</div>
<div class="service-content2">
    <?php if (have_rows('service_content2')) : ?>
        <div class="container">
            <?php while (have_rows('service_content2')) : the_row();
                $title = get_sub_field('title');
                $description = get_sub_field('description');
            ?>
                <h2 class="title font-weight-extrabold"><?= $title ?></h2>
                <div class="description"><?= preg_replace('{phone_number}', $phone_number, $description) ?></div>
            <?php endwhile;  ?>
        </div>
    <?php endif; ?>
</div>
<?php get_template_part('parts/section', 'paymentplans'); ?>
<?php
get_footer();
?>