<?php

/**
 * Template Name: Our Courses
 *
 */
get_header();
$fields = get_fields(get_the_ID());
$description = $fields['description'];
?>
<?php get_template_part('parts/section', 'banner'); ?>
<section class="our-courses">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-11">
                <div class="section1">
                    <?php if (have_rows('class')) : ?>
                        <div class="row">
                            <?php while (have_rows('class')) : the_row();
                                $image = get_sub_field('image');
                                $background = get_sub_field('background');
                                $title = get_sub_field('title');
                                $page_link = get_sub_field('page_link');
                            ?>
                                <div class="col-md-4">
                                    <a href="<?= $page_link['url'] ?>">
                                        <div class="class text-center">
                                            <div class="icon-holder d-inline-block rounded-pill" style="background: <?= $background ?>"><img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>"></div>
                                            <h3 class="title font-weight-medium text-black"><?= $title ?></h3>
                                        </div>
                                    </a>
                                </div>
                            <?php endwhile;  ?>
                        </div>
                    <?php endif; ?>
                    <div class="description text-center text-primary font-weight-medium">
                        <?= $description ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="section2">
                    <?php if (have_rows('tutoring')) : $i = 1; ?>
                        <ul class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">
                            <?php while (have_rows('tutoring')) : the_row();
                                $category = get_sub_field('category');
                                $category_url = str_replace(' ', '-', strtolower($category));
                            ?>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link <?php if ($i == 1) echo 'active'; ?>" id="pills-<?= $category_url ?>-tab" data-toggle="pill" href="#pills-<?= $category_url ?>" role="tab" aria-controls="pills-<?= $category_url ?>" aria-selected="true"><?= $category ?></a>
                                </li>
                            <?php $i++;
                            endwhile;  ?>
                        </ul>
                    <?php endif; ?>
                    <?php if (have_rows('tutoring')) : $i = 1; ?>
                        <div class="tab-content" id="pills-tabContent">
                            <?php while (have_rows('tutoring')) : the_row();
                                $category = get_sub_field('category');
                                $category_url = str_replace(' ', '-', strtolower($category));
                                $title = get_sub_field('title');
                                $description = get_sub_field('description');
                            ?>
                                <div class="tab-pane fade <?php if ($i == 1) echo 'show active'; ?>" id="pills-<?= $category_url ?>" role="tabpanel" aria-labelledby="pills-<?= $category_url ?>-tab">
                                    <div class="description"><?= $description ?></div>
                                    <h3 class="heading font-roboto font-weight-medium text-black text-center"><?= $title ?></h3>
                                    <?php if (have_rows('course_level')) : $i = 1; ?>
                                        <div class="panel-group" id="accordion<?= $category_url ?>" role="tablist">
                                            <?php while (have_rows('course_level')) : the_row();
                                                $level = get_sub_field('level');
                                                $level_url = str_replace(' ', '-', strtolower($level));
                                                $level_description = get_sub_field('level_description');
                                            ?>
                                                <div class="panel panel-default">
                                                    <h4 class="panel-title <?php if ($i != 1) echo 'collapsed'; ?>" data-toggle="collapse" data-parent="#accordion<?= $category_url ?>" href="#collapse<?= $category_url . $level_url ?>" aria-expanded="true" aria-controls="collapse<?= $category_url . $level_url ?>"><?= $level ?></h4>
                                                    <div id="collapse<?= $category_url . $level_url ?>" class="panel-collapse collapse <?php if ($i == 1) echo 'show'; ?>" role="tabpanel" aria-labelledby="heading<?= $category_url . $level_url ?>" aria-expanded="true" data-parent="#accordion<?= $category_url ?>">
                                                        <div class="panel-body"><?= $level_description ?></div>
                                                    </div>
                                                </div>
                                            <?php $i++;
                                            endwhile;  ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php $i++;
                            endwhile;  ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
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