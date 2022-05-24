<?php
function init_setup()
{
    add_theme_support('title-tag');

    if (function_exists('add_theme_support')) {
        add_theme_support('post-thumbnails');
    }
}
add_action('after_setup_theme', 'init_setup');

// enable ACF options page
if (function_exists('acf_add_options_page'))
    acf_add_options_page();


function catch_that_image()
{
    global $post, $posts;
    if (has_post_thumbnail()) {
        $first_img = get_the_post_thumbnail_url(get_the_ID(), 'full');
    } else {
        $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
        if (!empty($matches[1][0])) {
            $first_img = $matches[1][0];
        }

        if (empty($first_img)) { //Defines a default image
            $website_url = get_template_directory_uri();
            $first_img =  "$website_url/images/default.jpg";
        }
    }
    return $first_img;
}
