<?php

namespace App\Models;

use CodeIgniter\Model;

class Auth_model extends Model
{
    public function login($data)
    {
        $builder = $this->db->table('user_admin');
        $builder->where('username', $data['username']);

        $query = $builder->get();
        if ($builder->countAllResults() == 0) {
            return false;
        } else {
            //Bandingkan Input Password dengan yang ada di database
            $result = $query->getRowArray();
            $validPassword = password_verify($data['password'], $result['password']);
            if ($validPassword) {
                return $result = $query->getRowArray();
            }
        }
    }
    public function login_siswa($data)
    {
        $builder = $this->db->table('user_siswa');
        $builder->where('username', $data['username']);

        $query = $builder->get();
        if ($builder->countAllResults() == 0) {
            return false;
        } else {
            //Bandingkan Input Password dengan yang ada di database
            $result = $query->getRowArray();
            $validPassword = password_verify($data['password'], $result['password']);
            if ($validPassword) {
                return $result = $query->getRowArray();
            }
        }
    }

    public function save_waktu($data, $id)
    {
        $builder = $this->db->table('user_admin');
        $builder->where('admin_id', $id);
        $builder->update($data);
        return true;
    }
}
