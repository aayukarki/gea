<?php
$args = array(
    'post_type'      => 'post',
    'posts_per_page' => -1,
    'post_status'    => 'publish',
    'order'          => 'DESC',
    'orderby'        => 'publish_date',
);
$the_query = new WP_Query($args);
get_header();
get_template_part('parts/section', 'banner');
?>
<div class="blog-page-wrapper">
    <div class="container">
        <ul class="filter-options d-flex align-items-center justify-content-center">
            <li class="active"><button class="all">All</button></li>
            <?php
            $categories = get_categories();
            foreach ($categories as $category) {
                echo '<li class=""><button class="' . str_replace(' ', '-', strtolower($category->name)) . '">' . $category->name . '</button></li>';
            }
            ?>
        </ul>
        <div class="row blog-posts">
            <?php
            if ($the_query->have_posts()) :
                /* Start the Loop */
                while ($the_query->have_posts()) : $the_query->the_post();

                    $blog_list = catch_that_image();
                    $image_url = get_template_directory_uri();
                    $excerpt = get_the_excerpt();
                    $excerpt = substr($excerpt, 0, 240);
                    $result = substr($excerpt, 0, strrpos($excerpt, ' '));
                    $category_name = get_the_category()[0]->name;
                    $category_url = str_replace(' ', '-', strtolower($category_name));
                    /*
                     * Include the Post-Type-specific template for the content.
                     * If you want to override this in a child theme, then include a file
                     * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                     */

                    //$posttags = get_the_tags();
                    //if ($posttags) {
                    //    foreach ($posttags as $tag) {
                    //        $blog_info .= '<span><a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a></span>';
                    //    }
                    //}
                    //$blog_info .= '</div>
            ?>
                    <div class="col-md-4 blog-detail <?= $category_url ?>">
                        <div class="blog-img">
                            <a href="<?= get_the_permalink() ?>"><img data-src="<?= $blog_list ?>" class="img-fluid lazyload" /></a>
                        </div>
                        <div class="date d-flex align-items-center"><img src="<?= $image_url ?>/images/calendar.png" class="img-fluid mr-3" /><?= get_the_date() ?></div>
                        <h6 class="blog-title"><?= get_the_title() ?></h6>
                        <div class="excerpt"><?= $result ?></div>
                        <div class="read-more-btn">
                            <a href="<?= get_the_permalink() ?>" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
            <?php
                endwhile;
            else :
                get_template_part('parts/content', 'none');
            endif;
            wp_reset_postdata();
            ?>
        </div>
        <div class="read-more text-center">
            <button class="next-btn btn btn-secondary">Click to Read More</button>
        </div>
    </div>
</div>
<?php get_footer(); ?>