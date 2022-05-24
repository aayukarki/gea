<section class="awards">
    <div class="container">
        <?php if (have_rows('awards', 'option')) :  ?>
            <div class="row">
                <?php while (have_rows('awards', 'option')) : the_row();
                    $image = get_sub_field('image');
                    $award_name = get_sub_field('award_name');
                    $position = get_sub_field('position');
                ?>
                    <div class="col-xl col-md-4">
                        <div class="award-holder text-center text-black">
                            <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>" />
                            <h4 class="award-name font-weight-medium"><?= $award_name ?></h4>
                            <h5 class="position"><?= $position ?></h5>
                        </div>
                    </div>
                <?php endwhile;  ?>
            </div>
        <?php endif; ?>
    </div>
</section>