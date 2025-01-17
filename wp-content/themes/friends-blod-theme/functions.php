<?php

function friends_blog_files() {
    //Styles

    //main style
    wp_enqueue_style('friends_blog_main_styles', get_stylesheet_uri());
    //boostrap
    wp_enqueue_style('bootstrap', '//cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/css/bootstrap.min.css');
    //fontawesome
    wp_enqueue_style('fontawesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css');

    //Scripts

    //jquery
    wp_enqueue_script('jquery', '//cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js');
    //bootstrap
    wp_enqueue_script('bootstrap', '//cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/js/bootstrap.min.js');


}

add_action('wp_enqueue_scripts', 'friends_blog_files');

?>