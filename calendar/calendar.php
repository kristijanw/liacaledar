<?php

if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'LIA_VERSION', '1.0.0' );

/**
 * Global plugin constant settings
 */
define( 'LIA_ADMIN_MENU_PREFIX', 'lia_' );
define( 'LIA_DOMAIN', 'lia' );
define( 'LIA_PLUGIN_DIR', WP_PLUGIN_DIR . '/liacalendar');

/**
 * ADMIN
 */
require_once plugin_dir_path( dirname( __FILE__ ) ) . 'calendar/helpers/lia-helper-addon.php';
require_once plugin_dir_path( dirname( __FILE__ ) ) . 'calendar/helpers/lia-helper.php';

require_once plugin_dir_path( dirname( __FILE__ ) ) . 'calendar/cpt/lia-cpt.php';
require_once plugin_dir_path( dirname( __FILE__ ) ) . 'calendar/cpt/event-meta-box.php';

require_once plugin_dir_path( dirname( __FILE__ ) ) . 'calendar/menus/admin-menu.php';