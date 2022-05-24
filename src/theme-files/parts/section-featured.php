<?php
$featured = get_field('featured', 'options');
?>
<div class="featured">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-11">
                <h2 class="title font-roboto font-weight-bold text-black text-center"><?= $featured['title'] ?></h2>
                <?php
                $gallery = $featured['gallery'];
                if ($gallery) : ?>
                    <div class="row align-items-center justify-content-between">
                        <?php foreach ($gallery as $image) : ?>
                            <div class="col-lg-auto col-md">
                                <div class="item text-center">
                                    <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>" />
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
            </div>
        <?php endif; ?>
        </div>
    </div>
</div>