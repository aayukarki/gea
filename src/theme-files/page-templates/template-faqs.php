<?php

/**
 * Template Name: Faqs
 *
 */
get_header();
$fields = get_fields(get_the_ID());
?>
<?php get_template_part('parts/section', 'banner'); ?>

<section class="faqs">
    <div class="section1">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-11">
                    <?php if (have_rows('faqs')) : $i = 1; ?>
                        <div class="panel-group" id="accordion" role="tablist">
                            <?php while (have_rows('faqs')) : the_row();
                                $question = get_sub_field('question');
                                $answer = get_sub_field('answer');
                            ?>
                                <div class="panel panel-default">
                                    <h4 class="panel-title <?php if ($i != 1) echo 'collapsed'; ?>" data-toggle="collapse" data-parent="#accordion" href="#collapse<?= $i ?>" aria-expanded="true" aria-controls="collapse<?= $i ?>"><?= $question ?></h4>
                                    <div id="collapse<?= $i ?>" class="panel-collapse collapse <?php if ($i == 1) echo 'show'; ?>" role="tabpanel" aria-labelledby="heading<?= $i ?>" aria-expanded="true" data-parent="#accordion">
                                        <div class="panel-body"><?= $answer ?></div>
                                    </div>
                                </div>
                            <?php $i++;
                            endwhile;  ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <?php get_template_part('parts/section', 'featured'); ?>
    <?php get_template_part('parts/section', 'parents-students'); ?>
</section>

<section class="review-and-contact">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <div class="icon-holder1">
                    <img src="<?= get_template_directory_uri() ?>/images/testimonial-icon1.png" />
                </div>
                <?php get_template_part('parts/section', 'testimonials'); ?>
                <div class="icon-holder2">
                    <img src="<?= get_template_directory_uri() ?>/images/testimonial-icon2.png" />
                </div>
                <?php get_template_part('parts/section', 'enquiry-form'); ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>