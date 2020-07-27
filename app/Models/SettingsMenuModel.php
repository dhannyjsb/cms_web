<?php

namespace App\Models;

use CodeIgniter\Model;

class SettingsMenuModel extends Model
{
    protected $table      = 'menu_db';
    protected $primaryKey = 'id';
    protected $updatedField  = 'updated_at';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'parent_id',
        'title',
        'url',
        'group_id'
    ];

    public function get_menu($group_id)
    {
        $this->where('group_id', $group_id);
        $this->orderby('parent_id , position');
        $query = $this->get();
        $res = $query->getresult();
        //dd($res);
        if ($res) {
            return $res;
        } else {
            return false;
        }
    }
    public function add_menu($data)
    {
        return $this->insert($data);
    }
}
