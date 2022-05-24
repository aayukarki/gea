<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
get_header();
get_template_part('parts/section', 'banner');
?>

<section id="primary" class="content-area">
    <main id="main" class="site-main">
        <div class="container container-padded">
            <div class="error-404 not-found">
                <h1 class="page-title"><?php _e('Oops! That page can&rsquo;t be found.', 'twentynineteen'); ?></h1>
                <div class="page-content ">
                    <p><?php _e('It looks like nothing was found at this location.', 'twentynineteen'); ?></p>
                </div><!-- .page-content -->
            </div><!-- .error-404 -->
        </div>
    </main><!-- #main -->
</section><!-- #primary -->

<?php
get_footer();
