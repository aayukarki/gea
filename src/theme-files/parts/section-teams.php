<section class="team">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="row align-items-center">
                    <div class="col-xl-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/divisions-img.png" class="img-fluid mt-n4" />
                    </div>
                    <div class="col-xl-8">
                        <?php if (have_rows('cta', 'option')) :  ?>
                            <div class="cta-slider">
                                <?php while (have_rows('cta', 'option')) : the_row();
                                    $image = get_sub_field('image');
                                    $title = get_sub_field('title');
                                    $sub_title = get_sub_field('sub_title');
                                ?>
                                    <div class="item">
                                        <div class="d-flex justify-content-center align-items-center text-light">
                                            <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>" class="img-fluid mr-md-3 mr-4" />
                                            <div class="title font-weight-semibold"><?= $title ?> <div class="sub-title font-weight-normal"><?= $sub_title ?></div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>