<?php
    // menu registration
function menus() {
    register_nav_menu('primary', __('Primary Menu'));
    register_nav_menu('whyus', __('Why Us'));
    register_nav_menu('courses', __('Courses'));
    register_nav_menu('resources', __('Resources'));
    register_nav_menu('contact', __('Contact Us'));
}
add_action('init', 'menus');