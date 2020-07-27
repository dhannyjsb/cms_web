<?php

namespace App\Controllers\Guru;

class Siswa extends GuruBaseController
{
    public function index()
    {
        $data['tahun_sedang_aktif'] = $this->tahun_aktif;
        $data['user_info'] = $this->user_name;
        $data['settings'] = $this->SettingsModel->get_settings_id();
        $data['title'] = ucfirst('dashboard'); // Capitalize the first letter
        $data['view'] = 'dashboard/admin/siswa/index';
        $data['semua_kelas'] = $this->DataSiswaModel->filter_kelas($this->tahun_aktif);
        echo view('dashboard/layout', $data);
    }

    public function view_data()
    {
        $id = $this->request->getPost('id');
        $data['user'] = $this->DataSiswaModel->view_user_by_id($id);
        echo view('dashboard/admin/siswa/view_siswa_single', $data);
    }

    public function get_siswa()
    {
        $data = $this->DataSiswaModel->get_all_siswa($this->tahun_aktif);
        echo json_encode($data);
    }
}
