<?php

/**
 * Template Name: Our Team
 *
 */
get_header();
$fields = get_fields(get_the_ID());
$about_team = $fields['about_team']
?>
<?php get_template_part('parts/section', 'banner'); ?>
<section class="teams">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <?php if (have_rows('team_members')) :  ?>
                    <div class="teams-slider">
                        <?php while (have_rows('team_members')) : the_row();
                            $profile_image = get_sub_field('profile_image');
                            $name = get_sub_field('name');
                            $position = get_sub_field('position');
                            $profile_description = get_sub_field('profile_description');
                        ?>
                            <div class="team-member">
                                <div class="row">
                                    <div class="col-xl-3 col-md-4">
                                        <div class="profile-image text-center">
                                            <img src="<?= $profile_image['url'] ?>" alt="<?= $profile_image['alt'] ?>" />
                                        </div>
                                    </div>
                                    <div class="col-xl-9 col-md-8">
                                        <div class="info">
                                            <h3 class="name font-roboto font-weight-medium text-black"><?= $name ?></h3>
                                            <h4 class="position font-roboto font-weight-semibold font-italic"><?= $position ?></h4>
                                            <div class="profile-description"><?= $profile_description ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile;  ?>
                    </div>
                <?php endif; ?>
                <div class="about-team">
                    <div class="row justify-content-center">
                        <div class="col-xl-7">
                            <h2 class="title font-roboto font-weight-medium text-black"><?= $about_team['title'] ?></h2>
                            <div class="description"><?= $about_team['description'] ?></div>
                        </div>
                    </div>
                </div>
                <div class="employees">
                    <div class="row justify-content-center">
                        <?php if (have_rows('team_members')) : $i = 0;  ?>
                            <div class="col-xl-11">
                                <?php while (have_rows('team_members')) : the_row();
                                    $profile_image = get_sub_field('profile_image');
                                    $name = get_sub_field('name');
                                    $qualifications = get_sub_field('qualifications');
                                    $i++;
                                    if ($i > 4) :
                                        break;
                                    endif;
                                ?>
                                    <div class="employee">
                                        <div class="row align-items-center">
                                            <div class="col-xl-4">
                                                <div class="profile-image text-center">
                                                    <img src="<?= $profile_image['url'] ?>" alt="<?= $profile_image['alt'] ?>" />
                                                </div>
                                            </div>
                                            <div class="col-xl-8">
                                                <div class="info">
                                                    <h3 class="name font-roboto font-weight-medium text-black"><?= $name ?></h3>
                                                    <div class="qualifications text-black"><?= $qualifications ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile;  ?>
                            </div>
                        <?php endif; ?>
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