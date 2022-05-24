<?php
$testimonials = get_field('testimonials', 'options');
?>
<div class="testimonials text-white text-center text-md-left">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-5 order-2 order-md-1">
            <div class="quote-img text-right">
                <img src="<?= get_template_directory_uri() ?>/images/quote.png" />
            </div>
        </div>
        <div class="col-md-7 order-1 order-md-2">
            <h2 class="title font-roboto font-weight-bold"><?= $testimonials['title1'] ?></h2>
        </div>
    </div>

    <?php if (have_rows('testimonials', 'options')) :  ?>
        <?php while (have_rows('testimonials', 'options')) : the_row(); ?>
            <?php if (have_rows('reviews')) :  ?>
                <div class="testimonial-slider">
                    <?php while (have_rows('reviews')) : the_row();
                        $image = get_sub_field('image');
                        $review = get_sub_field('review');
                    ?>
                        <div class="item">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="review-img-holder"><img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>" /></div>
                                </div>
                                <div class="col-md-7">
                                    <div class="review"><?= $review ?></div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile;  ?>
                </div>
            <?php endif; ?>
    <?php endwhile;
    endif; ?>
</div>