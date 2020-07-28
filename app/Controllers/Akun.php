<?php

namespace App\Controllers;

use Config\Services;


class Akun extends BaseController
{
    public function index()
    {
        $session = \Config\Services::session();
        if ($session->has('is_admin_login')) {
            return redirect()->to(base_url('admin'));
        }
        if ($session->has('is_guru_login')) {
            return redirect()->to(base_url('guru'));
        }
        if ($session->has('is_tu_login')) {
            return redirect()->to(base_url('tata_usaha'));
        }
        if ($session->has('is_siswa_login')) {
            return redirect()->to(base_url('siswa'));
        }
    }
}
