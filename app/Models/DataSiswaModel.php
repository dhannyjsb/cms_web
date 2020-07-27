<?php

namespace App\Models;

use CodeIgniter\Model;

class DataSiswaModel extends Model
{
    protected $table      = 'data_siswa';
    protected $primaryKey = 'no_urut';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    protected $useSoftDeletes = true;
    protected $useTimestamps = true;

    public function get_total_siswa($aktif)
    {
        //  SELECT DISTINCT (year), COUNT (id) as jumlahdata FROM tb_peraturan WHERE type = "regulation" GROUP BY year  
        $query = $this->db->query('SELECT 
        COUNT(*) AS jumlah_siswa, sum(case when jk = "L" then 1 else 0 end) AS laki, 
        sum(case when jk = "P" then 1 else 0 end) AS perempuan FROM data_siswa WHERE tahun_pelajaran = "' . $aktif . '" ');
        //$builder->groupby('rombel_saat_ini');
        return  $query->getRowArray();
    }
    public function ambil_rombel($aktif)
    {
        $query = $this->db->query('SELECT CONCAT(rombel_saat_ini) as kelas, 
        COUNT(*) AS jumlah_siswa, sum(case when jk = "L" then 1 else 0 end) AS laki, 
        sum(case when jk = "P" then 1 else 0 end) AS perempuan FROM data_siswa WHERE tahun_pelajaran = "' . $aktif . '"  GROUP BY rombel_saat_ini ');
        return  $query->getresult();
    }
    public function view_user_by_id($id)
    {

        return $this->where(['no_urut' => $id])->first();
    }
    public function get_total_kelas($aktif)
    {
        $this->where('tahun_pelajaran', $aktif);
        $this->groupby('rombel_saat_ini');
        $this->selectCount('rombel_saat_ini');
        return $this->countAllResults();
    }

    public function filter_kelas($tahun_pelajaran)
    {
        $this->where('tahun_pelajaran', $tahun_pelajaran);
        $this->groupBy('rombel_saat_ini');
        return $this->findAll();
    }
    public function get_all_siswa($tahun_pelajaran)
    {
        $this->where('tahun_pelajaran', $tahun_pelajaran);
        $this->orderBy('nama ASC');
        return $this->findAll();
    }
    public function hapus_siswa($id)
    {
        $this->where('no_urut', $id);
        return $this->delete();
    }
    public function import_siswa($data)
    {
        $this->insertBatch($data);
        return true;
    }
}
