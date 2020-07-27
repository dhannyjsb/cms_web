<?php

namespace App\Models;

use CodeIgniter\Model;

class RolesModel extends Model
{
    protected $table      = 'user_role_name';
    protected $primaryKey = 'id';

    public function get_admin_roles()
    {
        $this->where(['role_status' => 1])->first();
        return $this->findAll();
    }
}
