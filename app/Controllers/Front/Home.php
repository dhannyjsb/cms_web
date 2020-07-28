<?php

namespace App\Controllers\Front;

class Home extends FrontController
{
    public function index()
    {

        if ($this->db_check->tableExists('general_tahun_pelajaran')) {
            $data['tahun_sedang_aktif'] = $this->tahun_aktif;
        } else {
            return redirect()->to(base_url('login'));
        }
        if ($this->session->get('is_login') == 1) {
            $data['data_user'] = $this->FrontModel->get_user_data($this->username);
        } else {
            $data['data_user'] = $this->FrontModel->get_user_null();
        }
        $data['settings'] = $this->SettingsModel->get_settings_id();
        $data['view'] = 'public/home';

        return view('public/layout', $data);
    }

    //--------------------------------------------------------------------

}
