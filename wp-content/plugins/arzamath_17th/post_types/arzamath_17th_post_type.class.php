<?php

class Arzamath17thPostType {

    public function __construct()
    {
        add_action( 'init', array($this, 'Arzamath17thPostTypeInit'));
    }

    public function Arzamath17thPostTypeInit() {
        $labels = array(
            'name'               => 'Arzamath 17th Posts',
            'singular_name'      => 'Arzamath 17th Post',
            'menu_name'          => 'Arzamath 17th Posts',
            'name_admin_bar'     => 'Arzamath 17th Post',
            'add_new'            => 'Add New',
            'add_new_item'       => 'Add New Arzamath 17th Post',
            'new_item'           => 'New Arzamath 17th Post',
            'edit_item'          => 'Edit Arzamath 17th Post',
            'view_item'          => 'View Arzamath 17th Post',
            'all_items'          => 'All Arzamath 17th Posts',
            'search_items'       => 'Search Arzamath 17th Posts',
            'parent_item_colon'  => 'Parent Arzamath 17th Posts:',
            'not_found'          => 'No Arzamath 17th Posts found.',
            'not_found_in_trash' => 'No Arzamath 17th Posts found in Trash.',
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
            'supports'           => array('editor', 'thumbnail')
        );

        register_post_type( 'arzamath_17th_post', $args );
    }
}


