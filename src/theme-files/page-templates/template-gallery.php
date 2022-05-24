<?php

/**
 * Template Name: Gallery
 *
 */
get_header();
get_template_part('parts/section', 'banner');
$fields = get_fields(get_the_ID());
?>

<section class="gallery-section">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-4">
                <h2 class="title font-weight-bold"><?= the_title() ?></h2>
                <nav>
                    <?php if (have_rows('gallery')) : ?>
                        <ul class="filter-options">
                            <li class="active option d-inline-block d-md-none"><button class="all">All</button></li>
                            <li class="active d-none d-md-inline-block"><button class="all">All</button></li>
                            <?php while (have_rows('gallery')) : the_row();
                                $categories = get_sub_field('categories');
                            ?>
                                <li><button class="category-<?= str_replace(' ', '-', strtolower($categories)) ?>"><?= $categories ?></button></li>
                            <?php endwhile;  ?>
                        </ul>
                    <?php endif; ?>
                </nav>
            </div>
            <div class="col-xl-9 col-lg-8">
                <?php if (have_rows('gallery')) : ?>
                    <div class="gallery-holder row">
                        <?php while (have_rows('gallery')) : the_row();
                            $categories = get_sub_field('categories');
                            $images = get_sub_field('image_gallery');
                            if ($images) :
                        ?>
                                <?php foreach ($images as $image) : ?>
                                    <div class="item items col-xl-4 col-md-6 category-<?= str_replace(' ', '-', strtolower($categories)) ?>">
                                        <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>" class="img-fluid" />
                                        <div class="heading"><?= $image['alt'] ?></div>
                                    </div>
                                <?php endforeach; ?>
                        <?php endif;
                        endwhile;  ?>
                    </div>
                <?php endif; ?>
                <button id="loadMore" class="btn btn-primary rounded-0 p-3 d-block d-lg-none w-100">Load More</button>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('parts/section', 'services_list'); ?>
<?php get_template_part('parts/section', 'social-reviews'); ?>

<?php get_footer(); ?>