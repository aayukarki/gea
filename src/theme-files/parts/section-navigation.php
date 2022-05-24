<?php
$header = get_field('header', 'options');
$contact = get_field('contact', 'options');
$social = get_field('social', 'options');
?>
<section class="navigation">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-11">
                <div class="row align-items-center justify-content-xl-between justify-content-center">
                    <div class="col-auto d-none">
                        <div class="site-logo">
                            <a href="<?= home_url() ?>"> <img class="img-fluid mb-lg-0 mb-n2" src="<?= $header['logo']['url']; ?>" alt="<?= $header['logo']['alt']; ?>"> </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row align-items-center">
                            <div class="col">
                                <nav class="topbar-nav navbar navbar-expand-lg navbar-light">
                                    <a href="<?= home_url() ?>" class="navbar-brand">
                                        <img class="img-fluid mb-lg-0 mb-n2" src="<?= $header['logo']['url']; ?>" alt="<?= $header['logo']['alt']; ?>">
                                    </a>
                                    <a href="tel:<?= $contact['phone_number'] ?> ?>" class="btn btn-primary d-block d-lg-none"><?= $contact['phone_number'] ?></a>
                                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="sr-only">Toggle navigation</span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarNav">
                                        <?php
                                        wp_nav_menu(array(
                                            'menu' => 'Primary Menu',
                                            'menu_class' => 'navlink-menu navbar-nav ml-lg-auto',
                                            'item_class' => 'nav-item',
                                            'link_class' => '',
                                            'container_class' => '',
                                            'container' => 'ul',
                                            'container_id' => '',
                                        ));
                                        ?>
                                    </div>
                                </nav>
                            </div>
                            <div class="col-lg-auto mt-md-0 mt-4 d-none d-lg-block">
                                <a href="tel:<?= $contact['phone_number'] ?>" class="btn btn-primary d-block"><?= $contact['phone_number'] ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>