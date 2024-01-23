<?php

if (!defined('ABSPATH')) exit;


/**
 * Register meta box(es).
 */
function wpdocs_register_meta_boxes()
{
    add_meta_box(
        'liaevents-details',
        __('Detalji objave', 'liacalendar'),
        'wpdocs_my_display_callback',
        'lia_events',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'wpdocs_register_meta_boxes');

/**
 * Meta box display callback.
 *
 * @param WP_Post $post Current post object.
 */
function wpdocs_my_display_callback($post)
{
    require_once LIA_PLUGIN_DIR . '/calendar/cpt/form-meta-box.php';
}

/**
 * Save meta box content.
 *
 * @param int $post_id Post ID
 */
function wpdocs_save_meta_box($post_id)
{
    if (empty($_POST)) {
        return $post_id;
    }

    /* Get the meta keys. \*/
    $meta_keys = [
        'EventStartDate',
        'EventStartTime'
    ];

    foreach ($meta_keys as $meta_key) {
        update_post_meta($post_id, $meta_key, sanitize_text_field($_POST[$meta_key]));
    }
}
add_action('save_post', 'wpdocs_save_meta_box');
