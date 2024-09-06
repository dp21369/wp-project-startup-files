<?php 

function spitout_scripts()
{
    /* Enquee CSS  */
    wp_enqueue_style('style-css', get_template_directory_uri() . '/assets/css/style.css', time(), true);
    wp_enqueue_style('responsive-css', get_template_directory_uri() . '/assets/css/style-responsive.css', time(), true);
    
    /* Enquee JS  */
    wp_enqueue_script('custom-scripts', get_template_directory_uri() . '/js/script.js', array(), time(), true);
}
add_action('wp_enqueue_scripts', 'spitout_scripts');