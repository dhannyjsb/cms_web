<?php

namespace App\Controllers\Admin;

class Settings extends AdminBaseController
{
    public function index()
    {
        $data['tahun_sedang_aktif'] = $this->tahun_aktif;
        $data['user_info'] = $this->user_name;
        $data['settings'] = $this->SettingsModel->get_settings_id();

        $data['title'] = ucfirst('Settings'); // Capitalize the first letter
        $data['view'] = 'dashboard/admin/settings/settings';
        echo view('dashboard/layout', $data);
    }

    public function tahun_pelajaran()
    {
        $data['tahun_sedang_aktif'] = $this->tahun_aktif;
        $data['tahun_pelajaran'] = $this->tahun_aktif;
        $data['user_info'] = $this->user_name;
        $data['settings'] = $this->SettingsModel->get_settings_id();
        $data['title'] = ucfirst('Settings'); // Capitalize the first letter
        $data['view'] = 'dashboard/admin/settings/tahun_pelajaran';

        $data['semua_tahun_pelajaran'] = $this->TahunModel->filter_tahun_pelajaran();
        echo view('dashboard/layout', $data);
        if ($this->request->isAJAX()) {
            $data = array(
                'tahun_pelajaran' => $this->request->getPost('tahun_pelajaran'),
                'tahun_keterangan' => $this->request->getPost('tahun_keterangan'),
            );
            $this->TahunModel->tambah_tahun($data);
        }
    }

    public function get_tahun_pelajaran()
    {
        $data = $this->TahunModel->get_tahun_pelajaran();
        echo json_encode($data);
    }
    public function hapus_tahun()
    {
        $id = $this->request->getPost('id');
        $nama_tahun = $this->request->getPost('nama_tahun');
        $data = $this->TahunModel->hapus_tahun($id, $nama_tahun);
        echo json_encode($data);
    }

    public function tahun_aktif()
    {
        if ($this->request->isAJAX()) {
            $id_aktif = $this->request->getPost('tahun_sedang_aktif');
            $data = array(
                'tahun_status' => 0,
            );
            $id_baru = $this->request->getPost('tahun_baru');
            $data2 = array(
                'tahun_status' => 1,
            );
            $this->TahunModel->ubah_tahun_aktif($data, $id_aktif, $data2, $id_baru);
            $aresult = true;
        }
    }

    public function update_system()
    {
        $migrate = \Config\Services::migrations();
        try {
            $migrate->latest();
            $seeder = \Config\Database::seeder();
            $seeder->call('Init_seed');
        } catch (\Exception $e) {
            echo 'error';
        }
    }

    public function simpan_pengaturan()
    {
        if ($this->request->isAJAX()) {
            $data = array(
                'nama_sekolah' => $this->request->getPost('nama_sekolah'),
                'npsn_sekolah' => $this->request->getPost('npsn_sekolah'),
                'telpon_sekolah' => $this->request->getPost('telpon_sekolah'),
                'email_sekolah' => $this->request->getPost('email_sekolah'),
                'status_sekolah' => $this->request->getPost('status_sekolah'),
                'kepala_sekolah' => $this->request->getPost('kepala_sekolah'),
                'jam_operasional' => $this->request->getPost('jam_operasional'),
                'alamat_sekolah' => $this->request->getPost('alamat_sekolah'),
                'kabupaten' => $this->request->getPost('kabupaten'),
                'provinsi' => $this->request->getPost('provinsi'),
                'kode_pos' => $this->request->getPost('kode_pos'),
                'facebook' => $this->request->getPost('facebook'),
                'twitter' => $this->request->getPost('twitter'),
                'linkedin' => $this->request->getPost('linkedin'),
                'instagram' => $this->request->getPost('instagram'),
            );
            $this->SettingsModel->save_pengaturan($data);
        }
        // return redirect()->back();
    }

    public function load_modal_photo()
    {
        if ($this->request->isAJAX()) {
            $validated = $this->validate([
                'file' => [
                    'uploaded[file]',
                    'mime_in[file,image/jpg,image/jpeg,image/png]',
                    'max_size[file,2048]',
                ],
            ]);
            $data_mode = $this->request->getPost('modenya');
            if ($validated) {
                $avatar = $this->request->getFile('file');
                $newName = $avatar->getRandomName();
                $avatar->move(ROOTPATH  . 'public/app-assets/images/logo', $newName);
                $data = [
                    "$data_mode" =>  $newName,
                ];
                $this->admin_model->save_pengaturan($data);
                echo TRUE;
            } else {
                echo  FALSE;
            }
        }
        $data['mode'] = $this->request->getPost('id');
        echo view('dashboard/admin/modal_logo', $data);
    }
}
