<?php

namespace App\Models;

use CodeIgniter\Model;

class SuratKeluarModel extends Model
{
    protected $table      = 'surat_keluar';
    protected $primaryKey = 'surat_keluar_id';
    protected $useTimestamps = true;
    protected $useSoftDeletes = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    protected $allowedFields = [
        'no_surat_keluar',
        'second_surat_keluar',
        'no_berkas_keluar',
        'alamat_surat_keluar',
        'tanggal_surat_keluar',
        'perihal_surat_keluar',
        'tahun_surat_keluar',
        'pembuat_surat_keluar',
        'pengedit_surat_keluar',
        'penghapus_surat_keluar',
        'id_gdrive_sk',
    ];
    public function get_surat_keluar_list()
    {
        $this->join('user_admin', 'user_admin.id_unik = surat_keluar.pembuat_surat_keluar');
        $this->select('user_admin.nama_lengkap');
        $this->select('surat_keluar.*');
        $this->orderBy('no_surat_keluar');
        return  $this->findAll();
        //    $sql = "SELECT surat_keluar.*, T12.nama_lengkap
        // FROM (
        //     SELECT user_admin.* FROM user_admin
        //  UNION
        //      SELECT user_guru.* FROM user_guru
        //   UNION
        //       SELECT user_tu.* FROM user_tu
        //       ) as T12
        //  LEFT JOIN surat_keluar ON T12.id_unik = surat_keluar.pembuat_surat_keluar  
        //   WHERE surat_keluar.deleted_at IS NULL
        //   ";
        //      $result = $this->db->query($sql);

        //      return $result->getResultArray();
    }
    public function hapus_surat_keluar($id, $penghapus_surat_keluar)
    {
        $data = array(
            'penghapus_surat_keluar' => $penghapus_surat_keluar,
        );
        $this->where('surat_keluar_id', $id);
        $this->update($id, $data);
        $this->where('surat_keluar_id', $id);
        return $this->delete();
    }
    public function tambah_surat_keluar($data)
    {
        return $this->insert($data);
    }
    public function view_surat_keluar_by_id($id)
    {
        return $this->where(['surat_keluar_id' => $id])->first();
    }
    public function simpan_edit_surat_keluar($id_surat, $data)
    {
        $this->where('surat_keluar_id', $id_surat);
        return $this->update($id_surat, $data);
    }
}
