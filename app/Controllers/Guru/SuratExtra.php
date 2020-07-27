<?php

namespace App\Controllers\Guru;

use Config\Validation;

use Google_Client;
use Google_Service_Drive;
use Google_Service_Drive_DriveFile;

class SuratExtra extends GuruBaseController
{
    public function index()
    {
        if ($this->request->isAJAX()) {
            if (!$this->validate([
                'tanggal_surat_extra' => 'required'
            ])) {
                return  "1";
            } else {

                $client = new Google_Client();
                putenv('GOOGLE_APPLICATION_CREDENTIALS=' . ROOTPATH . '/smaba-drive.json');
                $client->useApplicationDefaultCredentials();
                $user_to_impersonate = 'berkas@sman1barambai.sch.id';
                $client->setSubject($user_to_impersonate);
                $client->addScope(Google_Service_Drive::DRIVE);
                $service = new Google_Service_Drive($client);
                if ($this->request->getPost('pakai_file') == 1) {
                    $file = new Google_Service_Drive_DriveFile(array(
                        'name' =>  date("Y") . '-SK_ESKUL-' . $this->request->getPost('no_surat'),
                        'parents' => array('1sMvsxhfDb8DY7ZGhBUbQGnSLUc2WpyrU') // this is the folder id
                    ));
                    $result = $service->files->create(
                        $file,
                        array(
                            'data' => file_get_contents($this->request->getFile('file')),
                            'mimeType' => 'application/octet-stream',
                            'uploadType' => 'multipart'
                        )
                    );
                    $id_gdrive_sk = $result['id'];
                    $data = array(
                        'no_surat_extra' => $this->request->getPost('no_surat'),
                        'second_surat_extra' => $this->request->getPost('kode_surat'),
                        'no_berkas_extra' => $this->request->getPost('no_berkas'),
                        'tanggal_surat_extra' => $this->request->getPost('tanggal_surat_extra'),
                        'alamat_surat_extra' => $this->request->getPost('tujuan_surat'),
                        'perihal_surat_extra' => $this->request->getPost('perihal_surat'),
                        'tahun_surat_extra' => $this->request->getPost('tahun_surat_extra'),
                        'pembuat_surat_extra' => $this->request->getPost('pembuat_surat_extra'),
                        'id_gdrive_sk' => $id_gdrive_sk,
                    );
                    $this->SuratExtraModel->tambah_surat_extra($data);
                } else {
                    $data = array(
                        'no_surat_extra' => $this->request->getPost('no_surat'),
                        'second_surat_extra' => $this->request->getPost('kode_surat'),
                        'no_berkas_extra' => $this->request->getPost('no_berkas'),
                        'tanggal_surat_extra' => $this->request->getPost('tanggal_surat_extra'),
                        'alamat_surat_extra' => $this->request->getPost('tujuan_surat'),
                        'perihal_surat_extra' => $this->request->getPost('perihal_surat'),
                        'tahun_surat_extra' => $this->request->getPost('tahun_surat_extra'),
                        'pembuat_surat_extra' => $this->request->getPost('pembuat_surat_extra'),
                        'id_gdrive_sk' => '-',
                    );
                    $this->SuratExtraModel->tambah_surat_extra($data);
                }
            }
        }
        $data['tahun_sedang_aktif'] = $this->tahun_aktif;
        $data['user_info'] = $this->user_name;
        $data['settings'] = $this->SettingsModel->get_settings_id();
        $data['title'] = ucfirst('Surat Keputusan'); // Capitalize the first letter
        $data['view'] = 'dashboard/admin/tata_usaha/surat_extra';
        echo view('dashboard/layout', $data);
    }
    public function get_surat_extra()
    {
        $data = $this->SuratExtraModel->get_surat_extra_list();
        echo json_encode($data);
    }
    public function hapus_surat_extra()
    {
        $id = $this->request->getPost('id');
        $penghapus_surat_extra = $this->request->getPost('penghapus_surat_extra');
        $data = $this->SuratExtraModel->hapus_surat_extra($id, $penghapus_surat_extra);
        echo json_encode($data);
    }

    public function edit_surat_extra()
    {
        $id = $this->request->getPost('id');
        $data['user_info'] = $this->user_name;
        $data['data_surat'] = $this->SuratExtraModel->view_surat_extra_by_id($id);
        echo view('dashboard/admin/tata_usaha/edit_surat_extra', $data);
    }

    public function simpan_edit_surat_extra()
    {
        if ($this->request->isAJAX()) {
            if (!$this->validate([
                'tanggal_surat_extra' => 'required'
            ])) {
                return  "1";
            } else {


                $id_surat = $this->request->getPost('surat_extra_id');
                $client = new Google_Client();
                putenv('GOOGLE_APPLICATION_CREDENTIALS=' . ROOTPATH . '/smaba-drive.json');
                $client->useApplicationDefaultCredentials();
                $user_to_impersonate = 'berkas@sman1barambai.sch.id';
                $client->setSubject($user_to_impersonate);
                $client->addScope(Google_Service_Drive::DRIVE);
                $service = new Google_Service_Drive($client);
                if ($this->request->getPost('pakai_file') == 1) {
                    $file = new Google_Service_Drive_DriveFile(array(
                        'name' =>  date("Y") . '-SK_ESKUL-' . $this->request->getPost('no_surat'),
                        'parents' => array('1sMvsxhfDb8DY7ZGhBUbQGnSLUc2WpyrU') // this is the folder id
                    ));
                    $result = $service->files->create(
                        $file,
                        array(
                            'data' => file_get_contents($this->request->getFile('file')),
                            'mimeType' => 'application/octet-stream',
                            'uploadType' => 'multipart'
                        )
                    );
                    $id_gdrive_sk = $result['id'];
                    $data = array(
                        'no_surat_extra' => $this->request->getPost('no_surat'),
                        'second_surat_extra' => $this->request->getPost('kode_surat'),
                        'no_berkas_extra' => $this->request->getPost('no_berkas'),
                        'tanggal_surat_extra' => $this->request->getPost('tanggal_surat_extra'),
                        'alamat_surat_extra' => $this->request->getPost('tujuan_surat'),
                        'perihal_surat_extra' => $this->request->getPost('perihal_surat'),
                        'tahun_surat_extra' => $this->request->getPost('tahun_surat_extra'),
                        'pengedit_surat_extra' => $this->request->getPost('pengedit_surat_extra'),
                        'id_gdrive_sk' => $id_gdrive_sk,
                    );
                    $this->SuratExtraModel->simpan_edit_surat_extra($id_surat, $data);
                } else {
                    $data = array(
                        'no_surat_extra' => $this->request->getPost('no_surat'),
                        'second_surat_extra' => $this->request->getPost('kode_surat'),
                        'no_berkas_extra' => $this->request->getPost('no_berkas'),
                        'tanggal_surat_extra' => $this->request->getPost('tanggal_surat_extra'),
                        'alamat_surat_extra' => $this->request->getPost('tujuan_surat'),
                        'perihal_surat_extra' => $this->request->getPost('perihal_surat'),
                        'tahun_surat_extra' => $this->request->getPost('tahun_surat_extra'),
                        'pengedit_surat_extra' => $this->request->getPost('pengedit_surat_extra'),
                        'id_gdrive_sk' => '-',
                    );
                    $this->SuratExtraModel->simpan_edit_surat_extra($id_surat, $data);
                }
            }
        }
    }
}
