<?php

function add_enquiries_post_type(){
    $labels = array(
        'name' => _x('Enquiries', 'post type name', 'wallstreet'),
        'singular_name' => _x('Enquiry', 'post types singluar name', 'wallstreet'),
        'add_new_item' => _x('Add New Enquiry', 'adding new enquiry', 'wallstreet')
    );
    $args = array(
        'labels' => $labels,
        'description' => 'Enquiries that come through our website',
        'public' => true,
        'menu_position' => 20,
        'query_var' => true,
        'menu_icon' => 'dashicons-megaphone',
        'supports' => array(
            'title',
            'editor'
        ),
    );
    register_post_type('enquiries', $args);
}
add_action('init', 'add_enquiries_post_type');
