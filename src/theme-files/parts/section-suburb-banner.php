<?php
$title = get_the_title();
?>
<div class="inner-banner text-white" style="background: url(<?= get_template_directory_uri() ?>/images/banner.png) center/cover no-repeat;">
    <?php get_template_part('parts/section', 'navigation'); ?>
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-xl-8">
                <h1 class="title font-weight-bold">Boost Confidence & Grades with Personalised & Expert Tutoring Near <?= $title ?></h1>
            </div>
        </div>
    </div>
</div>