<?php

function my_enqueue_styles()
{
    wp_enqueue_style('remixicon', '//cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'my_enqueue_styles');
