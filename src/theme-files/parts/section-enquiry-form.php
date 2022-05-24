<?php
$contact_form = get_field('contact_form', 'options');
?>
<div class="enquiry-form bg-white">
    <h2 class="title text-center font-weight-extrabold text-black"><?= $contact_form['title'] ?></h2>
    <div class="form-contain"><?= do_shortcode($contact_form['form_shortcode']) ?></div>
</div>