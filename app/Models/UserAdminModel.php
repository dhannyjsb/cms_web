<?php

namespace App\Models;

use CodeIgniter\Model;

class UserAdminModel extends Model
{
    protected $table      = 'user_admin';
    protected $primaryKey = 'admin_id';
    protected $useTimestamps = true;
    protected $useSoftDeletes = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    protected $allowedFields = [
        'user_role_id',
        'nama_lengkap',
        'email',
        'mobile_no',
        'image',
        'twitter',
        'facebook',
        'instagram',
        'linkedin',
        'website',
        'tahun_lahir',
        'gender',
        'alamat',
        'password',
        'last_login',
        'last_ip',
    ];


    public function get_user_admin($admin_id)
    {
        $this->join('user_role_name', 'user_role_name.role_id = user_admin.user_role_id');
        return $this->where(['admin_id' => $admin_id])->first();
    }
    public function save_profile($data, $id)
    {
        $this->where('admin_id', $id);
        return $this->update($id, $data);
    }
}
