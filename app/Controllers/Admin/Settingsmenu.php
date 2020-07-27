<?php

namespace App\Controllers\Admin;

class Settingsmenu extends AdminBaseController
{
    public function index()
    {
        $data['tahun_sedang_aktif'] = $this->tahun_aktif;
        $data['user_info'] = $this->user_name;
        $data['settings'] = $this->SettingsModel->get_settings_id();
        $group_id = 1;
        $menu = $this->SettingsMenuModel->get_menu($group_id);
        //        echo "<pre>".print_r($menu,true);die();
        $data['menu_ul'] = '<ul id="easymm"></ul>';
        if ($menu) {
            foreach ($menu as $row) {
                $this->add_row(
                    $row->id,
                    $row->parent_id,
                    ' id="menu-' . $row->id . '" class="sortable"',
                    $this->get_label($row)
                );
            }

            $data['menu_ul'] = $this->generate_list('id="easymm" class="sortable ui-sortable mjs-nestedSortable-branch mjs-nestedSortable-expanded"');
        }
        // dd($data['menu_ul']);
        $data['title'] = ucfirst('Settings'); // Capitalize the first letter
        $data['view'] = 'dashboard/admin/menu/index';
        echo view('dashboard/layout', $data);
    }


    public function save_position()
    {
        $menu = $this->request->getVar('menu');
        if (!empty($menu)) {
            //adodb_pr($menu);
            $menu = $this->request->getVar('menu');
            foreach ($menu as $k => $v) {
                if ($v == 'null') {
                    $menu2[0][] = $k;
                } else {
                    $menu2[$v][] = $k;
                }
            }
            $success = 0;
            if (!empty($menu2)) {
                foreach ($menu2 as $k => $v) {
                    $i = 1;
                    foreach ($v as $v2) {
                        $data['parent_id'] = $k;
                        $data['position'] = $i;
                        $db      = \Config\Database::connect();
                        $builder = $db->table('menu_db');

                        if ($builder->update($data, 'id' . ' = ' . $v2)) {
                            $success++;
                        }
                        $i++;
                    }
                }
            }
        }
    }
    public function add2()
    {
        if ($this->request->isAJAX()) {
            $data = array(
                'title' => $this->request->getPost('title'),
                'url' => $this->request->getPost('url'),
                'group_id' => 1,
            );
            $this->SettingsMenuModel->add_menu($data);
        }
    }

    public function add()
    {
        $title = $this->request->getPost('title');
        if ($title) {
            $data['title'] = $this->request->getPost('title');
            if (!empty($data['title'])) {
                $db     = \Config\Database::connect();
                $builder = $db->table('menu_db');
                $data['url'] = $this->request->getPost('url');
                $data['group_id'] = 1;
                $data['position'] = 99;


                if ($builder->insert($data)) {
                    $data['id'] = $db->insertID();
                    $li_id = 'menu-' . $data['id'];
                    $response = '<li id="' . $li_id . '" class="sortable mjs-nestedSortable-leaf">' . $this->get_labels($data) . '</li>';
                    //$response['li_id'] = $li_id;
                } else {
                    $response['status'] = 2;
                    $response['msg'] = 'Add menu error.';
                }
            } else {
                $response['status'] = 3;
            }
            //header('Content-type: application/json');
            echo ($response);
        }
    }

    private function get_label($row)
    {
        $label = '
            <div class="menuDiv" >
                <span class="itemTitle"><b>' . $row->title . '</b></span>
                <div class="menuEdit">
                    <span class="itemTitle">' . Base_url() . '/' . $row->url . '</span>
                    <a href="asd" class="float-right">Edit</a>
                </div>
            </div>
           ';
        return $label;
    }
    private function get_labels($row)
    {
        $label = '
            <div class="menuDiv" >
                <span class="itemTitle"><b>' . $row['title'] . '</b></span>
                <div class="menuEdit">
                    <span class="itemTitle">' . Base_url() . '/' . $row['url'] . '</span>
                    <a href="asd" class="float-right">Edit</a>
                </div>
            </div>
           ';
        return $label;
    }
    function generate_list($ul_attr = '')
    {
        return $this->ul(0, $ul_attr);
    }

    function add_row($id, $parent, $li_attr, $label)
    {
        $this->data[$parent][] = array('id' => $id, 'li_attr' => $li_attr, 'label' => $label);
    }
    function ul($parent = 0, $attr = '')
    {
        static $i = 1;
        $indent = str_repeat("\t\t", $i);
        if (isset($this->data[$parent])) {
            if ($attr) {
                $attr = ' ' . $attr;
            }
            $html = "\n$indent";
            $html .= "<ol$attr>";
            $i++;
            foreach ($this->data[$parent] as $row) {
                $child = $this->ul($row['id']);
                $html .= "\n\t$indent";
                $html .= '<li' . $row['li_attr'] . '>';
                $html .= $row['label'];
                if ($child) {
                    $i--;
                    $html .= $child;
                    $html .= "\n\t$indent";
                }
                $html .= '</li>';
            }
            $html .= "\n$indent</ol>";
            return $html;
        } else {
            return false;
        }
    }
}
