<?php
function kmir_styles_scripts(){
    wp_enqueue_style('style-main', get_template_directory_uri() . '/assets/css/main.css', '', '4.0.0');
    wp_enqueue_style('style-compilado', get_template_directory_uri() . '/assets/css/compilado.css', '', '4.0.0');
}
add_action('wp_enqueue_scripts',  'kmir_styles_scripts');