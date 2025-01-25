<?php

function friends_blog_plugin(){
    register_post_type('event', array(
        'public' => true,
        'labels' => array(
            'name' => 'Events',
            'add_new_item' => 'Add New Event',
            'edit_item' => 'Edit Event',
            'all_items' => 'All Events',
            'singular_name' => 'Event'

        ),
        'menu_icon' => 'dashicons-calendar-alt',
    ));
}

add_action('init', 'friends_blog_plugin');