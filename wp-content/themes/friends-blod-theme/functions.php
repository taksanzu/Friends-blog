<?php

function friends_blog_files() {
    wp_enqueue_style('friends_blog_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'friends_blog_files');

?>