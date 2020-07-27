<?php

namespace App\Models;

use CodeIgniter\Model;

class TahunModel extends Model
{
    protected $table      = 'general_tahun_pelajaran';
    protected $primaryKey = 'tahun_id';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    protected $useSoftDeletes = true;
    protected $useTimestamps = true;
    protected $allowedFields = [
        'tahun_pelajaran',
        'tahun_status',
        'tahun_keterangan'

    ];
    public function tahun_sedang_aktif()
    {
        return $this->where(['tahun_status' => 1])->first();
    }
    public function get_tahun_pelajaran()
    {
        $this->orderBy('tahun_pelajaran ASC');
        return  $this->findAll();
    }
    public function filter_tahun_pelajaran()
    {
        $this->groupBy('tahun_pelajaran');
        return  $this->findAll();
    }
    public function tambah_tahun($data)
    {
        return $this->insert($data);
    }
    public function hapus_tahun($id, $nama_tahun)
    {
        $asd = $this->db->table('data_siswa');
        $asd->where('tahun_pelajaran', $nama_tahun);
        //$query = $builder2->get();
        if ($asd->countAllResults() == null) {
            $this->where('tahun_id', $id);
            return $this->delete();
        } else {
            return false;
        }
    }
    public function ubah_tahun_aktif($data, $id_aktif, $data2, $id_baru)
    {
        // $builder = $this->db->table('general_tahun_pelajaran');
        $this->where('tahun_id', $id_aktif);
        $this->update($id_aktif, $data);
        $this->where('tahun_id', $id_baru);
        $this->update($id_baru, $data2);
    }
}
