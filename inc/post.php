<?php

/**
 *  Create Code post type
 */

add_action( 'init', 'mycustomcode' );

function mycustomcode() {

	load_plugin_textdomain('mycustomcode', false, basename(dirname(__FILE__)) . '/languages');

    register_post_type( 'mycustomcode',
        array(
            'labels' => array(
                'name' =>  __( 'Code', 'mycustomcode' ),
                'singular_name' => __( 'Code', 'mycustomcode' ),
                'add_new' => __( 'Add Code', 'mycustomcode' ),
                'add_new_item' => __( 'Add Code', 'mycustomcode' ),
                'edit' => __( 'Edit', 'mycustomcode' ),
                'edit_item' => __( 'Edit Code', 'mycustomcode' ),
                'new_item' => __( 'New Code', 'mycustomcode' ),
                'view' => __( 'View', 'mycustomcode' ),
                'view_item' => __( 'View Code', 'mycustomcode' ),
                'search_items' => __( 'Search Code', 'mycustomcode' ),
                'not_found' => __( 'No Code Found', 'mycustomcode' ),
                'not_found_in_trash' => __( 'There is no Code in trash', 'mycustomcode' ),
                'parent' => __( 'Parent Code', 'mycustomcode' )
            ),
            'description' => __( 'Code', 'mycustomcode' ),            
            'public' => true,
            'menu_position' => 29,
            'supports' => array( 'title'),
            'taxonomies' => array( '' ),
            'menu_icon' => 'dashicons-media-code',
            'has_archive' => true
        )
    );
} 