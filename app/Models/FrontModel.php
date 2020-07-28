<?php

namespace App\Models;

use CodeIgniter\Model;

class FrontModel extends Model
{

    public function get_user_data($username)
    {
        $sql = "SELECT user_role_name.*, T12.*
            FROM (
            SELECT username,nama_lengkap,email,mobile_no,image,last_ip,user_role_id FROM user_admin
            UNION
            SELECT username,nama_lengkap,email,mobile_no,image,last_ip,user_role_id FROM user_siswa
            ) as T12
            LEFT JOIN user_role_name ON T12.user_role_id = user_role_name.role_id 
            WHERE T12.username = '$username'
            ";
        $result = $this->db->query($sql);
        return $result->getRowArray();
    }

    public function get_user_null()
    {
        $data = [
            'username'  => 'Guest',
            'nama_lengkap'  => 'Guest',
            'email'  => 'Guest@mail.com',
            'mobile_no'  => '0000000000',
            'image'  => 'guest.jpg',
            'last_ip'  => '1.1.1.1',
            'user_role_id'  => '7',
            'nama_role'  => 'Tidak Terdaftar'
        ];
        return   $data;
    }
}
