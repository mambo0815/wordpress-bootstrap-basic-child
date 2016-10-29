<?php

/**
 * Proper way to enqueue scripts and styles
 */
function add_theme_scripts() {
    wp_enqueue_style( 'style', get_template_directory_uri() . '/bootstrap-basic-child' );
    //wp_enqueue_script( 'custom-script', get_template_directory_uri() . '/js/custom-script.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


// Replaces the excerpt "Read More" text by a link
function new_excerpt_more($more) {
    global $post;
    return '<a class="moretag" href="'. get_permalink($post->ID) . '"> ...weiterlesen</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

