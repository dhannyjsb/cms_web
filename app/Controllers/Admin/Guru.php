<?php

namespace App\Controllers\Admin;

class Guru extends AdminBaseController
{
    public function index()
    {
        $data['tahun_sedang_aktif'] = $this->tahun_aktif;
        $data['user_info'] = $this->user_name;
        $data['settings'] = $this->SettingsModel->get_settings_id();
        $data['title'] = ucfirst('data guru'); // Capitalize the first letter

        $data['view'] = 'dashboard/admin/guru/index';
        $data['semua_status'] = $this->GuruModel->filter_status();
        echo view('dashboard/layout', $data);
    }
    public function import()
    {
        $data['tahun_sedang_aktif'] = $this->tahun_aktif;
        $data['user_info'] = $this->user_name;
        $data['settings'] = $this->SettingsModel->get_settings_id();

        $data['title'] = ucfirst('dashboard'); // Capitalize the first letter
        $data['view'] = 'dashboard/admin/guru/import';

        echo view('dashboard/layout', $data);
    }


    public function get_guru()
    {
        $data = $this->GuruModel->get_all_guru($this->tahun_aktif);
        echo json_encode($data);
    }

    public function hapus()
    {
        $id = $this->request->getPost('id');
        $data = $this->GuruModel->hapus_guru($id);
        echo json_encode($data);
    }


    public function proses_import()
    {
        $validation =  \Config\Services::validation();
        $file = $this->request->getFile('dapo_file');
        $data = array(
            'dapo_file'           => $file,
        );
        if ($validation->run($data, 'transaction') == FALSE) {
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('admin/guru/import'));
        } else {
            $extension = $file->getClientExtension();
            if ('xls' == $extension) {
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
            } else {
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
            }
            $spreadsheet = $reader->load($file);
            $data = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
            $data_guru = array();

            $numrow = 1;
            foreach ($data as $row) {
                if ($numrow > 5) {
                    array_push($data_guru, array(
                        'nama' => $row['B'],
                        'nuptk' => $row['C'],
                        'jk' => $row['D'],
                        'tempat_lahir' => $row['E'],
                        'tanggal_lahir' => $row['F'],
                        'nip' => $row['G'],
                        'status_kepegawaian' => $row['H'],
                        'jenis_ptk' => $row['I'],
                        'agama' => $row['J'],
                        'alamat_jalan' => $row['K'],
                        'rt' => $row['L'],
                        'rw' => $row['M'],
                        'nama_dusun' => $row['N'],
                        'desa_kelurahan' => $row['O'],
                        'kecamatan' => $row['P'],
                        'kode_pos' => $row['Q'],
                        'telepon' => $row['R'],
                        'hp' => $row['S'],
                        'email' => $row['T'],
                        'tugas_tambahan' => $row['U'],
                        'sk_cpns' => $row['V'],
                        'tanggal_cpns' => $row['W'],
                        'sk_pengangkatan' => $row['X'],
                        'tmt_pengangkatan' => $row['Y'],
                        'lembaga_pengangkatan' => $row['Z'],
                        'pangkat_golongan' => $row['AA'],
                        'sumber_gaji' => $row['AB'],
                        'nama_ibu_kandung' => $row['AC'],
                        'status_perkawinan' => $row['AD'],
                        'nama_suami_istri' => $row['AE'],
                        'nip_suami_istri' => $row['AF'],
                        'pekerjaan_suami_istri' => $row['AG'],
                        'tmt_pns' => $row['AH'],
                        'sudah_lisensi_kepala_sekolah' => $row['AI'],
                        'pernah_diklat_kepengawasan' => $row['AJ'],
                        'keahlian_braille' => $row['AK'],
                        'keahlian_bahasa_isyarat' => $row['AL'],
                        'npwp' => $row['AM'],
                        'nama_wajib_pajak' => $row['AN'],
                        'kewarganegaraan' => $row['AO'],
                        'bank' => $row['AP'],
                        'nomor_rekening_bank' => $row['AQ'],
                        'rekening_atas_nama' => $row['AR'],
                        'nik' => $row['AS'],

                        'created_at' => date('Y-m-d H:i:s'),
                    ));
                }
                $numrow++;
            }
            $simpan = $this->GuruModel->import_guru($data_guru);
            if ($simpan) {
                session()->setFlashdata('success', 'Imported Transaction successfully');
                return redirect()->to(base_url('admin/guru/import'));
            }
        }
    }
}
