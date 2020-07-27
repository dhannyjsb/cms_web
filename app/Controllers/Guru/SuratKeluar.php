<?php

namespace App\Controllers\Guru;

use Config\Validation;
use Google_Client;
use Google_Service_Drive;
use Google_Service_Drive_DriveFile;

class SuratKeluar extends GuruBaseController
{

    public function index()
    {
        if ($this->request->isAJAX()) {
            if (!$this->validate([
                'tanggal_surat_keluar' => 'required'
            ])) {
                return  "1";
            } else {

                $client = new Google_Client();
                putenv('GOOGLE_APPLICATION_CREDENTIALS=' . ROOTPATH . '/smaba-drive-37fb65fe2b77.json');
                $client->useApplicationDefaultCredentials();
                $user_to_impersonate = 'guru@sman1barambai.sch.id';
                $client->setSubject($user_to_impersonate);
                $client->addScope(Google_Service_Drive::DRIVE);
                $service = new Google_Service_Drive($client);
                if ($this->request->getPost('pakai_file') == 1) {
                    $file = new Google_Service_Drive_DriveFile(array(
                        'name' => 'SK-' . $this->request->getPost('no_surat'),
                        'parents' => array('1-s48qCpk_rAcEUdYwhzTIR-9sTa6kHss') // this is the folder id
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
                        'no_surat_keluar' => $this->request->getPost('no_surat'),
                        'second_surat_keluar' => $this->request->getPost('kode_surat'),
                        'no_berkas_keluar' => $this->request->getPost('no_berkas'),
                        'tanggal_surat_keluar' => $this->request->getPost('tanggal_surat_keluar'),
                        'alamat_surat_keluar' => $this->request->getPost('tujuan_surat'),
                        'perihal_surat_keluar' => $this->request->getPost('perihal_surat'),
                        'tahun_surat_keluar' => $this->request->getPost('tahun_surat_keluar'),
                        'pembuat_surat_keluar' => $this->request->getPost('pembuat_surat_keluar'),
                        'id_gdrive_sk' => $id_gdrive_sk,
                    );
                    $this->SuratKeluarModel->tambah_surat_keluar($data);
                } else {
                    $data = array(
                        'no_surat_keluar' => $this->request->getPost('no_surat'),
                        'second_surat_keluar' => $this->request->getPost('kode_surat'),
                        'no_berkas_keluar' => $this->request->getPost('no_berkas'),
                        'tanggal_surat_keluar' => $this->request->getPost('tanggal_surat_keluar'),
                        'alamat_surat_keluar' => $this->request->getPost('tujuan_surat'),
                        'perihal_surat_keluar' => $this->request->getPost('perihal_surat'),
                        'tahun_surat_keluar' => $this->request->getPost('tahun_surat_keluar'),
                        'pembuat_surat_keluar' => $this->request->getPost('pembuat_surat_keluar'),
                        'id_gdrive_sk' => '-',
                    );
                    $this->SuratKeluarModel->tambah_surat_keluar($data);
                }
            }
        }
        $data['tahun_sedang_aktif'] = $this->tahun_aktif;
        $data['user_info'] = $this->user_name;
        $data['settings'] = $this->SettingsModel->get_settings_id();
        $data['title'] = ucfirst('Surat Keluar'); // Capitalize the first letter
        $data['view'] = 'dashboard/admin/tata_usaha/surat_keluar';
        echo view('dashboard/layout', $data);
    }
    public function get_surat_keluar()
    {
        $data = $this->SuratKeluarModel->get_surat_keluar_list();
        echo json_encode($data);
    }
    public function hapus_surat_keluar()
    {
        $id = $this->request->getPost('id');
        $penghapus_surat_keluar = $this->request->getPost('penghapus_surat_keluar');
        $data = $this->SuratKeluarModel->hapus_surat_keluar($id, $penghapus_surat_keluar);
        echo json_encode($data);
    }

    public function edit_surat_keluar()
    {
        $id = $this->request->getPost('id');
        $data['user_info'] = $this->user_name;
        $data['data_surat'] = $this->SuratKeluarModel->view_surat_keluar_by_id($id);
        echo view('dashboard/admin/tata_usaha/edit_surat_keluar', $data);
    }

    public function simpan_edit_surat_keluar()
    {
        if ($this->request->isAJAX()) {
            if (!$this->validate([
                'tanggal_surat_keluar' => 'required'
            ])) {
                return  "1";
            } else {


                $id_surat = $this->request->getPost('surat_keluar_id');
                $client = new Google_Client();
                putenv('GOOGLE_APPLICATION_CREDENTIALS=' . ROOTPATH . '/smaba-drive-37fb65fe2b77.json');
                $client->useApplicationDefaultCredentials();
                $user_to_impersonate = 'guru@sman1barambai.sch.id';
                $client->setSubject($user_to_impersonate);
                $client->addScope(Google_Service_Drive::DRIVE);
                $service = new Google_Service_Drive($client);
                if ($this->request->getPost('pakai_file') == 1) {
                    $file = new Google_Service_Drive_DriveFile(array(
                        'name' => 'SK-' . $this->request->getPost('no_surat'),
                        'parents' => array('1-s48qCpk_rAcEUdYwhzTIR-9sTa6kHss') // this is the folder id
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
                        'no_surat_keluar' => $this->request->getPost('no_surat'),
                        'second_surat_keluar' => $this->request->getPost('kode_surat'),
                        'no_berkas_keluar' => $this->request->getPost('no_berkas'),
                        'tanggal_surat_keluar' => $this->request->getPost('tanggal_surat_keluar'),
                        'alamat_surat_keluar' => $this->request->getPost('tujuan_surat'),
                        'perihal_surat_keluar' => $this->request->getPost('perihal_surat'),
                        'tahun_surat_keluar' => $this->request->getPost('tahun_surat_keluar'),
                        'pengedit_surat_keluar' => $this->request->getPost('pengedit_surat_keluar'),
                        'id_gdrive_sk' => $id_gdrive_sk,
                    );
                    $this->SuratKeluarModel->simpan_edit_surat_keluar($id_surat, $data);
                } else {
                    $data = array(
                        'no_surat_keluar' => $this->request->getPost('no_surat'),
                        'second_surat_keluar' => $this->request->getPost('kode_surat'),
                        'no_berkas_keluar' => $this->request->getPost('no_berkas'),
                        'tanggal_surat_keluar' => $this->request->getPost('tanggal_surat_keluar'),
                        'alamat_surat_keluar' => $this->request->getPost('tujuan_surat'),
                        'perihal_surat_keluar' => $this->request->getPost('perihal_surat'),
                        'tahun_surat_keluar' => $this->request->getPost('tahun_surat_keluar'),
                        'pengedit_surat_keluar' => $this->request->getPost('pengedit_surat_keluar'),
                        'id_gdrive_sk' => '-',
                    );
                    $this->SuratKeluarModel->simpan_edit_surat_keluar($id_surat, $data);
                }
            }
        }
    }
}
