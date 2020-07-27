<?php

//use CodeIgniter\Database\MySQLi\Connection;

function get_main_menu($group_id, $attr = '')
{
    $object = new stdClass();
    $main_menu = [];
    $ci = \Config\Database::connect();
    $ci->data = array();
    //  $ci->db->select('*');
    // $ci->db->from('menu');
    // $ci->db->where('group_id', $group_id);
    // $ci->db->order_by('parent_id ASC, position ASC');
    // $query = $ci->db->get();
    //$menu = $query->result();

    //$menu = $ci->query("SELECT * FROM menu_db where group_id = '$group_id' ORDER BY parent_id ASC");

    $db      = \Config\Database::connect();
    $builder = $db->table('menu_db');
    $builder->where('group_id', $group_id);
    $builder->orderby('parent_id ASC, position ASC');
    $query = $builder->get();
    $menu = $query->getResult();


    //dd($menu);
    for ($i = 0; $i <= count($menu) - 1; $i++) {
        if ($menu[$i]->parent_id == 0) {
            $main_menu[] = $menu[$i];
        };
    };

    for ($x = 0; $x < count($main_menu, true); $x++) {
        $parent_menu = [];
        for ($q = 0; $q < count($menu, true); $q++) {
            if ($menu[$q]->parent_id == $main_menu[$x]->id) {
                $parent_menu[] = $menu[$q];
            };
        };
        $main_menu[$x]->parent_menu = $parent_menu;
    };


    //    var_dump($main_menu);

    for ($i = 0; $i < count($main_menu, true); $i++) {
        for ($x = 0; $x < count($main_menu[$i]->parent_menu, true); $x++) {
            for ($e = 0; $e < count($menu, true); $e++) {
                if ($main_menu[$i]->parent_menu[$x]->id == $menu[$e]->parent_id) {
                    $parent_submenu[] = $menu[$e];
                    $uniqueArray = array_unique($parent_submenu, SORT_REGULAR);
                    $main_menu[$i]->parent_menu[$x]->parent_submenu = $uniqueArray;
                };
            };
        };
    }

    $object->main_menu = $main_menu;
    return $object;
}

function get_menu($group_id)
{
    $ci = \Config\Database::connect();
    $data = [
        'group_id' => $group_id
    ];
    echo view('menus/vertical-menu-default', $data);
}


function get_footer($group_id)
{
    $ci = \Config\Database::connect();
    $data = [
        'group_id' => $group_id
    ];
    $ci->load->view('menus/horizontal-menu-default', $data);
}
