<?php

/**
 * Template Name: Full Width Page
 *
 */
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
?>
        <section class="full-width">
            <?php the_content(); ?>
        </section>
<?php
    }
    wp_reset_postdata();
}
?>