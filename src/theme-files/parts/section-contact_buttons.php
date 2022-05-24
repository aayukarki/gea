<?php
$button_text = get_field('button_text');
$button_link = get_field('button_link');
$contact = get_field('contact', 'options');
?>
<section class="contact-buttons py-3 d-block d-md-none">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-6">
                <a class="btn btn-secondary d-block text-uppercase rounded-0 font-weight-bold p-3 mr-1" href="tel:<?= $contact['phone_number'] ?>">call <?= $contact['phone_number'] ?></a>
            </div>
            <div class="col-6">
                <a class="btn btn-primary d-block text-uppercase rounded-0 font-weight-bold p-3 ml-1" href="tel:<?= $button_link ?>"><?= $button_text ?></a>
            </div>
        </div>
    </div>
</section>