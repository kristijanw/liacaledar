<?php

namespace Lia\Calendar\Menus;

if (!defined('ABSPATH')) exit;

use Lia\Calendar\Helpers\LiaHelper;

class Lia_Admin_Menu
{

    protected $args = [];
    public $lia_helper;

    public function __construct($args = [])
    {
        $this->args = $args;
        $this->lia_helper = new LiaHelper();

        add_action('admin_menu', [$this,  'lia_menu_item_options']);
    }

    public function lia_menu_item_options()
    {

        add_menu_page(
            __('LiaCalendar', 'liacalendar'),
            __('LiaCalendar', 'liacalendar'),
            'manage_options',
            LIA_ADMIN_MENU_PREFIX . 'options',
            [$this, LIA_ADMIN_MENU_PREFIX . 'options_general'],
            'dashicons-book-alt',
            27
        );

        add_submenu_page(
            LIA_ADMIN_MENU_PREFIX . 'options',
            __('Lia Events', 'liacalendar'),
            __('Lia Events', 'liacalendar'),
            'manage_options',
            'edit.php?post_type=lia_events',
        );
    }

    public function lia_options_general()
    {
        $this->edv_generate_template($_GET['page']);
    }

    /**
     * Helper method to load main page layout
     */
    private function edv_generate_template($page, $args = [])
    {
        $settings = $this->lia_helper->admin_menu_item_data($page);
        require_once LIA_PLUGIN_DIR . '/calendar/menus/layout/_admin.php';
    }
}

$lia_admin_menus = new Lia_Admin_Menu();
