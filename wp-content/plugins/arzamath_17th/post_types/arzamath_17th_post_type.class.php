<?php

class Arzamath17thPostType {

    public function __construct()
    {
        add_action( 'init', array($this, 'Arzamath17thPostTypeInit'));
    }

    public function Arzamath17thPostTypeInit() {
        $labels = array(
            'name'               => 'Arzamath17thPosts',
            'singular_name'      => 'Arzamath17thPost',
            'menu_name'          => 'Arzamath17thPosts',
            'name_admin_bar'     => 'Arzamath17thPost',
            'add_new'            => 'Add New',
            'add_new_item'       => 'Add New Arzamath17thPost',
            'new_item'           => 'New Arzamath17thPost',
            'edit_item'          => 'Edit Arzamath17thPost',
            'view_item'          => 'View Arzamath17thPost',
            'all_items'          => 'All Arzamath17thPosts',
            'search_items'       => 'Search Arzamath17thPosts',
            'parent_item_colon'  => 'Parent Arzamath17thPosts:',
            'not_found'          => 'No Arzamath17thPosts found.',
            'not_found_in_trash' => 'No Arzamath17thPosts found in Trash.',
        );

        $args = array(
            'labels'             => $labels,
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'arzamath_17th' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => null,
            'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
        );

        register_post_type( 'Arzamath17thPosts', $args );
    }
}


