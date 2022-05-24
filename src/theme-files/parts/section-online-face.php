<?php
$contact = get_field('contact', 'options');
$online_or_face = $contact['online_or_face'];
?>
<div class="online-face text-black">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-6">
                <h3 class="subtitle font-roboto font-weight-medium text-capitalize text-center"><?= $online_or_face['subtitle'] ?></h3>
                <h2 class="title font-roboto font-weight-bold"><?= $online_or_face['title'] ?></h2>
            </div>
            <div class="col-xl-7 col-lg-6">
                <?php if (have_rows('contact', 'options')) :  ?>
                    <?php while (have_rows('contact', 'options')) : the_row(); ?>
                        <?php if (have_rows('location_and_time')) :  ?>
                            <div class="row">
                                <?php while (have_rows('location_and_time')) : the_row();
                                    $suburb = get_sub_field('suburb');
                                    $address = get_sub_field('address');
                                ?>
                                    <div class="col-xl-6">
                                        <div class="location text-center">
                                            <h2 class="suburb text-uppercase font-weight-black"><?= $suburb ?></h2>
                                            <div class="address"><?= $address ?></div>
                                            <a href="./contact-us/" class="btn btn-secondary">Book Now</a>
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