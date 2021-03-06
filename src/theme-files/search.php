<?php

/**
 * Template Name: Search Page
 *
 */
get_header();
?>
<section id="primary" class="content-area py-md-5 py-4">
    <main id="main" class="site-main">
        <div class="container">
            <?php
            global $query_string;
            $query_args = explode("&", $query_string);
            $search_query = array();

            foreach ($query_args as $key => $string) {
                $query_split = explode("=", $string);
                $search_query[$query_split[0]] = urldecode($query_split[1]);
            } // foreach

            $the_query = new WP_Query($search_query);
            if ($the_query->have_posts()) :
            ?>
                <!-- the loop -->
                <ul>
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <li>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </li>
                    <?php endwhile; ?>
                </ul>
                <!-- end of the loop -->
                <?php wp_reset_postdata(); ?>

            <?php else : ?>
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>

        </div>
    </main><!-- #main -->
</section><!-- #primary -->
<?php
get_footer();
