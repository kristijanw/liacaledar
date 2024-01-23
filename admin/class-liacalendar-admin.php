<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://licacalendar.com
 * @since      1.0.0
 *
 * @package    Liacalendar
 * @subpackage Liacalendar/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Liacalendar
 * @subpackage Liacalendar/admin
 * @author     Kristijan <freelance.kristijan@gmail.com>
 */
class Liacalendar_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	private $valid_hooks;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

		$this->valid_hooks = [
			'toplevel_page_lia_options'
		];

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles($hook_suffix) {

		if(!in_array($hook_suffix, $this->valid_hooks)) {
			return false;
		}

		wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css', array(), '5.2.3', 'all' );
		wp_enqueue_style( 'jui', 'https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/themes/base/jquery-ui.min.css', array(), '5.2.3', 'all' );
		wp_enqueue_style( 'fa', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), '6.5.0', 'all' );
		wp_enqueue_style( 'js2', 'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css', array(), '4.0.13', 'all' );


		wp_enqueue_style( 'dt', 'https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css', array(), '', 'all' );
		wp_enqueue_style( 'dtb', 'https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css', array(), '', 'all' );

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/liacalendar-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Liacalendar_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Liacalendar_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/liacalendar-admin.js', array( 'jquery' ), $this->version, false );

	}

}
