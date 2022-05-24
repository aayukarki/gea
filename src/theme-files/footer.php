<?php

/**
 * The template for displaying the footer. 
 */
$header = get_field('header', 'option');
$footer = get_field('footer', 'option');
$contact = get_field('contact', 'options');
?>
<?php get_template_part('parts/section', 'awards'); ?>
<footer>
    <div class="top-footerbar">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-11">
                    <div class="row justify-content-between">
                        <div class="col-lg col-md-6">
                            <h6 class="heading"><?php echo wp_get_nav_menu_object(45)->name ?></h6>
                            <div class="">
                                <div class="footer-menu-links">
                                    <?php
                                    wp_nav_menu(array(
                                        'menu' => 'Why Us',
                                        'menu_class' => 'menu',
                                        'item_class' => '',
                                        'link_class' => ''
                                    ));
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg col-md-6">
                            <h6 class="heading"><?php echo wp_get_nav_menu_object(46)->name ?></h6>
                            <div class="">
                                <div class="footer-menu-links">
                                    <?php
                                    wp_nav_menu(array(
                                        'menu' => 'resources',
                                        'menu_class' => 'menu',
                                        'item_class' => '',
                                        'link_class' => ''
                                    ));
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg col-md-6">
                            <h6 class="heading"><?php echo wp_get_nav_menu_object(24)->name ?></h6>
                            <div class="">
                                <div class="footer-menu-links">
                                    <?php
                                    wp_nav_menu(array(
                                        'menu' => 'courses',
                                        'menu_class' => 'menu',
                                        'item_class' => '',
                                        'link_class' => ''
                                    ));
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg col-md-6">
                            <h6 class="heading"><?php echo wp_get_nav_menu_object(47)->name ?></h6>
                            <div class="">
                                <div class="footer-menu-links">
                                    <?php
                                    wp_nav_menu(array(
                                        'menu' => 'contact',
                                        'menu_class' => 'menu',
                                        'item_class' => '',
                                        'link_class' => ''
                                    ));
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <h6 class="heading">Are you ready? here’s where to Find us.</h6>
                            <?php if (have_rows('contact', 'options')) :  ?>
                                <?php while (have_rows('contact', 'options')) : the_row(); ?>
                                    <?php if (have_rows('location_and_time')) :  ?>
                                        <div class="row location-and-time">
                                            <?php while (have_rows('location_and_time')) : the_row();
                                                $suburb = get_sub_field('suburb');
                                                $address = get_sub_field('address');
                                                $operating_hours = get_sub_field('operating_hours');
                                            ?>
                                                <div class="col-md-6 item">
                                                    <div class="suburb font-weight-bold text-primary"><?= $suburb ?></div>
                                                    <div class="address font-weight-semibold"><?= $address ?></div>
                                                    <div class="map">
                                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13236.219239355192!2d151.1353243!3d-33.9654307!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x944451741ccb0d8c!2sGlobal%20Education%20Academy%20-%20Tutoring%20Kogarah!5e0!3m2!1sen!2sau!4v1652941420704!5m2!1sen!2sau" width="100%" height="136" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                    </div>
                                                </div>
                                            <?php endwhile;  ?>
                                        </div>
                                    <?php endif; ?>
                            <?php endwhile;
                            endif; ?>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-footerbar bg-black text-lightgray py-3">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-auto">
                    <div class="copyright font-weight-semibold text-center">
                        © <?php echo date("Y"); ?> <?php echo get_bloginfo('name'); ?> <span class="px-lg-2 px-1">|</span> All Rights Reserved
                    </div>
                </div>
                <div class="col-auto mt-lg-0 mt-3">
                    <a href="https://www.aiims.com.au/like-our-work/"><img data-src="<?= get_template_directory_uri() ?>/images/powered-by.png" class="img-fluid lazyload ml-5"></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<div id="back-top" class="goTop active">
    <a href="javascript:void(0);">
        <div class="back-to-top-icon"><img src="<?= get_template_directory_uri() ?>/images/arrow.png" class="img-fluid"></div>
    </a>
</div>
<?php wp_footer(); ?>
</body>

</html>