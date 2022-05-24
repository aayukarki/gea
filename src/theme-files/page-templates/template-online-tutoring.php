<?php

/**
 * Template Name: Online Tutoring
 *
 */
get_header();
$fields = get_fields(get_the_ID());
$section1 = $fields['section1'];
$section2 = $fields['section2'];
$section3 = $fields['section3'];
$section4 = $fields['section4'];
$section5 = $fields['section5'];
$section6 = $fields['section6'];
$section7 = $fields['section7'];
$section8 = $fields['section8'];
$section9 = $fields['section9'];
$section10 = $fields['section10'];
$section11 = $fields['section11'];
?>
<?php get_template_part('parts/section', 'banner'); ?>
<section class="online-tutoring">
    <div class="section1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-11">
                    <h2 class="title font-roboto font-weight-medium text-black text-center"><?= $section1['title'] ?></h2>
                    <div class="description"><?= $section1['description'] ?></div>
                </div>
            </div>
        </div>
    </div>
    <div class="section2 text-white">
        <div class="container position-relative">
            <div class="row justify-content-center">
                <div class="col-xl-11">
                    <?php if (have_rows('section2')) : while (have_rows('section2')) : the_row(); ?>
                            <?php if (have_rows('content')) : ?>
                                <div class="row">
                                    <?php while (have_rows('content')) : the_row();
                                        $title = get_sub_field('title');
                                        $description = get_sub_field('description');
                                    ?>
                                        <div class="content col-xl-6">
                                            <h2 class="title font-roboto font-weight-bold"><?= $title ?></h2>
                                            <div class="description"><?= $description ?></div>
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                    <?php endif;
                        endwhile;
                    endif; ?>
                </div>
            </div>
            <div class="image-holder"><img src="<?= $section2['image']['url'] ?>" alt="<?= $section2['image']['alt'] ?>"></div>
        </div>
    </div>

    <div class="section3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-11">
                    <h2 class="title font-roboto font-weight-medium text-black"><?= $section3['title'] ?></h2>
                    <div class="description"><?= $section3['description'] ?></div>
                    <div class="steps">
                        <?php if (have_rows('section3')) : while (have_rows('section3')) : the_row(); ?>
                                <?php if (have_rows('steps')) : ?>
                                    <div class="row">
                                        <?php while (have_rows('steps')) : the_row();
                                            $bg_color = get_sub_field('bg_color');
                                            $step_number = get_sub_field('step_number');
                                            $description = get_sub_field('description');
                                        ?>
                                            <div class="col-lg-3 step text-center">
                                                <div class="icon-holder font-weight-bold text-white rounded-pill" style="background: <?= $bg_color ?>"><?= $step_number ?></div>
                                                <h3 class="title font-weight-black text-darkgray">Step <?= $step_number ?></h3>
                                                <div class="description text-darkgray"><?= $description ?></div>
                                            </div>
                                        <?php endwhile; ?>
                                    </div>
                        <?php endif;
                            endwhile;
                        endif; ?>
                    </div>
                    <div class="image-holder">
                        <img src="<?= $section3['image']['url'] ?>" alt="<?= $section3['image']['alt'] ?>" class="w-100" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section4 text-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-11">
                    <div class="row">
                        <div class="col-xl-5 col-lg-6">
                            <h2 class="title font-weight-bold"><?= $section4['title1'] ?></h2>
                            <div class="description"><?= $section4['description1'] ?></div>
                        </div>
                        <div class="col-xl-7 col-lg-6">
                            <h2 class="title font-weight-bold"><?= $section4['title2'] ?></h2>
                            <div class="description"><?= $section4['description2'] ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section5 bg-secondary text-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-11">
                    <div class="row">
                        <div class="col-lg-6">
                            <h2 class="title font-weight-bold"><?= $section5['title'] ?></h2>
                        </div>
                        <div class="col-lg-3">
                            <div class="description">Enjoy a dynamic and interactive live online environment</div>
                        </div>
                        <div class="col-lg-3">
                            <div class="description">Enjoy a research-based curriculum that will benefit them all the way to university level and beyond</div>
                        </div>
                        <div class="col-lg-3">
                            <div class="description"> Receive individual attention and support in our small live online group</div>
                        </div>
                        <div class="col-lg-3">
                            <div class="description">Surround themselves with a group of like-minded students on the same path as them</div>
                        </div>
                        <div class="col-lg-3">
                            <div class="description">Ignite their passion for learning through our unique teaching style</div>
                        </div>
                        <div class="col-lg-3">
                            <div class="description">Master exam and time management techniques and tools to reduce cognitive load</div>
                        </div>
                    </div>
                    <a href="<?= $section5['button_link']['url'] ?>" class="btn btn-primary"><?= $section5['button_text'] ?></a>
                </div>
            </div>
        </div>
    </div>
    <div class="section6">
        <img src="<?= $section6['image']['url'] ?>" alt="<?= $section6['image']['alt'] ?>" class="w-100" />
    </div>

    <div class="section7">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-11">
                    <div class="row">
                        <div class="col-lg-auto">
                            <h2 class="title font-weight-bold text-black"><?= $section7['title'] ?></h2>
                        </div>
                        <div class="col-lg">
                            <div class="subtitle"><?= $section7['sub_title'] ?></div>
                        </div>
                    </div>
                    <div class="description"><?= $section7['description'] ?></div>
                    <a href="<?= $section7['button_link']['url'] ?>" class="btn btn-secondary"><?= $section7['button_text'] ?></a>
                </div>
            </div>
        </div>
    </div>

    <div class="section8">
        <div class="container-fluid px-0">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="image-holder">
                        <img src="<?= $section8['image']['url'] ?>" alt="<?= $section8['image']['alt'] ?>" class="img-fluid" />
                        <div class="icon-holder1">
                            <img src="<?= get_template_directory_uri() ?>/images/testimonial-icon1.png" />
                        </div>
                        <div class="icon-holder2">
                            <img src="<?= get_template_directory_uri() ?>/images/testimonial-icon2.png" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="content-holder">
                        <h2 class="title font-roboto font-weight-medium text-black"><?= $section8['title'] ?></h2>
                        <div class="description"><?= $section8['description'] ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section9">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-11">
                    <?php if (have_rows('section9')) : while (have_rows('section9')) : the_row(); ?>
                            <?php if (have_rows('course_outline')) : $i = 1 ?>
                                <div class="panel-group" role="tablist">
                                    <?php while (have_rows('course_outline')) : the_row();
                                        $title = get_sub_field('title');
                                        $title_url = str_replace(' ', '-', strtolower($title));
                                        $description = get_sub_field('description');
                                    ?>
                                        <div class="panel panel-default">
                                            <h4 class="panel-title collapsed" data-toggle="collapse" data-parent=".panel-group" href="#<?= $title_url ?>" aria-expanded="false" aria-controls="<?= $title_url ?>"><?= $title ?></h4>
                                            <div id="<?= $title_url ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="<?= $title_url ?>" aria-expanded="true" data-parent=".panel-group">
                                                <div class="panel-body"><?= $description ?></div>
                                            </div>
                                        </div>
                                    <?php $i++;
                                    endwhile; ?>
                                </div>
                    <?php endif;
                        endwhile;
                    endif; ?>
                </div>
            </div>
        </div>
    </div>

    <div class="section10 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-11">
                    <h2 class="title text-black font-weight-medium text-center"><?= $section10['title'] ?></h2>
                    <?php if (have_rows('section10')) : while (have_rows('section10')) : the_row(); ?>
                            <?php if (have_rows('strategies')) : ?>
                                <div class="strategies">
                                    <?php while (have_rows('strategies')) : the_row();
                                        $image = get_sub_field('image');
                                        $bg_color = get_sub_field('bg_color');
                                        $title = get_sub_field('title');
                                        $description = get_sub_field('description');
                                    ?>
                                        <div class="strategy text-center text-lg-left">
                                            <div class="row align-items-center justify-content-center">
                                                <div class="col-auto">
                                                    <div class="icon-holder d-inline-block rounded-pill" style="background: <?= $bg_color ?>"><img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>" /></div>
                                                    <div class="initial text-center">
                                                        <div class="d-inline-block initial-bg bg-white text-tertiary rounded-pill font-weight-black">U</div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-2 col-lg-3">
                                                    <h3 class="title font-weight-black text-darkgray"><?= $title ?></h3>
                                                </div>
                                                <div class="col-lg">
                                                    <div class="description text-darkgray"><?= $description ?></div>
                                                </div>
                                            </div>
                                        </div>
                        <?php endwhile;
                                endif;
                            endwhile;
                        endif; ?>
                                </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section11 bg-secondary text-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-11">
                    <h2 class="title font-weight-medium text-center"><?= $section11['title'] ?></h2>
                    <div class="description"><?= $section11['description'] ?></div>
                </div>
                <div class="col-xl-9">
                    <div class="success-story">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <div class="image-holder">
                                    <img src="<?= $section11['success_story']['image']['url'] ?>" alt="<?= $section11['success_story']['image']['alt'] ?>" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-lg">
                                <div class="content">
                                    <h3 class="title font-weight-bold"><?= $section11['success_story']['title'] ?></h3>
                                    <div class="description"><?= $section11['success_story']['description'] ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                <div class="icon-holder2">
                    <img src="<?= get_template_directory_uri() ?>/images/testimonial-icon2.png" />
                </div>
                <?php get_template_part('parts/section', 'enquiry-form'); ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>