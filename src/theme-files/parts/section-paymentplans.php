<?php
$payment_plans = get_field('payment_plans', 'options');

if (is_single()) {
    $bg_color = "white";
} else {
    $bg_color = "gray";
}
?>
<section class="brighte-payments bg-<?= $bg_color ?> text-white text-center text-lg-left">
    <div class="container">
        <div class="payment-plans" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/payment-bg.png);">
            <div class="row align-items-center">
                <div class="col-xl-5 col-lg-6 order-2 order-lg-1" data-aos="flip-up">
                    <img src="<?= $payment_plans['image']['url'] ?>" alt="<?= $payment_plans['image']['alt'] ?>" class="img-fluid my-lg-n5 mt-5 mb-n5" />
                </div>
                <div class="col-xl-7 col-lg-6 order-1 order-lg-2" data-aos="fade-left">
                    <h2 class="title"><?= $payment_plans['title'] ?></h2>
                    <div class="description">
                        <p><?= $payment_plans['description'] ?></p>
                    </div>
                    <a href="<?= $payment_plans['button_link']['url'] ?>" class="btn btn-gray rounded-0 d-lg-inline-block d-block"><?= $payment_plans['button_text'] ?></a>
                </div>
            </div>
        </div>
    </div>
</section>