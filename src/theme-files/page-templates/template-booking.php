<?php

/**
 * Template Name: Booking
 *
 */
get_header();
$fields = get_fields(get_the_ID());
$booking = $fields['booking'];
$contact = get_field('contact', 'options');
get_template_part('parts/section', 'banner');
?>
<div class="booking-form">
    <div class="container">
        <h2 class="title text-secondary font-weight-bold text-center"><?= $booking['title'] ?></h2>
        <div class="row align-items-center justify-content-between">
            <div class="col-auto">
                <h3 class="subtitle text-primary font-weight-bold text-center text-md-left"><?= $booking['sub_title'] ?></h3>
            </div>
            <div class="col-auto">
                <a href="tel:<?= $contact['phone_number'] ?>" class="btn btn-primary d-block rounded-0 px-5 py-3"><img src="<?php echo get_template_directory_uri(); ?>/images/phone.png" alt="phone-icon" class="img-fluid mr-2" /><?= $contact['phone_number'] ?></a>
            </div>
        </div>
        <div class="form-contain"><?= do_shortcode($booking['form_shortcode']) ?></div>
    </div>
</div>
<?php get_template_part('parts/section', 'list_services'); ?>
<?php
get_footer();
?>