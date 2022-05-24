<?php
/**
 * Template Name: Contact
 *
 */
$fields = get_fields(get_the_ID());
$contact_section = $fields['contact'];
$contact = get_field('contact', 'options');
$contact_form = get_field('contact_form', 'options');
get_header();
get_template_part('parts/section', 'banner');
?>
<div class="contact-bg"><img src="<?= get_template_directory_uri() ?>/images/contact-bg.png" class="w-100" /></div>
<section class="contact bg-primary text-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <?php if (have_rows('social', 'options')) :  ?>
                    <div class="social">
                        <?php while (have_rows('social', 'options')) : the_row();
                            $social_image = get_sub_field('social_image');
                            $social_link = get_sub_field('social_link');
                        ?>
                            <a href="<?= $social_link ?>" target="_blank" class="d-inline-block"><img src="<?= $social_image['url'] ?>" alt="<?= $social_image['alt'] ?>" class="img-fluid" /></a>
                        <?php endwhile;  ?>
                    </div>
                <?php endif; ?>
                <h2 class="title font-weight-bold"><?= $contact_section['title'] ?></h2>
                <h3 class="subtitle font-weight-bold"> <?= $contact_section['subtitle'] ?></h3>
                <div class="phone">
                    <a href="tel:<?= $contact['phone_number'] ?>"><img src="<?= get_template_directory_uri() ?>/images/phone.png" class="img-fluid mr-3" /> <?= $contact['phone_number'] ?></a>
                </div>
                <div class="email">
                    <h4 class="heading font-weight-bold"><img src="<?= get_template_directory_uri() ?>/images/email.png" class="img-fluid mr-4" /> <?= $contact['existing_students'] ?></h4>
                    <a href="#"><?= $contact['email1'] ?></a>
                </div>
                <div class="email">
                    <h4 class="heading font-weight-bold"><img src="<?= get_template_directory_uri() ?>/images/email.png" class="img-fluid mr-4" /> <?= $contact['new_enquiries'] ?></h4>
                    <a href="#"><?= $contact['email2'] ?></a>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="contact-form bg-white text-tertiary">
                    <div class="form-contain"><?= do_shortcode($contact_form['form_shortcode']) ?></div>
                </div>
            </div>
        </div>
        <div class="location">
            <?php if (have_rows('contact', 'options')) :  ?>
                <?php while (have_rows('contact', 'options')) : the_row(); ?>
                    <?php if (have_rows('location_and_time')) :  ?>
                        <div class="row">
                            <?php while (have_rows('location_and_time')) : the_row();
                                $suburb = get_sub_field('suburb');
                                $address = get_sub_field('address');
                                $operating_hours = get_sub_field('operating_hours');
                            ?>
                                <div class="col-xl-4 col-md-6">
                                    <h3 class="suburb font-weight-bold"><?= $suburb ?></h3>
                                    <div class="address font-weight-semibold"><?= $address ?></div>
                                    <div class="operating-hours d-flex align-items-center">
                                        <img src="<?= get_template_directory_uri() ?>/images/clock-blue.png" class="img-fluid mr-md-2 mr-4">
                                        <div><?= $operating_hours ?></div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
            <?php endif;
                endwhile;
            endif; ?>
        </div>
    </div>
</section>
<?php
get_footer();
?>