<?php

if ( ! defined( 'ABSPATH' ) ) exit;

class Lia_Custom_PostType {

    protected $args = [];
    
    public function __construct($args = []) {
        $this->args = $args;
        add_action( 'init', [$this,  'register_custom_posttypes'], 0);
    }

    function register_custom_posttypes() {
        $find_cpt_args = $this->create_custom_posttype_args();
        foreach($find_cpt_args as $key => $args) {
            register_post_type($key, $args);
        }

    }

    function create_custom_posttype_args() {

        $find_cpt_labels = $this->define_custom_posttype_labels();

        $cpt_item_args['lia_events'] = [
            'labels'              => $find_cpt_labels['lia_events'],
            // Features this CPT supports in Post Editor
            'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'revisions'),
            /* A hierarchical CPT is like Pages and can have
            * Parent and child items. A non-hierarchical CPT
            * is like Posts.
            */ 
            'hierarchical'        => false,
            'public'              => false,
            'query_var'           => true,
            'show_ui'             => true,
            'show_in_menu'        => false,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 28,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => false,
            'capability_type'     => 'post',
            'show_in_rest'        => false,
            'rewrite'             => array('slug' => 'lia_events'),
        ];

        return $cpt_item_args;

    }


    /**
     * @description Method that defines dynamic and custom post type label details
     * 
     * @return array
     */
    function define_custom_posttype_labels() {

        $cpt_liaevents = [
            'name'                => _x( 'Lia Events', 'Post Type General Name', 'liacalendar' ),
            'singular_name'       => _x( 'Lia Event', 'Post Type Singular Name', 'liacalendar' ),
            'menu_name'           => __( 'LiaEvents', 'liacalendar' ),
            'parent_item_colon'   => __( 'Parent events', 'liacalendar' ),
            'all_items'           => __( 'All events', 'liacalendar' ),
            'view_item'           => __( 'View event', 'liacalendar' ),
            'add_new_item'        => __( 'Add new event', 'liacalendar' ),
            'add_new'             => __( 'Add event', 'liacalendar' ),
            'edit_item'           => __( 'Edit event', 'liacalendar' ),
            'update_item'         => __( 'Update event', 'liacalendar' ),
            'search_items'        => __( 'Search event', 'liacalendar' ),
            'not_found'           => __( 'Event not found', 'liacalendar' ),
            'not_found_in_trash'  => __( 'Event not found in trash', 'liacalendar' )
        ];

        return [
            'lia_events' => $cpt_liaevents,
        ];

    }

}

$cc_posttype = new Lia_Custom_PostType();