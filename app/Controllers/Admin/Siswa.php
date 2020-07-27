<?php

namespace App\Controllers\Admin;

class Siswa extends AdminBaseController
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
    public function import()
    {
        $data['tahun_sedang_aktif'] = $this->tahun_aktif;
        $data['user_info'] = $this->user_name;
        $data['settings'] = $this->SettingsModel->get_settings_id();

        $data['title'] = ucfirst('dashboard'); // Capitalize the first letter
        $data['view'] = 'dashboard/admin/siswa/import';

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

    public function hapus()
    {
        $id = $this->request->getPost('id');
        $data = $this->DataSiswaModel->hapus_siswa($id);
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
            return redirect()->to(base_url('admin/siswa/import'));
        } else {
            $extension = $file->getClientExtension();
            if ('xls' == $extension) {
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
            } else {
                $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
            }
            $spreadsheet = $reader->load($file);
            $data = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
            $data_siswa = array();

            $numrow = 1;
            foreach ($data as $row) {
                if ($numrow > 6) {
                    array_push($data_siswa, array(
                        'no' => $row['A'],
                        'nama'      => $row['B'],
                        'nipd'      => $row['C'],
                        'jk'      => $row['D'],
                        'nisn'      => $row['E'],
                        'tempat_lahir'      => $row['F'],
                        'tanggal_lahir'      => $row['G'],
                        'nik'      => $row['H'],
                        'agama'      => $row['I'],
                        'alamat'      => $row['J'],
                        'rt'      => $row['K'],
                        'rw'      => $row['L'],
                        'dusun'      => $row['M'],
                        'kelurahan'      => $row['N'],
                        'kecamatan'      => $row['O'],
                        'kode_pos'      => $row['P'],
                        'jenis_tinggal'      => $row['Q'],
                        'alat_transportasi'      => $row['R'],
                        'telepon'      => $row['S'],
                        'hp'      => $row['T'],
                        'email'      => $row['U'],
                        'skhun'      => $row['V'],
                        'penerima_kps'      => $row['W'],
                        'no_kps'      => $row['X'],
                        'nama_ayah'      => $row['Y'],
                        'tahun_lahir_ayah'      => $row['Z'],
                        'jenjang_pendidikan_ayah'      => $row['AA'],
                        'pekerjaan_ayah'      => $row['AB'],
                        'penghasilan_ayah'      => $row['AC'],
                        'nik_ayah'      => $row['AD'],
                        'nama_ibu'      => $row['AE'],
                        'tahun_lahir_ibu'      => $row['AF'],
                        'jenjang_pendidikan_ibu'      => $row['AG'],
                        'pekerjaan_ibu'      => $row['AH'],
                        'penghasilan_ibu'      => $row['AI'],
                        'nik_ibu'      => $row['AJ'],
                        'nama_wali'      => $row['AK'],
                        'tahun_lahir_wali'      => $row['AL'],
                        'jenjang_pendidikan_wali'      => $row['AM'],
                        'pekerjaan_wali'      => $row['AN'],
                        'penghasilan_wali'      => $row['AO'],
                        'nik_wali'      => $row['AP'],
                        'rombel_saat_ini'      => $row['AQ'],
                        'no_peserta_ujian_nasional'      => $row['AR'],
                        'no_seri_ijazah'      => $row['AS'],
                        'penerima_kip'      => $row['AT'],
                        'nomor_kip'      => $row['AU'],
                        'nama_di_kip'      => $row['AV'],
                        'nomor_kks'      => $row['AW'],
                        'no_registrasi_akta_lahir'      => $row['AX'],
                        'bank'      => $row['AY'],
                        'nomor_rekening_bank'      => $row['AZ'],
                        'rekening_atas_nama'      => $row['BA'],
                        'layak_pip'      => $row['BB'],
                        'alasan_layak_pip'      => $row['BC'],
                        'kebutuhan_khusus'      => $row['BD'],
                        'sekolah_asal'      => $row['BE'],
                        'anak_ke'      => $row['BF'],
                        'lintang'      => $row['BG'],
                        'bujur'      => $row['BH'],
                        'no_kk'      => $row['BI'],
                        'berat_badan'      => $row['BJ'],
                        'tinggi_badan'      => $row['BK'],
                        'lingkar_kepala'      => $row['BL'],
                        'jml_saudara_kandung'      => $row['BM'],
                        'jarak_rumah'      => $row['BN'],
                        'tahun_pelajaran'      => $this->request->getPost('ta_input'),
                        'created_at' => date('Y-m-d H:i:s'),
                    ));
                }
                $numrow++;
            }
            $simpan = $this->DataSiswaModel->import_siswa($data_siswa);
            if ($simpan) {
                session()->setFlashdata('success', 'Imported Transaction successfully');
                return redirect()->to(base_url('admin/siswa/import'));
            }
        }
    }
}
