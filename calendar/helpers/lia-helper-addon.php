<?php

namespace Lia\Calendar\Helpers;

class LiaHelperAddon {

    public function admin_menu_item_data($page_slug) {

        $results = [];
        $title_prefix = __('Lia Calendar', 'liacalendar');

        switch($page_slug) {
            case LIA_ADMIN_MENU_PREFIX . 'options':
                $results = [
                    'title' => $title_prefix . ' - ' . __('General', 'liacalendar'),
                    'desc' => '',
                    'define_tabs' => [
                        0 => [
                            'icon' => 'fa-solid fa-gear',
                            'filename' => 'general.php'
                        ],
                    ]
                ];
                break;
            default:
                $results = [
                    'title' => $title_prefix,
                    'desc' => '',
                    'filename' => ''
                ];
                break;
        }

        $results['date'] = date('d.m.Y H:i:s', time());

        return $results;

    }

    public function defineDaysInWeek() {

        return [
            '1' => 'Ponedjeljak',
            '2' => 'Utorak',
            '3' => 'Srijeda',
            '4' => 'Četvrtak',
            '5' => 'Petak',
            '6' => 'Subota',
            '7' => 'Nedjelja'
        ];
    }

    /**
     * DEBUG ONLY
     */
    public function ll($params) {
        echo '<pre>';
            var_dump($params);
        echo '</pre>';
    }

}
