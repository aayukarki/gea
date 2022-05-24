<?php
$success_story = get_field('success_story', 'options');
if (is_page('42284')) {
    $background = 'light';
} else {
    $background = 'white';
}
?>
<div class="success-story bg-<?= $background ?>">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-11">
                <div class="row">
                    <div class="col-auto">
                        <div class="image-holder">
                            <img src="<?= get_template_directory_uri() ?>/images/reviewer-img1.png" alt="reviewer-img1" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="content">
                            <h3 class="title text-primary font-weight-bold"><?= $success_story['title'] ?></h3>
                            <div class="description"><?= $success_story['description'] ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>