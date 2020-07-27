<?php

namespace App\Controllers\Front;

class Kenaikankelas extends FrontController
{
    public function index($start = 0)
    {

        //pagination
        // $config['total_rows'] = $this->blog_model->total_post();
        $data = [
            'posts' => $this->BlogsModel->get_posts(),
            'pager' => $this->BlogsModel->pager
        ];

        $data['view'] = 'frontend/blog/blog';

        $data['settings'] = $this->SettingsModel->get_settings_id();
        $data['view'] = 'public/other/kenaikankelas';
        $data['sub_header'] = 'Pengumuman Kenaikan Kelas';

        return view('public/layout', $data);
    }
    public function cari_data_kenaikan()
    {
        if ($this->request->isAJAX()) {
            $nisn = $this->request->getPost('nisn');
            $registrant = $this->SiswaModel->cari_kelulusan($nisn);
            if ($registrant == 0) {
                echo "tidak ditemuka";
            } else {
                $file_name = $nisn . '.pdf';
                $this->load->library('kelulusan');
                $this->kelulusan->create_pdf($registrant, $file_name);
                $data['file_name'] = $file_name;
                $data['status'] = 'success';
            }
            //$this->TahunModel->tambah_tahun($data);
        }
    }

    //--------------------------------------------------------------------

}
